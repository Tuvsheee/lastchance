<!-- resources/views/reservation.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="/css/payment.css " rel="stylesheet">

       
</head>
<body>

    <div class="container">
        <div id="left-column" class="column">
            <h2>Complete your reservation</h2>

                <form id="paymentForm" action="{{route('pay_store')}}" method="post">
                    <div class="name">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" placeholder="John" required>
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                    </div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>

                <label for="country">Country:</label>
                <input type="text" id="country" name="country" placeholder="Mongolia" required>

                <label for="city">City:</label>
                <select id="cityName" name="cityName" required>
                    <option value="single">Ulaanbaatar</option>
                    <option value="double">Darkhan</option>
                    <option value="suite">Erdenet</option>
                    </select>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="123 Main Street" required>

                <label for="postalCode">Postal Code:</label>
                <input type="text" id="postalCode" name="postalCode" placeholder="10001" required>

                <label for="totalPrice">Total Price:</label>
                <input type="text" id="totalPrice" name="totalPrice" placeholder="$500.00" required>


                <button type="button" onclick="submitPayment()">Submit Payment</button>
                </form>

                <script>
                function submitPayment() {
                    // In a real-world scenario, you would handle payment processing on the server.
                    // This example is for educational purposes and doesn't perform actual payment processing.
                    alert('Payment submitted successfully!');
                }
                </script>
                <div class="approve">
                  <label>
                    <input type="checkbox" id="termsAndConditions" name="termsAndConditions" required>I agree to the terms and conditions
                  </label>
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
