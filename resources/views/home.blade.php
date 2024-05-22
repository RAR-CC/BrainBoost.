@extends('layouts.sbadmin2')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="card-body">
            <div>
                <a href="/administrasi/create" class="btn btn-primary m-1">Buat Administrasi</a>
                <a href="/pasien/create" class="btn btn-primary m-1">Tambah Peserta</a>
                <a href="/dokter/create" class="btn btn-primary m-1">Tambah Guru Pengajar</a>
            </div>
        </div>
    </div>
@endsection
