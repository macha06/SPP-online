@extends('layouts.app_sneat_blank')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="">KWITANSI PEMBAYARAN</h1>
                        <div class="billed"><span class="font-weight-bold ">Nama Sekolah : </span><span class="ml-1">SMKN 4 Tangerang</span></div>
                        <div class="billed"><span class="font-weight-bold ">Tanggal Tagihan : </span><span class="ml-1">{{ $pembayaran->tanggal_bayar->translatedFormat('d F Y') }}</span></div>
                        <div class="billed"><span class="font-weight-bold ">Pembayaran ID : </span><span class="ml-1">#SK4T-{{ $pembayaran->id }}</span></div>
                    </div>
                </div>
                <div class="mt-3">  
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Custom oil painting (24 X 36 in.)</td>
                                    <td>10</td>
                                    <td>34</td>
                                    <td>340</td>
                                </tr>
                                <tr>
                                    <td>Digital illustraion paint(8.5 X 11 in.)</td>
                                    <td>12</td>
                                    <td>50</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Total</td>
                                    <td>940</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button">Pay Now</button></div>
            </div>
        </div>
    </div>
</div>
@endsection