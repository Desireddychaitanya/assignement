<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Questions</title>
  </head>
  <body>
    <div class="container" style="transform: translateY(20vh);">
        <?php echo form_open('registercontroller/questionsadded') ?>
  <div class="form-group row">
    <label for="question" class="col-sm-2 col-form-label">Add question</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="question" placeholder="enter question">
    </div>
  </div>
   <div class="form-group row">
    <label for="option1" class="col-sm-2 col-form-label">Option 1</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option1" placeholder="">
    </div>
  </div>
   <div class="form-group row">
    <label for="option2" class="col-sm-2 col-form-label">Option 2</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="option2" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="option3" class="col-sm-2 col-form-label">Option 3</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option3" placeholder="">
    </div>
  </div>
   <div class="form-group row">
    <label for="option4" class="col-sm-2 col-form-label">Option 4</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option4" placeholder="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="text-align: center;">Primary</button>
<?php echo form_close(); ?>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>