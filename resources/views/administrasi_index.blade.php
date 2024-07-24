@extends('layouts.sbadmin2')
@section('content')
    <style>
        dd {
            margin-bottom: 0;
        }

        dl {
            margin-bottom: 0;
        }
    </style>
    <div class="card">
        <div class="card-header" style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
            {{ $judul }}
        </div>
        <div class="card-body">
            @if (auth()->user()->role != 'dokter')
                <a href="{{ route('administrasi.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th width="38%">Data Peserta</th>
                            <th>Kebutuhan</th>
                            <th>Biaya</th>
                            <th>Status</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($administrasi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <dl class="row">
                                        <dt class="col-md-4">Nama Peserta</dt>
                                        <dd class="col-md-8">: {{ $item->pasien->nama_pasien }}</dd>

                                        <dt class="col-md-4">Nomor HP</dt>
                                        <dd class="col-md-8">: {{ $item->pasien->nomor_hp }}</dd>

                                        <dt class="col-md-4">Kelas Pilihan</dt>
                                        <dd class="col-md-8">: {{ $item->poli }}</dd>

                                        <dt class="col-md-4">Mentor Pengajar</dt>
                                        <dd class="col-md-8">: {{ $item->dokter->nama_dokter }}</dd>
                                    </dl>

                                </td>
                                <td>
                                    <div><strong>Kebutuhan&Pesan</strong>: {{ $item->keluhan }}</div>
                                    <div>
                                        <strong>Hasil :</strong>
                                        {{ $item->diagnosis }}
                                    </div>
                                </td>
                                <td>Rp. {{ number_format($item->biaya, 0, ',', '.') }}</td>
                                <td>
                                    <span
                                        class="badge badge-pill badge-{{ $item->status == 'baru' ? 'primary' : 'success' }}"
                                        style="font-size: 100% !important;">{{ $item->status }}</span>
                                </td>
                                <td>
                                    <a href="/administrasi/{{ $item->id }}/edit" class="btn btn-primary">
                                        Penilaian
                                    </a>
                                    <a href="https://wa.me/6285811535315?text=Hi%20Qiscus" class="btn btn-success" target="_blank">Chat</a>
                                    @if (auth()->user()->role == 'admin')
                                        <form action="{{ route('administrasi.destroy', $item->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
