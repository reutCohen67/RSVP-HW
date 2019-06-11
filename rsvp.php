<html onmouseleave="mouseOutOfWindow()">
<head>
    <link rel="stylesheet" type="text/css" href="rsvp.css">
    <title>RSVP</title>
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
      <button type="button" onclick="formValidation()" class ="submit">Submit</button>
      <button id="myBtn">Contact Us</button>
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
    <button class="sendBtn">send mail</button>
  </div>
</div>
  </div>
  <script type="text/javascript" src="modal.js"></script>
  <script type="text/javascript" src="rsvp.js"></script>

</body>
