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
                    <div class="alert alert-secondary mt-3" role="alert">
                        Pembayaran bisa dilakukan dengan cara langsung ke Admin sekolah atau di transfer melalui bank milik sekolah berikut : <br />
                        <ul>
                            @foreach ($bankSekolah as $itemBank)
                                <li>
                                    {{ $itemBank->nama_bank }} - {{ $itemBank->nomor_rekening }} - {{ $itemBank->nama_rekening }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection