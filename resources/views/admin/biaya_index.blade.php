@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>
                <div class="card-body">
                    <a href="{{ route( $routePrefix .'.create') }}" class="btn btn-primary mb-3 btn-sm">Tambah data</a>
                    {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}
                    <div class="input-group ">
                        <input name="q" type="text" class="form-control" placeholder="Cari Data" aria-label="cari nama" aria-describedby="button-addon2" value="{{ request('q') }}">
                        <button type="submit" class="btn btn-outline-primary" id="button-addon2" >
                            <i class="bx bx-search"></i>
                        </button>
                      </div>
                    {!! Form::close() !!}
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Biaya</th>
                                    <th>Jumlah</th>
                                    <th>Created By</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->formatRupiah('jumlah') }}</td>
                                        <td>{{ $item->user->name }}</td>
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