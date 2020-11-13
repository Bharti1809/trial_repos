<?php
if(isset($_POST['add_guest'])){
	$Name = $_POST['Name'];
  $ContactNo = $_POST['ContactNo'];
  $Address = $_POST['Address'];
  $Country = $_POST['Country'];
	// Database connection
	$conn =  mysqli_connect('localhost','root','','hotelmanagement');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //for addition
        $sql = mysqli_query($conn, "insert into guest(guest_id,name,contactNo,address,country) values('','$Name','$ContactNo','$Address','$Country')");

     if($sql){
         echo "Successfully Added";
     }
     else{
         echo "Unsuccessful Addition";
     }
   }
}
if(isset($_POST['add_booking'])){
	$guest_id = $_POST['guest_id'];
  $room_no = $_POST['room_no'];
  $booking_date = $_POST['booking_date'];
  $checkIn_date = $_POST['checkIn_date'];
  $checkOut_date = $_POST['checkOut_date'];
  $totalPersons = $_POST['totalPersons'];
	// Database connection
	$conn =  mysqli_connect('localhost','root','','hotelmanagement');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //for addition
        $sql = mysqli_query($conn, "insert into booking(booking_id,guest_id,room_no,booking_date,checkIn_date,checkOut_date,totalPersons) values('','$guest_id','$room_no','$booking_date','$checkIn_date','$checkOut_date','$totalPersons')");

     if($sql){
         echo "Booking Successful";
     }
     else{
         echo "Unsuccessful Booking - Please recheck Guest Id and Room No.";
     }

    }
}

if(isset($_POST['display_status'])){
	$room_id = $_POST['room_id'];

	// Database connection
	$conn =  mysqli_connect('localhost','root','','hotelmanagement');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
       //for display
     $sql = "SELECT room_no , room_status FROM room where room_id='$room_id'";
     $result = $conn->query($sql);
     
     if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
         echo "Room No.: " . $row["room_no"]. " - Status: " . $row["room_status"]. "<br>";
       }
     } else {
       echo "No results found";
     }
    }
}
if(isset($_POST['update_price'])){
	$room_id = $_POST['room_id'];
	$updatedPrice = $_POST['updatedPrice'];
  
  // Database connection
	$conn =  mysqli_connect('localhost','root','','hotelmanagement');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        
        //for updation
       $sql=mysqli_query($conn, "UPDATE price SET price='$updatedPrice' where room_id='$room_id'");
     if($sql){
         echo "Price Updated";
     }
     else{
         echo "Something went wrong";
     }
   }
}
/*if(isset($_POST['deleteRoomType'])){
	$firstName = $_POST['room_id'];
	$lastName = $_POST[''];
	
	// Database connection
	$conn =  mysqli_connect('localhost','root','','trial');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        
        //for deletion
       $sql=mysqli_query($conn, "DELETE  FROM trialtable  where ID='$firstName'");
     if($sql){
         echo "Successfully Deleted";
     }
     else{
         echo "Unsuccessful Attempt";
     }
   }
}*/
?>