<?php    
include_once 'header.php'; 
?>

<div class="container">
    
<!-- Booking Form -->
<form method="post" action="index.php" name="booking" class="booking-form">

<div class="form-group">
    <div class="cnt"><h3>NIRA Service Appointment</h3></div>
    <div class="col-md-6 form-group">
    <h4>Contact information:</h4>
    <label for="username">Name:</label>
    <input type="text" name="name" id="name" placeholder="Full name" class="input form-control" autocomplete="off" required autofocus>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Email" class="input form-control" autocomplete="off" required autofocus>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" placeholder="Phone number" class="input form-control" autocomplete="off" required autofocus><br>
    </div>
    <div class="col-md-6 form-group">
    <h4>Reservation infomation:</h4>
    <label for="Servicelist">Service:</label>
    <select class="input form-control" id="service" name="service" required autofocus>
        <option><!-- Service 1 --> New Registration</option>
        <option><!-- Service 2 --> Card Replacement</option>
        <option><!-- Service 3 --> Change of Particulars</option>
        <option><!-- Service 4 --> Rectification</option>
    </select>
    <label for="seldate">Reservation Date:</label>
    <input type="text" name="seldate" id="seldate" placeholder="DD/MM/YYYY 14:00" class="input form-control" autocomplete="off" required autofocus><br>
    </div>
    <input type="submit"  name="booking" value="Book Appointment" class="btn btn-lg btn-book btn-block submit" />
</div>
    
</form>

