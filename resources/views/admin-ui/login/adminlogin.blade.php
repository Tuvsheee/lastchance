<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Marina Admin Panel </title>
    <link rel="stylesheet" href="css/adminlogin.css">
    <link href="{{asset('admin/css/style5.css')}}" rel="stylesheet">
</head>
<body>
    <header>
        <h2 class="logo">Admin Login</h2>
    </header>
    <div class="form_wrapper">
        <div class="card">
            <div class="form-box login">
                <h2>Login</h2>

            <form action="{{ route('adminlogin') }}" method="POST" >
                 @csrf
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                    @endif
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input name="email" type="gmail" id="exampleInputEmail" aria-describedby="emailHelp" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input name="password" type="password" id="exampleInputPassword" required>
                        <label>Password</label>
                    </div>
                 
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register"><p>Don't have an account? <a href="{{ route('aregister') }}" class="register-link">Register</a></p></div>
                </form>
            </div>

            
        </div>
    </div>


    <script src="javascript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
