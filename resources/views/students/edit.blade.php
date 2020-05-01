@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <form method="POST" action="/students/{{ $student->id }}">
                <input type="hidden" name="_method" value="patch">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ $student->nim }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>


        </div>
    </div>
</div>
@endsection