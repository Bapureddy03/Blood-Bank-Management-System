<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  
  <link rel="stylesheet" href="css\style.css">
  <style>
  #sub{
  font-family:monoscript;
  font-size:1.5em;
  box-shadow:2px 4px 3px gray;
  }
  .log{
      width:400px;
      height:200px;
      margin-left:-100px;
  }</style>
  <body>


<footer >
  <div class="logo">
<img class="log" src="https://in.bmscdn.com/nmcms/events/banner/desktop/media-desktop-mkj-gamings-pubg-tournament-2020-1-13-t-16-55-2.jpg" alt="">
  </div>
<div class="foot">

<div class="desc"><div class="text">
<p id="promo">[ Promotional Tournament ]</p>


<ul class="b">
<li> &Gg;
MATCH TYPE: SOLO</li>
<li>&Gg; ENTRY FEE: FREE !</li>
<li> &Gg;
MAP: ERANGLE</li><br><br>
<center><li class="prize">&#8903; Prize Money</li><br>
  <li>&Gg; Rank 11-15 : Prize money  &#8377;50</li><br>
  <li>&Gg; Rank 02-10 : Prize money &#8377;100 </li><br>
  <li>&Gg; Winner Prize &#8377;300</li><br><center><br>
  <li>&laquo; 3 Tournaments to be held<br> on every Saturday & Sunday 9PM &raquo;</li><br>
  <li>&laquo; Room Id and Password <br>will be sent on your Whatsapp number  between 7PM-8PM &raquo;</li>
<br><li>&laquo; Prize Money will be directly credited to your Paytm &raquo;</li>
<br><li><input id="database"/><button type="submit" onclick="myFunction()">+</button></li>

</ul>
</div>
</div>
  <div class="backphone">

  </div>
</div>
</footer>
<div class="login-box">
  <h2>Enter Details Here</h2>
<form action="" method="GET">
    <div class="user-box">
      <input type="text" name="name" required=""/>
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="number" name="ph" required=""/>
      <label>Phone number</label>
    </div>
    <div class="user-box">
      <input type="number" name="ph" required=""/>
      <label>WhatsApp number</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" name="submit" value="Submit"/>
    </a>
  </form>
  <div style="color:white;">
<?php
include("data_entry.php");
error_reporting(0);
?>
</div></div>


  </body>


</html>
<script src="script.js"></script>