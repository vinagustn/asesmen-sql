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
    <main class="d-flex justify-content-center form-signin w-100 mt-5">
        <form method="post" action="{{ route('login') }}">
          
          <h1 class="h3 mt-5 mb-4 fw-normal d-flex justify-content-center">Please sign in</h1>
          @csrf
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <small>
            Don't have any account? 
            <a href="/register">Click to Register</a>
        </small>
        </form>
    </main>
      
</body>
</html>