<?php include 'assests/header.php' ?>

    <div class="container" style="transform: translateY(20vh);">
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ?>
      <?php echo $this->session->flashdata('error') ?>
        <?php echo form_open('registercontroller/questionsadded') ?>
  <div class="form-group row">
    <label for="question" class="col-sm-2 col-form-label">Add question</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="question" placeholder="enter question" name="question">
    </div>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="marks" placeholder="enter marks" name="marks">
    </div>
     <div class="col-sm-2">
      <input type="number" class="form-control" id="marks" placeholder="negative marks" name="negativemarks">
    </div>
  </div>
  <div class="form-group row">
    <label for="answer" class="col-sm-2 col-form-label">Aswer</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="answer" placeholder="enter answer" name="answer">
    </div>
  </div>
   <div class="form-group row">
    <label for="option1" class="col-sm-2 col-form-label">Option 1</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option1" placeholder="" name="option1">
    </div>
  </div>
   <div class="form-group row">
    <label for="option2" class="col-sm-2 col-form-label">Option 2</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option2" placeholder="" name="option2">
    </div>
  </div>
  <div class="form-group row">
    <label for="option3" class="col-sm-2 col-form-label">Option 3</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option3" placeholder="" name="option3">
    </div>
  </div>
   <div class="form-group row">
    <label for="option4" class="col-sm-2 col-form-label">Option 4</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="option4" placeholder="" name="option4">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="text-align: center;">Primary</button>
<?php echo form_close(); ?>
   </div>
   <?php include 'assests/footer.php' ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
