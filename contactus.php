<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
	<?php require_once('hf.php') ?>
<section>
	 <div class="jumbotron">
      <h3 class="lead text-center">Contact Us</h3>
     </div>


  <div class="container">
    <h6 class="lead">Our Address</h6>
    <p>
    D.Care Hospital Management System , Srinagar, Jammu and Kashmir <br>
    <strong>Tel</strong>:+91-9876541230<br>
    <strong>Email ID</strong>: dcare@gmail.com</p>

        <h6>Contact Us by entering following information</h6>
            <form >
          <p>
          	<label for="name">Name</label>
            <input type="text" name="name" id="name"  required />
           
          </p>
          <p>
          	<label for="email">Mail</label>
            <input type="email" name="email" id="email" required />
            
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10" required></textarea>
          </p>
          <p>
            <input class="btn btn-success" name="submit" type="submit" value="Submit Form"  />
            &nbsp;
            <input class="btn btn-warning" name="reset" type="reset"  value="Reset Form" />
          </p>
        </form>
  </div>
</section>

  <?php require_once('footer.php') ?>

</body>
</html>
<style type="text/css">
	.jumbotron{
		margin-top:80px;
	}
	section{
		min-height: 100%;
	}
</style>