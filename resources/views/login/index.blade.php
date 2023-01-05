<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login | Peminjaman Laptop</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/login.css" type="text/css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
     <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="container">
                    <main class="form-register input">
                         @if (session('error'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                   {{ session ('error') }}
                              </div>
                         @endif
                        <div class="card shadow p-5 bg-secondary bg-opacity-25">
                              <form action="{{ route('auth') }}" method="POST">
                                   @csrf
                                   <h1 class="h3 mb-5 fw-normal text-center fs-1">Login</h1>
                                   <div class="form-floating">
                                        <input type="email" name="email" class="form-control mt-2" id="email" placeholder="Your Email" autofocus>
                                        <label for="email">Email address</label>
                                   </div>
                                   <div class="form-floating">
                                        <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Your Password">
                                        <label for="password">Password</label>
                                   </div>
                                   <button class="btn btn-lg btn-primary mt-4 text-center" type="submit">Login</button>    
                              </form>
                        </div>
                    </main>
                    </div>
                </div>
          </div>
     </div>
</body>
</html>