<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Marina Hotel</title>
    <link rel="stylesheet" href="css/style4.css">
    
</head>
<body>
    <header>
        <h2 class="logo">The Marina Hotel</h2>
        <nav class="naviga">
            <a href="home">Home</a>
        </nav>
    </header>
    <div class="form_wrapper">
        <div class="card">
            <div class="form-box register">
                <h2>Register</h2>
                <form action="{{ route('register.save') }}" method="POST" >
                @csrf
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input name="name" type="text" required>
                        <label>Username</label>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input name="email" type="email" required>
                        <label>Email</label>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input name="password" type="password" required>
                        <label>Password</label>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input name="password_confirmation" type="password" required>
                        <label>Repeat Password</label>
                        @error('password_confirmation')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & conditions</label> 
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register"><p>Already have an account? <a href="login" class="login-link">Login</a></p></div>
                </form>
            </div>
        </div>
    </div>


    <script src="javascript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
