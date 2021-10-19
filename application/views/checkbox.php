<html>
	<head>
		<title>JavaScript - Select/Unselect (Check/Uncheck) all CheckBoxes on Button Click.</title>
		<script type="text/javascript">
			function selectAll(){
				var items=document.getElementsByName('acs');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=true;
				}
			}
			function UnSelectAll(){
				var items=document.getElementsByName('acs');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=false;
				}
			}			
		</script>
	</head>
<body>
	<input type="checkbox" name="acs" value="Red">Red<br>
	<input type="checkbox" name="acs" value="Blue">Blue<br>
	<input type="checkbox" name="acs" value="Yellow">Yellow<br>
	<input type="checkbox" name="acs" value="Orange">Orange<br>
	<input type="checkbox" name="acs" value="Pink">Pink<br>
	<input type="checkbox" name="acs" value="Voilet">Voilet<br>
	<p>
	<input type="button" onclick='selectAll()' value="Select All"/>
	<input type="button" onclick='UnSelectAll()' value="Unselect All"/>
	</p>
</body>
</html>