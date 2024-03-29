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
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <div class="form_wrapper">
        <div class="card">
            <div class="form-box register">
                <h2>Register</h2>
                <form action="Home" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
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
