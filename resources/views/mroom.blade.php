<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Marina Hotel"</title>
    <link href="/css/mroom.css " rel="stylesheet" >
    <link href="/css/navbar.css " rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css " rel="stylesheet">
    <script src="{{asset('assets/js/timebar.js')}}"></script>
    
</head>

<body>

      <header>
        <section class="book">
          <div class="container flex_space">
            <div class="form">
              <form action="{{route('m_search')}}" method="POST">
                <a class="nav-v2-logo" href="home">
                <img src="/css/images/title1.png" alt="Marine Life" width="130" height="100">
              </a>
                <input type="date" placeholder="Araival Date">
                <input type="date" placeholder="Departure Date">
                <input type="number" placeholder="Adults">
                <input type="number" placeholder="Children">
                <input type="submit" value="CHECK AVAILABILITY" >
              </form>
              
            </div>
          </div>
        </section>
             
    </header>


    <!-- Time bar -->
    <div id="readTimeBar">
        <div id="progressIndicator"></div>
    </div>

    <div class="filter-by">
      <p>Filter by</p>
      <div class="popular-filters">
        <form  method="GET">
          <label><input type="checkbox" name="filter" value="internet"><i class="fa-solid fa-wifi"></i> Internet Wifi <pre></label>
          <label><input type="checkbox" name="filter" value="tv"><i class="fa-solid fa-tv"></i> TV</label>
          <label><input type="checkbox" name="filter" value="aircondition"><i class="fa-solid fa-wind"></i> AirCondition</label>
          <label><input type="checkbox" name="filter" value="shower"><i class="fa-solid fa-shower"></i> Shower</label>
          <label><input type="checkbox" name="filter" value="breakfast"><i class="fa-solid fa-mug-saucer"></i> Breakfast</label>
          <button type="submit">Search</button>
        </form>
      </div>
    </div>

    <div class="picture1">
      <div class="image-button">
              <div class="room" id="room1">
                <img src="/css/images/1 (1).jpg">
                <div class="heading">
                  <h3><p> King Bed Standard </p></h3>
                </div>
                <a href="modal">
                  <p class="description">room detailes</p>
                </a>
                <p class="free">Free cancellation available</p>
                <p class="member">MEMBER DISCOUND </p>
                <p class="only">Only 1room left</p>
                <h4><p class="sale">40$</p></h4>
                <p class="usd">USD per nigth </p>
                <p class="exc">Excludes taxes and fees</p>
                <a class="price" href="reservation">
                  <div>Booking</div>
                </a>
              </div>
      </div> 
        <div class="image-button">
          <div class="room" id="room2">
          <img src="/css/images/1 (7).jpg">
            <h3><p>Standard Room</p></h3>
            <a href="">
              <p class="description">room detailes</p>
            </a>
            <p class="free">Free cancellation available</p>
            <p class="member">MEMBER DISCOUNT</p>
            <p class="only">Only 1room left</p>
            <h4><p class="sale">34$</p></h4>
            <p class="usd">USD per nigth </p>
            <p class="exc">Excludes taxes and fees</p>
            <a class="price" href="reservation">
                <div>Booking</div>
              </a>
          </div>
        </div>
        <div class="image-button">
          <div class="room" id="room3">
            <img src="/css/images/s3.png" alt="Room 3 Image">
            <h3><p>King Bed Standard City View</p></h3>
            <a href="">
              <p class="description">room detailes</p>
            </a>
            <p class="free">Free cancellation available</p>
            <p class="member">MEMBER DISCOUNT</p>
            <p class="only">Only 1room left</p>
            <h4><p class="sale">37$</p></h4>
            <p class="usd">USD per nigth </p>
            <p class="exc">Excludes taxes and fees</p>
            <a class="price" href="reservation">
                <div>Booking</div>
              </a>
          </div>
        </div>
  </div>

    

    

</body>
</html>