<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="rsvp.css" rel="stylesheet" type="text/css"/>
</head>
</div>
</div>
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
<div class="top">
</div>
<div class="form">
    <div class ="info">
        <h1>RSVP</h1>
        <h2>for the wedding of</h2>
        <h1>Michal & Ronen</h1>
        <p class= "line">________________________________________</p>

        <input id="name" type="text" placeholder="Full Name">
        <input id="phone" type="text" placeholder="Phone">
        <input id="email" type="Email" placeholder="Email">
        <input id="numOfGuest" type="number" placeholder="Number of Guests">

        <select class="select">
            <option value="" disabled selected>Arrival Method</option>
            <option value="shuttle">I need a shuttle</option>
            <option value="independent">independent</option>
        </select>
        <div>
      <textarea onkeyup="textCounter(this,'counter',200);" id="message">Additional
      </textarea>
            <input disabled value="200" id="counter">
        </div>

        <p>
            © All rights reserved to<a href="https://github.com/reutCohen67/RSVP-HW">Reut & Shenhav</a>
        </p>
    </div>
    <div>
        <a href="confirm.php">
        <button type="button" onclick="formValidation()" class ="submit">Submit</button>
        </a>
        <button id="myBtn">Contact Us</button>
    </div>
</div>
</div>
</body>
<script type="text/javascript" src="modal.js"></script>
<script type="text/javascript" src="rsvp.js"></script>
</html>