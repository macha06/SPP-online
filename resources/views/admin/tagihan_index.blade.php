@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route( $routePrefix .'.create') }}" class="btn btn-primary mb-3 btn-sm">Tambah data</a>
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                  {!! Form::selectMonth('bulan', request('bulan'), ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-md-4 col-sm-12">
                                  {!! Form::selectRange('tahun', 2020, date('Y') + 1, request('tahun'), ['class' => 'form-control']) !!}
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Tampil</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Tanggal Tagihan</th>
                                    <th>Status</th>
                                    <th>Total Tagihan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->siswa->nisn }}</td>
                                        <td>{{ $item->siswa->nama }}</td>
                                        <td>{{ $item->tanggal_tagihan->format('d M Y') }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ formatRupiah($item->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                        <td>
                                                
                                            {!! Form::open([
                                                'route' => [$routePrefix .'.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm ("Yakin ingin menghapus data ini ?")',
                                            ]) !!}
                                                {{-- <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                   <i class="fa fa-edit"></i> Edit
                                                </a> --}}

                                                <a href="{{ route($routePrefix .'.show', [
                                                    $item->id,
                                                    'siswa_id' => $item->siswa_id,
                                                    'bulan' => $item->tanggal_tagihan->format('m'),
                                                    'tahun' => $item->tanggal_tagihan->format('Y'), 
                                                ]) }}"
                                                 class="btn btn-info btn-sm m-2 mx-3">
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