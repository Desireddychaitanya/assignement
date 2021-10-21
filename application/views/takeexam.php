    
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

   <!--  <tr>
        <td></td>
        <td><input type="button" name="" value="previous"> </td>
         <td><input type="button" name="" value="next" onclick="function increment()"> </td>
    </tr>
 -->     
    <tr>
        <td></td>
        <td><input type="submit" name=""></td>
    </tr>
    <?php echo form_close() ?>
     
</table>
<?php include 'assests/footer.php' ?>
