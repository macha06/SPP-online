@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">{{ $title }}</h5>
                <div class="card-body">
                    {!! Form::model($model, [
                        'route' => $route, 
                        'method' => $method, 
                    ])  !!}
                    <div class="form-group mt-1">
                        <label for="angkatan">Tagihan Untuk Angkatan Berapa</label>
                        {!! Form::select('angkatan', $angkatan, null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('angkatannama') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="kelas">tagihan Untuk Kelas Berapa</label>
                        {!! Form::select('kelas', $kelas, null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('kelas') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal_tagihan">Tanggal Tagihan</label>
                        {!! Form::date('tanggal_tagihan', $model->tanggal_tagihan ?? date('Y-m-d'), ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('tanggal_taagihan') }}</span>
                    </div>
                    {!! Form::submit($button, ['class' => 'btn btn-primary mt-3']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection