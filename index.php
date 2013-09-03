<html>
<head>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		td{
			font-size:xx-small;
			text-align: center;
		}	
	</style>
</head>
<body>
<table>
<tr>
<?php
$rows = 7;
$startcode = 77000;
$endcode = 77119;
$rowbreak = $startcode%$rows;
$header = "Asian Hope Intl School";

	for($i=$startcode;$i<$endcode;$i++){
	    if($i%$rows == $rowbreak) print("</tr><tr>");
	    print("<td>$header<br/><img src = \"barcode.php?text=$i&size=40\"><br/>$i</td>");
	}
?>
</tr>
</body>
</table>
</html>
