<html>
<head>
<title>Fixed Table Header</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>


<div class="results-table">
<table>
<thead class="fixed">
<tr><th> This </th><th> Is A </th><th> Fixed </th><th> Row</th></tr>
</thead>
<tbody class="scrolling">
<?php

for ($x=1; $x<=20; $x++) {
	echo "<tr><td>This </td><td> is </td><td> row </td><td> ".$x." </td></tr>";
}

?>
</tbody>
<tfoot>
<tr class="footer"><td colspan=4>Footer Row</td></tr>
</tfoot>
</table>
</div>
</body>
</html>
