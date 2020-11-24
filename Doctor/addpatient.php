<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  	<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet"> 
</head>
<body>
<?php require_once('doctormenu.php') ?>
<?php require_once('doctorheader.php') ?>
<div class="container">
  <div class="heading" >
      <h2>Doctor  Management System</h2>
      <p class="lead"> Add Patient</p>   
    </div>
    <form method="post">
    <table class="table table-bordered">
      <tbody>
        
        <tr>
          <td width="34%">Patient Name</td>
          <td width="66%"><input type="text" name="name" id="patientname"  value=""/></td>
        </tr>

        <tr>
          <td width="34%">Patient email</td>
          <td width="66%"><input type="email" name="email" id="patientname"  value=""/></td>
        </tr>

         <tr>
          <td width="34%">Patient Contact</td>
          <td width="66%"><input type="text" name="contact" id="patientname"  value=""/></td>
        </tr>

        <tr>
          <td>Address</td>
          <td><textarea name="address" id="address" cols="55" rows="5"></textarea></td>
        </tr>
    
   
          <td>Password</td>
          <td><input type="password" name="password" id="password" value="" /></td>
        </tr>
    
        <tr>
          <td>Blood Group</td>
          <td>
            <select name="blood" id="select2">
              <option value="">Select</option>
              <option value='A+'>A+</option>
              <option value='A-'>A-</option>
              <option value='B+'>B+</option>
              <option value='B-'>B-</option>
              <option value='O+'>O+</option>
              <option value='O-'>O-</option>
              <option value='AB+'>AB+</option>
              <option value='AB-'>AB-</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <select name="gender" id="select3">
              <option value="">Select</option>
              <option value='MALE'>MALE</option>
              <option value='FEMALE'>FEMALE</option>          
            </select>
          </td>
        </tr>
        <tr>
          <td>Date Of Birth</td>
          <td><input type="number" name="age"  id="dateofbirth"  value=""/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
  </div>
</div>
</div>

</body>
</html>
<style type="text/css">
body{
	background-color: whitesmoke;
}
	 .container
  { 
    
    margin-top:150px;
  }
  .heading{
    width: 450px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
  }
   .lead{
      font-family: 'Libre Franklin', sans-serif;
    }
     input[type=text]{
    width:250px;
    height:35px;
    font-size: 16px;
   }
    input[type=number]{
    width:200px;
    height:35px;
    font-size: 16px;

   }
    input[type=password]{
    width:250px;
    height:35px;
    font-size: 16px;

   }
   #select2, #select3{
    height:30px;
   }
   .container{
    width:700px;
   }
    h2{
      font-family: 'Libre Franklin', sans-serif;
    font-weight: 700;
    }
   
</style>