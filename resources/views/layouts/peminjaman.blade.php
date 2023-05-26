@extends('admin.index')

@section('pages')
<div class="m-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#pinjemin">
    Tambah Peminjaman
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="pinjemin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registrasi Peminjaman Buku</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/peminjaman" method="POST">
              @csrf
                <div class="mb-3 row">
                    <label for="member_id" class="col-sm-5 col-form-label">ID Anggota</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="member_id" name="member_id" placeholder="ID Anggota">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="book_id" class="col-sm-10 col-form-label">ID Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="book_id" name="book_id" placeholder="ID Buku">
                    </div> 
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">ID Peminjam</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Action</th>
            <th scope="col">Dibuat oleh</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pinjam as $borrow)
          <tr>
            <th scope="row">{{ $borrow->id }}</th>
            <td>{{ $borrow->tgl_pinjam }}</td>
            <td>{{ $borrow->member_id }}</td>
            <td>{{ $borrow->book_id }}</td>
            <td>
              <div class="row">
                                    
                <div class="col-1">
                  <a href="/peminjaman/{{ $borrow->id }}/edit" class="btn badge text-primary border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                  </a>
                </div>
                
                <div class="col-1">
                    <form method="POST" action="/peminjaman/{{ $borrow->id }}">
                        @method('delete')
                        @csrf
                        <button class="badge text-primary border-0" onclick="return confirm('Yakin akan hapus data?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" data-toggle="tooltip" title="Hapus" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            </td>
            <td>{{ $borrow->user_id}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection