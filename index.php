<!DOCTYPE html>
<html>
<head>
	<title>Dcare</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	

</head>
<body>
	<?php require_once('hf.php') ?>
  
	<div>
		<img class="img1" style="border-radius:0 0 230px 0; border-right: 2px solid green; " src="images/index11.jpg">
	</div>
	<div class="first">
	<h3 style="font-weight: 700; text-align: center;">D.Care</h3>
	<p class="lead">Empowering People to Improve Their Lives</p>
  <button style="margin-left:160px;" class="btn btn-info"><a style="text-decoration: none; color:black;" href="">About Us</a> <i class="fas fa-arrow-circle-right"></i></button>
	</div>
	<h2 style="text-align: center; font-weight: 700;margin-top: 50px;">Our Specialists</h2>
	<div class="section container">
     <?php
    $con=mysqli_connect("localhost","root","","dcare");
    $records=mysqli_query($con,"select * from doctor order by id desc");

    ?>

    <?php   while ($r=mysqli_fetch_array($records)) {?>
		 <div class="container1">
      <div class="front-face">
        <div class="cover">
          <img src="images/unnamed1.jpg" class="profile">
        </div>
        <div class="name"><?php echo $r['name']?></div>
        <div class="tag">ENT Specialist</div>
        <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, culpa, voluptatum. Esse recusandae fugit ipsum.
        </p>
      </div>
      <div class="back-face">
        <h1 class="lead"><?php echo $r['name']?></h1>
        <a style="text-decoration: none;" href="">More Details</a>
      </div>
    </div>
    <?php } ?>
    </div>
		<div class="text-center" >
			<h2 style="font-weight:700; margin-top: 100px;">About us</h2>
			<p>A management system dedicated and designed for the hospitals/clinics that aim to ease out and systemize the basic yet redundant activity of recording and maintaining the patient's reports for future use. The purpose of developing the software is to automate the manual system of maintain the patient health report by the help of computerized equipment and a software, so that their valuable data/information can be stored for a longer period of time with easy accessing and manipulation of same .The software intends to ease out and help with maintaining the medical reports of the patient and hassle free retrieval when needed. The main objective of this system is to manage the details of the patient. It manages all the information about the patient like medical reports, allergies, blood group and if the patient is /was under some medicines that could cause any reaction in patient's body to new treatment. This will not only ease out the record keeping process but will also be very helpful in case of emergencies.</p>
		</div>
	<div style="background-color: #ddd; margin-top: 50px;">
		<div class="row row1">
		<div class="col-lg-12" >
			<div class="col-lg-6">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/K24V8kkP_GQ?start=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
		</div>
		<div class="col-lg-6">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d141080.73537820537!2d74.61668945725215!3d34.12464338475176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1855686e3c5ef%3A0x66244b7cc1e305c6!2sSrinagar!5e0!3m2!1sen!2sin!4v1593055886811!5m2!1sen!2sin" width="400" height="315" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
		</iframe>
		</div>
		</div>
	</div>
</div>

	<?php require_once('footer.php') ?>

</body>
</html>
<style type="text/css">
html body {
  height:100%;
  background-color: whitesmoke;
 }
 *{
 	margin:0px;
 	padding:0px;
 }
	.img1{
		margin-top:90px;
		width: 1300px;
		height: 500px;
		margin-left:30px;
    opacity: 0.8;
	}
	.first{
		position: absolute;
		top:270px;
		left:500px;
		font-weight: 700;
		font-family: cursive;
		font-size: 40px;
    color:#504852;

	}
	iframe{
		margin-top:50px;
		padding-bottom: 30px;
		
	}
	.row1{
     margin-left:150px;
     
	}
   .section{
   	display: flex;
   	
   }
 .container1{
  position: relative;
  top: 240px;
  left: 180px;
  transform: translate(-50%, -50%);
  margin: 30px;
  height: 400px;
  width: 350px;
  text-align: center;
  border-radius: 5px;
}

.front-face, .back-face{
  position: absolute;
  width: 100%;
  height: 100%;
  background: #ebf8f9;
  border-radius: 5px;
  backface-visibility: hidden;
  transition: transform .4s linear;
}
.cover{
  background: linear-gradient( #8e44ad, #2980b9);
  height: 115px;
  width: 100%;
  border-radius: 5px 5px 0 0;
}
.profile{
  height: 115px;
  width: 115px;
  border-radius: 50%;
  padding: 5px;
  background: white;
  margin-top: 40px;
}
.name{
  font-size: 30px;
  padding-top: 75px;
}
.tag{
  padding: 5px 0;
}
.about{
  margin-top: 10px;
  padding: 0px 35px;
  font-size: 15px;
}
h1{
  color: #0d0d0d;
}


.back-face{
  transform: perspective(800px) rotateY(-180deg);
}
.front-face{
  transform: perspective(800px) rotateY(0deg);
}
.container1:hover > .back-face{
  transform: perspective(800px) rotateY(0deg);
}
.container1:hover > .front-face{
  transform: perspective(800px) rotateY(180deg);
}

    
</style>
