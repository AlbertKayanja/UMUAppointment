 <?php
 //connection to NIRA database on mysql server

$conn = mysqli_connect("localhost", "root", "", "nira")
                                 Or die ("<p>Unable to connect to the database server.</p>".
                                         "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";
?>
