<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   



    <title>Questions</title>
  </head>
  <body>
    
<table id="myTable" class="table table-bordered">
    <thead>
        <tr>
            <th>S.N</th>
            <th>question</th>
            <th>option 1</th>
            <th>option 2</th>
            <th>option 3</th>
            <th>option 4</th>
        </tr>
    </thead>
    <tbody>  
      <?php   
$i=5;
      $this->db->where(array('sn <'=>$i)); 
      $questions = $this->db->get('questions')->result();?>
                <!-- <?php print_r($questions);  ?> -->
    <?php $count = $this->db->query("select count(*) as count from questions ")->result_array();  
               print_r($count[0]);?>
                <?php echo form_open('checkboxcontroller/addanswer')?>
        <?php 
        foreach($questions as $question)
        { ?>
        
        <tr>
           <!--  <?php print_r($question); ?> -->
            <!-- <br> -->
            <input type="hidden" name="questionid[]" value="<?php echo $question->sn ?>">
            
            <td><?php echo $question->sn ?></td>
            <td><?php echo $question->question ?></td> 
            <td><?php echo $question->option1 ?><input type="radio" name="checkbox<?php echo $question->sn ?>"  value="option1" /></td>
            <td><?php echo $question->option2 ?><input type="radio"  name="checkbox<?php echo $question->sn ?>" value="option2" /></td>
            <td><?php echo $question->option3 ?><input type="radio"  name="checkbox<?php echo $question->sn ?>" value="option3" /></td>
            <td><?php echo $question->option4 ?><input type="radio" name="checkbox<?php echo $question->sn ?>" value="option4" /></td>
        </tr>
     

       
    <?php } ?>


    
    </tbody>

    <tr>
        <td></td>
        <td><input type="button" name="" value="previous"> </td>
         <td><input type="button" name="" value="next" onclick="function increment()"> </td>
    </tr>
     
    <tr>
        <td></td>
        <td><input type="submit" name=""></td>
    </tr>
    <?php echo form_close() ?>
     
</table>
<script type="text/javascript">
    function increment()
    {
        <?php $i=$i+4; ?>
        console.log($i);
    }
</script>





<!-- <script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>
