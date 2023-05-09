@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <img src="{{ \Storage::url($model->foto ?? 'images/no-image.png') }}"  width="150">
                        <table class="taable taable-striped table-sm">
                            <thead>
                                <tr>
                                    <td width="15%">ID</td>
                                    <td>: {{ $model->id }}</td>
                                </tr>
                                <tr>
                                    <td>NAMA</td>
                                    <td>: {{ $model->nama }}</td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>: {{ $model->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>NIS</td>
                                    <td>: {{ $model->nis }}</td>
                                </tr>
                                <tr>
                                    <td>ALAMAT</td>
                                    <td>: {{ $model->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>JURUSAN</td>
                                    <td>: {{ $model->jurusan }}</td>
                                </tr>
                                <tr>
                                    <td>KELAS</td>
                                    <td>: {{ $model->kelas }}</td>
                                </tr>
                                <tr>
                                    <td>ANGKATAN</td>
                                    <td>: {{ $model->angkatan }}</td>
                                </tr>
                                <tr>
                                    <td>TGL BUAT</td>
                                    <td>: {{ $model->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td>TGL UBAH</td>
                                    <td>: {{ $model->updated_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td>DIBUAT OLEH</td>
                                    <td>: {{ $model->user->name }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection