@extends('admin.index')

@section('pages')
    <div class="m-5">
        <div class="floating-form">
          <form action="" method="POST">
            @csrf
            @method('patch')
              <div class="mb-3 row">
                  <label for="member_id" class="col-sm-5 col-form-label">ID Anggota</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="member_id" name="member_id" placeholder="ID Anggota" value="{{ old('member_id') }}">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="book_id" class="col-sm-10 col-form-label">ID Buku</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="book_id" name="book_id" placeholder="ID Buku" value="{{ old('book_id') }}">
                  </div> 
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
    </div>
@endsection