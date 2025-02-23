@extends('layouts.sbadmin2')

@section('content')
    <div class="card">
        <div class="card-header"style="background: linear-gradient(189deg, #00E0FF -2.63%, #0083FF 45.96%, #011469 88.59%); color: white;">{{ $judul }}</div>
        <div class="card-body">
            <form action="/pasien" method="POST">
                @method('POST')
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6 form-group ">
                        <label for="nama_pasien">Nama Peserta</label>
                        <input type="text" name="nama_pasien" class="form-control" value="{{ old('nama_pasien') }}"
                            autofocus />
                        <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" name="nomor_hp" class="form-control" value="{{ old('nomor_hp') }}"
                            autofocus />
                        <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="jj">Jenis Kelamin</label>
                        <div class="form-check ml-3">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input"
                                id="lk" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}>
                            <label class="form-check-label" for="lk">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input"
                                id="pr" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label" for="pr">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ss">Status </label>
                        <div class="form-check ml-3">
                            <input type="radio" name="status" value="Sudah Menikah" class="form-check-input"
                                id="sm" {{ old('status') == 'Sudah Menikah' ? 'checked' : '' }}>
                            <label class="form-check-label" for="sm">
                                Siswa
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input type="radio" name="status" value="Belum Menikah" class="form-check-input"
                                id="bm" {{ old('status') == 'Belum Menikah' ? 'checked' : '' }}>
                            <label class="form-check-label" for="bm">
                                Mahasiswa
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection
