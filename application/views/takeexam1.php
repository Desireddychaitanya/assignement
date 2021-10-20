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
        <?php echo form_open('checkboxcontroller/addanswer')?>
<!--         <?php print_r($questions);  ?>  -->
        <?php 
        foreach($questions as $question)
        { ?>
        <tr>
            <input type="hidden" name="questionid[]" value="<?php echo $question->sn ?>">
            
            <td><?php echo $question->sn ?></td>
            <td><?php echo $question->question ?></td> 
            <td><?php echo $question->option1 ?><input type="radio" name="checkbox<?php echo $question->sn ?>"  value="option1" onclick="handleClick(this)";/></td>
            <td><?php echo $question->option2 ?><input type="radio"  name="checkbox<?php echo $question->sn ?>" value="option2" onclick="handleClick(this)";/></td>
            <td><?php echo $question->option3 ?><input type="radio"  name="checkbox<?php echo $question->sn ?>" value="option3" onclick="handleClick(this)";/></td>
            <td><?php echo $question->option4 ?><input type="radio" name="checkbox<?php echo $question->sn ?>" value="option4" onclick="handleClick(this)";/></td>
        </tr>
     

       
    <?php } ?>



    </tbody>

</table>
<tr>
        <td></td>
        <td><button  type="submit"  >next</button></td>
    </tr>

     <?php echo form_close() ?>
<?php echo $this->pagination->create_links(); ?>
<script type="text/javascript">
    function handleClickh(myRadio) {
var selectedValue = myRadio.value;
var selectedname =myRadio.name;
console.log(selectedValue);
console.log(selectedname);
if(selectedValue == 'option1')
{
alert(selectedValue);

alert(selectedname);
}
else
{
    alert(selectedValue);
alert(selectedname);
//document.getElementById("txtComments").style.display = 'none';
//Hide textbox.
}
}
</script>
<script type="text/javascript">
    function alertt(){
        
       confirm('are you sure?');
       

       
    }
</script>



 <!-- <script type="text/javascript">
 $('input[type="checkbox"]').on('change', function() {
     $('input.example').not(this).prop('checked', false);  
 });    

</script> -->
<!-- $(document).on('change', ".checkbox1", function () {
    $(".checkbox1").prop("checked", false);
    $(this).prop("checked", true);
  }); -->
<!-- 
<script type="text/javascript">
for (i=0; i<document.checkbox.length; i++){
if (document.checkbox[i].checked !=true)
  document.checkbox[i].disabled='true';
}
</script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 <?php include 'assests/footer.php' ?>