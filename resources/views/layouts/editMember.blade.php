@extends('admin.index')

@section('pages')
    <div class="m-5">
        <form class="floating-form" action="" method="POST">
            @csrf
            @method('patch')
            <h3>Edit Anggota</h3>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama'), $member->nama }}" placeholder="Nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin <small>(tulis P atau L saja)</small></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gender" value="{{ old('gender'), $member->gender }}" id="gender" placeholder="P/L">
                  </div>   
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">{{ old('alamat'), $member->alamat }}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_hp" class="col-sm-3 col-form-label">No. HP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp'), $member->no_hp }}" id="no_hp" placeholder="No. HP">
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a type="button" class="btn btn-outline-secondary" href="/anggota">Back</a>
            </div>
        </form>
        
    </div>
@endsection