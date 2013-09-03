<html>
<head>
	<style type="text/css">
		body{
			font-family: sans-serif;
			
		}
		td{
			font-size: 9px;
			text-align: center;
			padding: 5px;
		}
		table{
			margin-left: auto;
			margin-right: auto;
		}
		
	</style>
</head>
<body>

<?php
if(!empty($_REQUEST['submit'])){
	
	$cols = $_REQUEST['cols'];
	$rows = $_REQUEST['rows'];

	$startcode = $_REQUEST['startcode'];
	$endcode = $_REQUEST['endcode'];
	$header = $_REQUEST['header'];


	$colbreak = $startcode%$cols;
	$rowbreak = $startcode%($rows*$cols);
	$first = true;
	print("<table><tr>");
		for($i=$startcode;$i<$endcode;$i++){
		    if(!$first){
		       if($i%$cols == $colbreak) print("</tr><tr>");
		       if($i%($rows*$cols) == $rowbreak) print("</tr></table><div style =\"page-break-before: always;\"></div><table><tr>");
		    }

		    print("<td>$header<br/><img src = \"barcode.php?text=$i&size=40\"><br/>$i</td>");
		    $first = false;
	
		}
	print("</tr></table>");
}
else{
?>
<form name="input" action="index.php" method="post">
	Title:<input type ="text" name="header"><br/>
	First:<input type ="text" name="startcode" size=5><br/>
	Last:<input type ="text" name="endcode" size=5><br/>
	
	<input type="submit" name="submit" value="Generate!"><br/><br/>
	<i>Advanced</i><br/>
	Rows:<input type ="text" name="rows" size=2 value="13"><br/>
	Columns:<input type ="text" name="cols"size=2 value="6"><br/>

</form>
<?php
}
?>

</body>
</html>
