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
              <form action="{{route('psearch')}}" method="POST">
              @csrf
                <a class="nav-v2-logo" href="home">
                <img src="/css/images/title1.png" alt="Marine Life" width="130" height="100">
              </a>
              <input type="date" name="arrival_date" placeholder="Arrival Date">
              <input type="date" name="departure_date" placeholder="Departure Date">
              <input type="number" name="adults" placeholder="Adults">
              <input type="number" name="children" placeholder="Children">
              <input type="submit" value="CHECK AVAILABILITY">
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
      <div class="popular-filters" id="filters">
          <label><input type="checkbox" name="wifitttt" class="filter-checkbox" value="wifi"><i class="fa-solid fa-wifi"></i> Internet Wifi <pre></label>
          <label><input type="checkbox" name="filter" class="filter-checkbox" value="tv"><i class="fa-solid fa-tv"></i> TV</label>
          <label><input type="checkbox" name="filter" value="aircondition"><i class="fa-solid fa-wind"></i> AirCondition</label>
          <label><input type="checkbox" name="filter" value="shower"><i class="fa-solid fa-shower"></i> Shower</label>
          <label><input type="checkbox" name="filter" value="breakfast"><i class="fa-solid fa-mug-saucer"></i> Breakfast</label>
      </div>
    </div>

    
    @foreach($rooms as $room)
        <!-- Display room information here -->
        <div class="picture1">
      <div class="image-button">
              <div class="room" id="room1">
                <img src="/css/images/1 (1).jpg">
                <div class="heading">
                  <h3><p> {{$room->name}} </p></h3>
                </div>
                  <!-- <h3><p> {{$room->wifi}} </p></h3> -->
                <a href="modal">
                  <p class="description">room detailes</p>
                </a>
                <p class="free">Free cancellation available</p>
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
    
  </div>
    @endforeach


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
$(document).ready(function() {
    $('.filter-checkbox').change(function() {
        var amenities = [];
        $('.filter-checkbox:checked').each(function() {
            amenities.push($(this).val());
        });

        $.ajax({
            url: "{{ route('rooms.filter') }}",
            method: "GET",
            data: {amenities: amenities},
            success: function(response) {
                // Update the displayed rooms
                $('#rooms').empty();
                response.forEach(function($rooms) {
                    $('#rooms').append('<div>' + room.wifi + '</div>');
                });
            }
        });
    });
});
</script>

    

    

    

</body>
</html>