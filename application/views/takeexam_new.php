<?php include 'assests/header.php' ?>


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
      <?php $questions = $this->db->get('questions')->result();?>
                <?php print_r($questions);  ?>
        <?php echo form_open('checkboxcontroller/addanswer')?> 
        <?php 
        foreach($questions as $question)
        { ?>
        <tr>
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

</table>
<tr>
        <td></td>
        <td><button  type="submit" onclick="submit()" >next</button></td>
    </tr>

     <?php echo form_close() ?>
     <script type="text/javascript">
         function submit()
         {

         }
     </script>



  <?php include 'assests/footer.php' ?>
