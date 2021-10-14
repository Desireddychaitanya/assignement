<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register page</title>
  </head>
  <body>
     <div class="container">
    <h1 style="text-align: center;">register now</h1>
<?php echo form_open('Registercontroller/registersuccess') ?>
<!-- k<e\\\\\\\\\\\-0/';p;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;kk          BBbgg5r' -->
     
        
  <div class="row" >
    <div class="form-group col-md-6">
    <label for="firstname">first name</label>
    <input type="text" class="form-control" id="firstname"  placeholder="firstname">
   
  </div>
  <div class="form-group col-md-6">
    <label for="lastname">last name</label>
    <input type="text" class="form-control" id="lastname"  placeholder="lastname">
  
  </div>
    

  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group col-md-6">
    <label for="confirmpassword">confirm Password</label>
    <input type="password" class="form-control" id="confirmpassword" placeholder="confirm Password">
  </div>
  <div class="form-check col-md-6" >
    <label>gender</label>
    <div style="padding-left: 10px">
      
    
    <input type="checkbox" class="form-check-input" id="Male" value="Male">
    <label class="form-check-label" for="Male">Male</label>
  </div>
  <div style="padding-left: 10px;">
      <input type="checkbox" class="form-check-input" id="Female" value="Female">
    <label class="form-check-label" for="Female">Female</label>
  </div>
</div>
<div class="form-group col-md-6">
    <label for="confirmpassword">phone number</label>
    <input type="number" class="form-control" id="phone" placeholder="enter phone number">
  </div>
  <div class="form-group col-md-6">
    <label for="confirmpassword">city</label>
    <input type="text" class="form-control" id="city" placeholder="enter city">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
 <?php echo form_close(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>