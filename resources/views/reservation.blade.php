<!-- resources/views/reservation.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/payment.css " rel="stylesheet">

</head>
<body>

    <div class="container">
        <div id="left-column" class="column">
            <div class="col-75">
                <div class="container">
                  <form action="{{route('res_pay')}}"   method="post">
                  @csrf

                    <div class="row">
                      <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Ochki">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="code@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="71th street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="cityname" placeholder="Ulaanbator">

                        <div class="row">
                          <div class="col-50">
                            <label for="state">State</label>
                            <input type="text" id="state" name="country" placeholder="MH">
                          </div>
                          <div class="col-50">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="postalcode" placeholder="400001">
                          </div>
                        </div>
                      </div>

                      <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                          <i class="fa fa-cc-visa" style="color:navy;"></i>
                          <i class="fa fa-cc-mastercard" style="color:red;"></i>
                          <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Faraz">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="December">
                        <div class="row">
                          <div class="col-50">
                            <label for="expyear">Exp Year</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2027">
                          </div>
                          <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="123">
                          </div>
                        </div>
                      </div>

                    </div>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <input type="submit" value="Continue to checkout" class="btn">
                  </form>
                </div>
              </div>
        </div>
        <div id="right-column" class="column">
                <h3>Booking Summary</h3>
                <img src="/css/images/backround.jpg" id="image" alt="hotel">
                <div class="section">
                  <div id="right-text" class="section-title">Total Price</div>
                  <p>244.44 USD</p>
                  <hr _ngcontent-hce-c165="" class="gray-separator">
                </div>

                <div id="right-text" class="section">
                  <div class="section-title">Dates</div>
                  <p>Nov 21-22, 2023</p>
                  <p>Check-in: 3 pm</p>
                  <hr _ngcontent-hce-c165="" class="gray-separator">
                </div>

                <div id="right-text" class="section">
                  <div class="section-title">Reservation</div>
                  <p>1 room, 2 adults</p>
                  <hr _ngcontent-hce-c165="" class="gray-separator">
                </div>

                <div id="right-text" class="section">
                  <div class="section-title">Room Type</div>
                  <p>1 King Bed Standard City View</p>
                  <p>Rate: Best Flexible Member Exclusive Rate with Breakfast</p>
                  <p>1 night stay</p>
                  <p>209.95 USD</p>
                  <p>Nov 21 - Nov 22: 209.95 USD</p>
                  <p>Average nightly rate: 244.44 USD</p>
                  <hr _ngcontent-hce-c165="" class="gray-separator">
                </div>

                <div class="section">
                  <div class="section-title">Taxes</div>
                  <p>34.49 USD</p>
                  <p>City and State Tax USD 3.50 Occupancy Tax: 34.49 USD</p>
                  <hr _ngcontent-hce-c165="" class="gray-separator">
                </div>
        </div>
    </div>
</body>
</html>
