<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link href="/css/style1.css " rel="stylesheet">
    <link href="/css/navbar.css " rel="stylesheet">
    
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
        <div class="container">
            <div class="card">
                    <form class="check" method="POST" >
                        <!-- Check 1 -->
                        <input type="checkbox" name="check1" id="check1">
                        <label for="check1">Price: Low to High</label><br>
                        <!-- Check 2 -->
                        <input type="checkbox" name="check2" id="check2">
                        <label for="check2">Price: High to Low </label><br>
                        <!-- Check 3 -->
                        <input type="checkbox" name="check3" id="check3">
                        <label for="check3">Distance from city centre</label><br>
                        <!-- Check 4 -->
                        <input type="checkbox" name="check4" id="check4">
                        <label for="check4">Guest rating + our choices</label><br>
                    </form>
                    <div class="search">
                        <form action="/hotels/search" method="GET">
                        <label for="check_in_date">Check-In Date:</label>
                        <input type="date" name="check_in_date">
                        <label for="check_out_date">Check-Out Date:</label>
                        <input type="date" name="check_out_date"><br>
                        <!-- <button class="srch" type="submit" href="/room">Search</button> -->
                        <a class="srch" href="/mroom">Search
                        </a>
                        </form>
                    </div>
            </div>
        </div>

        

    
</body>
</html>