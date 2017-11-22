<?php
$server="localhost";
$username="ankit";
$password="ankit@123";
$dbname="hotel";
$conn=mysqli_connect($server,$username,$password,$dbname);
$error="";
?>







<?php include 'header.php';?>
<html>
<head>
    <meta charset="utf-8">
    <title>Holiday Package</title>
</head>
<style>
    img{
        height: 103%;
        width: 103%
    }
    h3{
        color: green;
    }
   
    #ab{
        color: black;
    }
</style>

<body>
<!-- banner -->

<div class="banner">    	   
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotels</h1>
                <p id="ab" class="animated fadeInUp"><b>Most luxurious hotel of asia with the royal treatments and excellent customer service.</b></p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <<img src="images/g8.jpg" alt="abc">
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight" method="post">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="email" >
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone" >
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="rooms">
              <option>No. of Rooms</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="adult">
              <option>No. of Adult</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2"  id="expiry-month" name="day">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" id="expiry-month" name="month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year"  >
                <option>Year</option>
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" name="msg" rows="4"></textarea>
        </div>
        
        <input type="submit" value="Done" name="submit_request" class="btn btn-danger">
    
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->
</body>
</html>

<?php include 'footer.php';?>







<?php

if(isset($_POST['submit_request']))
{
    echo  $name=mysqli_real_escape_string($conn,strip_tags($_POST['name']));
    echo  $email=mysqli_real_escape_string($conn,strip_tags($_POST['email']));
    echo  $phone=mysqli_real_escape_string($conn,strip_tags($_POST['phone']));
    echo  $room=mysqli_real_escape_string($conn,strip_tags($_POST['rooms']));
    echo  $adult=mysqli_real_escape_string($conn,strip_tags($_POST['adult']));
     echo  $day=mysqli_real_escape_string($conn,strip_tags($_POST['day']));
      echo  $month=mysqli_real_escape_string($conn,strip_tags($_POST['month']));
       echo  $year=mysqli_real_escape_string($conn,strip_tags($_POST['year']));
    echo  $message=mysqli_real_escape_string($conn,strip_tags($_POST['msg']));

   
    $ins_sql="INSERT INTO reservation (name,email,phone,no_of_room,no_of_adult,day,month,year,message) VALUES('$name','$email','$phone','$room','$adult','$day','$month','$year','$message')";
    if(mysqli_query($conn,$ins_sql)){
        ?>
        <script>window.location="index.php"</script>
        
        <?php
    }
}
?>
