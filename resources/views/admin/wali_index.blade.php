@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>
                <div class="card-body">
                    <a href="{{ route( $routePrefix .'.create') }}" class="btn btn-primary mb-3 btn-sm">Tambah data</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No.Hp</th>
                                    <th>Email</th>
                                    <th>Akses</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nohp }}</td>
                                        <td>{{ $item->email }}</td>

                                        @if ($kds === 'wali')
                                            <td>{{ $item->akses }}/wali siswa</td>
                                        @else
                                            <td>{{ $item->akses }}</td>                                          
                                        @endif

                                        <td>
                                            
                                            {!! Form::open([
                                                'route' => [$routePrefix .'.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin menghapus data ini ?")',
                                            ]) !!}
                                                <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                   <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route($routePrefix .'.show', $item->id) }}" class="btn btn-info btn-sm m-2">
                                                   <i class="fa fa-edit"></i> Detail
                                                </a>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">data tidak ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $models->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection