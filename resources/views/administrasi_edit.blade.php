@extends('layouts.sbadmin2')
@section('content')
    <style>
        dl {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        dd {
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
    <div class="card">
        <div class="card-header" style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
            Edit Administrasi {{ $administrasi->kode_administrasi }}
        </div>
        <div class="card-body">
            <form action="{{ route('administrasi.update', $administrasi->id) }}" method="POST">
                @method('PUT')
                @csrf

                <dl class="row">
                    <dt class="col-sm-3">Kode Administrasi</dt>
                    <dd class="col-sm-9">: {{ $administrasi->kode_administrasi }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Tanggal Pesan</dt>
                    <dd class="col-sm-9">: {{ $administrasi->tanggal }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Nama Peserta</dt>
                    <dd class="col-sm-9">: {{ $administrasi->pasien->nama_pasien }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Kelas</dt>
                    <dd class="col-sm-9">: {{ $administrasi->poli }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Mentor Pengajar</dt>
                    <dd class="col-sm-9">: {{ $administrasi->dokter->nama_dokter }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Biaya</dt>
                    <dd class="col-sm-9">: Rp. {{ number_format($administrasi->biaya, 0, ',', '.') }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Kebutuhan&Pesan</dt>
                    <dd class="col-sm-9">: {{ $administrasi->keluhan }}</dd>
                </dl>
                <h5 class="mt-3">Hasil Penilaian Mentor Pengajar</h5>
                <div class="form-group">
                    <textarea name="diagnosis" rows="3" class="form-control" autofocus>{{ $administrasi->diagnosis }}</textarea>
                    <span class="text-danger">{{ $errors->first('diagnosis') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </div>
@endsection
