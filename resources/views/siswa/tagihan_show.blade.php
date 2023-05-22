@extends('layouts.app_sneat_wali')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Tagihan Spp {{ strtoupper($siswa->nama) }}</h5>
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>    
                                <th width="1%">No</th>
                                <th>Nama Tagihan</th>
                                <th class="text-end">Jumlah Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tagihan->tagihanDetails as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_biaya }}</td>
                                    <td class="text-end">{{ formatRupiah($item->jumlah_biaya) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-center fw-bold">Total Pembayaran</td>
                                <td class="text-end fw-bold">{{ formatRupiah($tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                            </tr>
                        </tfoot>
                    </table>     
                    <div class="alert alert-secondary mt-3" role="alert" style="color: black;">
                        Pembayaran bisa dilakukan dengan cara langsung ke Admin sekolah atau di transfer melalui rekening milik sekolah dibawah ini : <br />
                        Jangan Melakukan Transfer ke rekening selain dari rekening dibawah ini
                    </div>
                    <ul>
                        <li><a href="">Lihat Cara Pembayaran Melalui ATM</a></li>
                        <li><a href="">Lihat Cara Pembayaran Melalui internet-Banking</a></li>
                    </ul>
                    Setelah Melakukan Pembayaran, silahkan Upload bukti pembayaran melalui tombol konfirmasi yang ada dibawah ini
                    <div class="row">
                        @foreach ($bankSekolah as $itemBank)
                        <div class="col-md-6">
                            <div class="alert alert-primary" role="alert">
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Bank Tujuan</td>
                                            <td >: {{ $itemBank->nama_bank }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Rekening</td>
                                            <td>: {{ $itemBank->nomor_rekening }}</td>
                                        </tr>
                                        <tr>
                                            <td>Atas_nama</td>
                                            <td>: {{ $itemBank->nama_rekening }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="" class="btn btn-primary mt-3 ">Konfirmasi Pembayaran</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection