<html>
   
    <head>
        <title>Database Management</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            
            /* Full-width input fields */
            input[type=text],input[type=date] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
            }
            
            /* Set a style for all buttons */
            button {
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 30%;
            }
            
            button:hover {
              opacity: 0.8;
            }
            
         
            .container {
              padding: 16px;
            }
            
            span.dob {
              float: right;
              padding-top: 16px;
            }
            
            /* The Modal (background) */
            .modal {
              display: block; 
              position: relative; 
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: auto; /* adjustable height */
             /* overflow: auto; /* Enable scroll if needed */
            /*  background-color: rgb(0,0,0); /* Fallback color */
              /*background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
              /*padding-top: 60px;*/
            }
            
            /* Modal Content/Box */
            .modal-content {
              background-color: white;
              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
              border: 1px solid #888;
              width: 50%; /* Could be more or less, depending on screen size */
            }
            
            /* The Close Button (x) */
            
           
            
            /* Add Zoom Animation */
            .animate {
              -webkit-animation: animatezoom 0.6s;
              animation: animatezoom 0.6s
            }
            
            @-webkit-keyframes animatezoom {
              from {-webkit-transform: scale(0)} 
              to {-webkit-transform: scale(1)}
            }
              
            @keyframes animatezoom {
              from {transform: scale(0)} 
              to {transform: scale(1)}
            }
            
            /* Change styles for span and cancel button on extra small screens */
          
            </style>
      </head>
      <body>
        <div class="container">
          <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
            <div class="modal">
      <form action="connect.php" method="post" class="modal-content animate">
    
        <div class="container">
          <label for="Name">Name</label>
          <input
            type="text"
            class="form-control"
            id="Name"
            name="Name"
          />
          <label for="ContactNo">Contact No.</label>
          <input
            type="text"
            class="form-control"
            id="ContactNo"
            name="ContactNo"
          />
          <label for="Address">Address</label>
          <input
            type="text"
            class="form-control"
            id="Address"
            name="Address"
          />
          <label for="Country">Country</label>
          <input
            type="text"
            class="form-control"
            id="Country"
            name="Country"
          />
            <button type="submit" name="add_guest"  class="btn btn-primary">ADD_GUEST</button></div>
         </form></div>
       
   <div class="modal">
      <form action="connect.php" method="post" class="modal-content animate">
    
        <div class="container">
          <label for="guest_id">Guest_Id</label>
          <input
            type="text"
            class="form-control"
            id="guest_id"
            name="guest_id"
          />
          <label for="room_no">Room No.</label>
          <input
            type="text"
            class="form-control"
            id="room_no"
            name="room_no"
          />
          <label for="booking_date">Booking Date</label>
          <input
            type="date"
            class="form-control"
            id="booking_date"
            name="booking_date"
          />
          <label for="checkIn_date">Check In Date</label>
          <input
            type="date"
            class="form-control"
            id="checkIn_date"
            name="checkIn_date"
          />
          <label for="checkOut_date">Check Out Date</label>
          <input
            type="date"
            class="form-control"
            id="checkOut_date"
            name="checkOut_date"
          />
          <label for="totalPersons">Total Persons</label>
          <input
            type="text"
            class="form-control"
            id="totalPersons"
            name="totalPersons"
          />
            <button type="submit" name="add_booking"  class="btn btn-primary">ADD_BOOKING</button></div>
         </form></div>
   
    <div class="modal">
      <form action="connect.php" method="post" class="modal-content animate">
    <div class="container">
                <label for="room_id">Room Id</label>
                <input
                  type="text"
                  class="form-control"
                  id="room_id"
                  name="room_id"
                />
         <button type="submit" name="display_status" class="btn btn-primary">Check Status</button></div>
      </form></div>

      <div class="modal">
    <form action="connect.php" method="post" class="modal-content animate">
      
    <div class="container">

    <label for="room_id">Room Id</label>
          <input
            type="text"
            class="form-control"
            id="room_id"
            name="room_id"
          />
                <label for="updatedPrice">New Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="updatedPrice"
                  name="updatedPrice"
                />
          
        
         <button type="submit" name="update_price" class="btn btn-primary">UPDATE PRICE</button></div>
      </form></div>

    <div class="modal">
      <form action="trialcode.php" method="post" class="modal-content animate">
    <div class="container">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              
         <button type="submit" name="delete" class="btn btn-primary">DELETE</button></div>
      </form></div>
   </body>
</html>