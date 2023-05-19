<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan as Model;
use App\Http\Requests\StoreTagihanRequest;
use App\Http\Requests\UpdateTagihanRequest;
use App\Models\Biaya;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Tagihan;
use App\Models\TagihanDetail;
use Carbon\Carbon;

class TagihanController extends Controller
{
    private $viewIndex = 'tagihan_index';
    private $viewCreate = 'tagihan_form';
    private $viewEdit = 'tagihan_form';
    private $viewShow = 'tagihan_show';
    private $routePrefix = 'tagihan';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data =[
            "kds" => "murid",
        ];
        if ($request->filled('bulan') && $request->filled('tahun')){
            $models = Model::latest()
            ->whereMonth('tanggal_tagihan', $request->bulan)
            ->whereYear('tanggal_tagihan', $request->tahun)
            ->paginate(50); 
        }else{
            $models = Model::latest()->paginate(50);   
        }
        return view('admin.'. $this->viewIndex, [
            'models' => $models,
            'routePrefix' => $this->routePrefix,
            'title' => 'Data Tagihan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $data = [
            'model' => new Model(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'title' => 'Form Data Tagihan',
            'angkatan' => $siswa->pluck('angkatan', 'angkatan'),
            'kelas' => $siswa->pluck('kelas', 'kelas'),
            'biaya' =>Biaya::get()
        ];
        return view('admin.'. $this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagihanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagihanRequest $request)
    {
        //1. Lakukan Validasi
        //2. ambil data biaya yang ditaagihkan
        //3. ambil data siswa yang ditaagihkan berdasrkan kels atau angkatan
        //4. Lakukan perullangan berdaasarkaan dataa siswa
        //5. didalam perlangan , span dattaa erdasaarkaan biiya dan siswa
        //6. siimpan notf database ntk tagihan
        //7. redirect back
        //8. redirect ehhalaan index
        $requestData = $request->validated();
        $biayaIdArray = $requestData['biaya_id'];
        $siswa = Siswa::query();
        if ($requestData['kelas'] != '') {
            $siswa->where('kelas', $requestData['kelas']);
        }
        if ($requestData['angkatan'] != '') {
            $siswa->where('angkatan', $requestData['angkatan']);
        }
        $siswa = $siswa->get();
        foreach ($siswa as $item) {
            $itemSiswa = $item;
            $biaya = Biaya::whereIn('id', $biayaIdArray)->get();
            unset($requestData['biaya_id']);
            $requestData['siswa_id'] = $itemSiswa->id;
            $requestData['status'] = 'baru';
            $tanggalJatuhTempo = Carbon::parse($requestData['tanggal_jatuh_tempo']);
            $tanggalTagihan = Carbon::parse($requestData['tanggal_tagihan']);
            $bulanTagihan = $tanggalTagihan->format('m');
            $tahunTagihan = $tanggalTagihan->format('Y');
            $cekTagihan = Model::where('siswa_id', $itemSiswa->id)
                ->whereMonth('tanggal_tagihan', $bulanTagihan)
                ->whereYear('tanggal_tagihan', $tahunTagihan)
                ->first();
            if($cekTagihan == null){
                $tagihan = Model::create($requestData);
                foreach ($biaya as $itemBiaya) {
                    $detail = TagihanDetail::create([
                        'tagihan_id' => $tagihan->id,
                        'nama_biaya' => $itemBiaya->nama,
                        'jumlah_biaya' => $itemBiaya->jumlah,
                    ]);
                }
            }
            
        }
        flash("Data Tagihan Berhasil Disimpan")->success();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $tagihan = Model::findOrFail($id);
        $data['tagihan'] = $tagihan;
        $data['siswa'] = $tagihan->siswa;
        $data['periode'] = Carbon::parse($tagihan->tanggal_tagihan)->translatedFormat('F Y');
        $data['model'] = new Pembayaran();
        return view('admin.' . $this->viewShow, $data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $tagihan)
    {
        //
    }
}
