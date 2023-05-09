@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="taable taable-striped table-sm">
                            <thead>
                                <tr>
                                    <td width="15%">ID</td>
                                    <td>: {{ $model->id }}</td>
                                </tr>
                                <tr>
                                    <td>NAMA</td>
                                    <td>: {{ $model->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: {{ $model->email }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor HP</td>
                                    <td>: {{ $model->nohp }}</td>
                                </tr>
                                    <td>TGL BUAT</td>
                                    <td>: {{ $model->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td>TGL UBAH</td>
                                    <td>: {{ $model->updated_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            </thead>
                        </table>
                        <h4 class="my-3">Tambah Data Anak</h4>
                        {!! Form::open() !!}
                        {!! Form::close() !!}
                        <h4 class="my-3">Data Anak</h4>
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nisn</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($model->siswa as $item)
                                    <tr>
                                        <td>{{ $loop->interation }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection