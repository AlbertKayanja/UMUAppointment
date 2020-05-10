<?php

class Booking{
	
    public function __construct(){
        
        /* Call for booking form */
        $this->showBooking();
        
        /* If booking data is posted call for Reservation Saving form*/
        if (isset($_POST["booking"])) {
            $this->bookReservation();
        } 
    }
    
    /* function showBooking() to open the booking form*/
    public function showBooking(){
                               
        include("views/bookingform.php");

    } /* End showBooking() */
 
    /* Function to reserve Appointment on selected date*/
    private function bookReservation(){
        
    /* Fetch db connection credentials from dbconnect file. */
    require ('config/dbconnect.php');   

        /* Capture Contact information */
          $name = mysqli_real_escape_string($conn,trim($_POST['name']));
          $email = mysqli_real_escape_string($conn,($_POST['email']));
          $phone = mysqli_real_escape_string($conn,($_POST['phone']));
		  
        /* Capture Appointment information */
          $service = mysqli_real_escape_string($conn,($_POST['service']));
          $seldate = mysqli_real_escape_string($conn,($_POST['seldate']));
          $status = "Pending";
		

        /* Check that main fields are filled with values */
        if(!empty($name) && !empty($email) && !empty($phone)){

            /* Insert data into database, assign status pending */
            $sql = "INSERT INTO reservations (name, email, phone, service, seldate, status) VALUES ('$name', '$email', '$phone', '$service', '$seldate', '$status')";
            $result = @mysqli_query($conn, $sql);
            print_r($result);


        }
    }   
}

?>

