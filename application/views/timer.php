
<?php include 'assests/header.php' ?>
   



    <title>Questions</title>
  </head>
  <body>
  	   <div id="timer"></div>
  	   <p id="demo"></p>

  	  
  	   <script type="text/javascript">
  	   	var r =40;
  	   	var myVar = setInterval(myTimer, 1000);

function myTimer() 
{
	console.log(typeof(r));
    document.getElementById("demo").innerHTML =  --r;
    if (r == 0) 
    {
    	clearInterval(myVar);
    }
}
  	   </script>


<?php include 'assests/footer.php' ?>
