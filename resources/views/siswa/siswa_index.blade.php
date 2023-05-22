@extends('layouts.app_sneat_wali')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Siswa</h5>
                <div class="card-body">
                    <a href="" class="btn btn-primary mb-3 btn-sm">Tambah data</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wali</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>NIS</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Angkatan</th>
                                    <th>Created By</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->wali->name }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->nis }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->angkatan }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">data tidak ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection