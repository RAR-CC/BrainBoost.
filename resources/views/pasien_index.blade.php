@extends('layouts.sbadmin2')

@section('content')
    <div class="card">
        <div class="card-header" style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">
            {{ $judul }}
        </div>
        <div class="card-body">
            <a href="/pasien/create" class="btn btn-primary mb-2">Tambah Peserta</a>
            <div class="row mb-2">
                <div class="col">
                    <form method="GET">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Cari data peserta"
                                value="{{ request('q') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        <th>Tanggal Buat</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pasien as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_pasien }}</td>
                            <td>{{ $item->nomor_hp }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="/pasien/{{ $item->id }}/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="/pasien/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                <a href="https://wa.me/6285811535315?text=Hi%20Qiscus" class="btn btn-success" target="_blank">Chat</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
