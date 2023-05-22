<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\BankSekolah as model;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBankSekolahRequest;
use App\Http\Requests\UpdateBankSekolahRequest;

class BankSekolahController extends Controller
{
    private $viewIndex = 'banksekolah_index';
    private $viewCreate = 'banksekolah_form';
    private $viewEdit = 'banksekolah_form';
    private $viewShow = 'banksekolah_show';
    private $routePrefix = 'banksekolah';
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
        $models = Model::paginate(50);
  
        return view('admin.'. $this->viewIndex, [
            'models' => $models,
            'routePrefix' => $this->routePrefix,
            'title' => 'Data Rekening Sekolah'
        ])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'model' => new Model(),
            'method' => 'POST',
            'route' => $this->routePrefix.'.store',
            'button' => 'SIMPAN',
            'title' => 'Form Data Biaya',
            'listBank' => \App\Models\Bank::pluck('nama_bank', 'id')
        ];
        return view('admin.'. $this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankSekolahRequest $request)
    {
        $requestData = $request->validated();
        $bank = \App\Models\Bank::find($request['bank_id']);
        unset($requestData['bank_id']);
        $requestData['kode'] = $bank->sandi_bank;
        $requestData['nama_bank'] = $bank->nama_bank;

        Model::create($requestData);
        flash('Data Berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.' . $this->viewShow, [
            'model' => Model::findOrFail($id),
            'title' => 'Detail Siswa'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'model' => Model::findOrfail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix.'.update', $id],
            'button' => 'UPDATE',
            'title' => 'Form Edit Data Biaya',
        ];
        return view('admin.'.$this->viewEdit, $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankSekolahRequest $request, $id)
    {
        $model = Model::findOrFail($id);
        $model->fill($request->validated());
        $model->save();
        flash('Data Berhasil diubah');
        return back();
    }

    /**
     * Remove the specified resource from storage
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Model::where('id',$id);
        $model->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
