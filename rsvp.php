<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <link href="rsvp.css" rel="stylesheet" type="text/css"/>
</head>

<body>
  <div class="slideshow-container">
<div class="mySlides fade">
  <img src="3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="5.jpg" style="width:100%">
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<?php


$nameErr = $phoneErr = $numOfGuestErr = $emailErr = $selectErr = $messageErr= "";
$name = $phone = $email = $numOfGuest = $select = $message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required*";

    } else {
        $name = test_input($_POST["name"]);
        $nameErr = "";
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and space allowed*";

        } 
    }
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required*";

    } else {
        $phone = test_input($_POST["phone"]);
        $phoneErr = "";
        $phoneLength = strlen($phone);
        if (!preg_match('/^[0-9]+$/', $phone) || ($phoneLength < 8 || $phoneLength > 10)) {
            $phoneErr = "Phone contain number only, and max is 10*";
        } 
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required*";

    } else {
        $email = test_input($_POST["email"]);
        $emailErr = "";
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $emailErr = "Invalid email format*";
    }


    if (empty($_POST["numOfGuests"])) {
        $guestsErr = "The number of guests is required*";

    } else {
        $guests = test_input($_POST["numOfGuests"]);
        $guestsErr = "";
        if ($guests <= 0) {
            $guestsErr = "The number need to be bigger than 0*";

        }

    }
    if (empty($_POST["select"])) {
        $arrivalErr = "Arrival is required*";
    } else{
        $select = $_POST['select'];
    }

    $additional = test_input($_POST["message"]);
    $additionalLength = strlen($additional);
    if ($additionalLength > 200)
        $additionalErr = "Tha max is 200 chars*";


}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form method="post" > 
<div class="top">
</div>
<div class="form">
    <div class ="info">
        <h1>RSVP</h1>
        <h2>for the wedding of</h2>
        <h1>Michal & Ronen</h1>
        <p class= "line">______________</p>

        <input id="name" name="name" type="text" placeholder="Full Name">
        <p><?php echo $nameErr; ?></p>
        <input id="phone" name="phone" type="text" placeholder="Phone">
        <p ><?php echo $phoneErr; ?></p>
        <input id="email" name="email" type="Email" placeholder="Email">
        <p><?php echo $emailErr; ?></p>
        <input id="numOfGuest" name="numOfGuests" type="number" placeholder="Number of Guests" >
        <p><?php echo $numOfGuestErr; ?></p>

        <select class="select" name="select">
            <option value="" disabled selected>Arrival Method</option>
            <option value="shuttle">I need a shuttle</option>
            <option value="independent">independent</option>
        </select>
        <p><?php echo $selectErr; ?></p>

        <div>
      <textarea onkeyup="textCounter(this,'counter',200);" id="message" name="message">Additional
      </textarea>
            <p><?php echo $messageErr; ?></p>
            <input disabled value="200" id="counter">
        </div>

        <p>
            ֲ© All rights reserved to<a href="https://github.com/reutCohen67/RSVP-HW">Reut & Shenhav</a>
        </p>
    </div>
    <div>
        <button name="submit" type="submit" class ="submit">Submit</button>
        <button type="button" id="myBtn">Contact Us</button>
        <?php 
        if(isset($_POST['submit'])){
        if($name !=''&& $email !=''&& $phone !=''&& $guests !='' && $select != '')
        {
            echo '<div class="thank">';
            echo "Thank you, $name for registrating to our event. Number of participants: $guests";
            echo '</div>';
        }
        else{
?><span><?php echo "Please fill all fields.";?></span> <?php
}
}
?>
    </div>
</div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <p>Contact Us</p>
                <img id="logo" src="reut.jpg" style="width: 18%">
                <img id="logo" src="shenhav.jpg" style="width: 20%">
                <input disabled id="email" type="Email" placeholder="reutcohenb7@gmail.com">
            </div>
            <button type="button" class="sendBtn">send mail</button>
        </div>
    </div>
</div>
</form>


<script type="text/javascript" src="modal.js"></script>
<script type="text/javascript" src="rsvp.js"></script>
</body>
</html>
