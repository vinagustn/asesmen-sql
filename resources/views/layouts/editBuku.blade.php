@extends('admin.index')

@section('pages')
    <div class="m-5">
        <div class="floating-form">
            <form action="" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3 row">
                  <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="pengarang" class="col-sm-3 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Pengarang">
                    </div>   
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tahun_terbit" class="col-sm-3 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                      <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="2001">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
    </div>
@endsection