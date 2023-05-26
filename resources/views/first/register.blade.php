<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEM PEMINJAMAN</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="d-flex justify-content-center mt-5">
        <form action="/register" method="POST">
            @csrf
            <h4 class="mb-3">Registrasi Akun Petugas</h4>
            <div class="mb-3 row">
                <div class="col-sm-15">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-15">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-15">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-15">
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="P/L (hanya input P atau L)">
                </div>  
            </div>
            <div class="mb-3 row">
                <div class="col-sm-15">
                  <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-15">
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP">
                </div>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-primary">Save</button>
                <a type="button" class="btn btn-outline-secondary" href="/">Back</a>
            </div>
            
        </form>
        
    </div>      
</body>
</html>