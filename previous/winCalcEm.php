<?php

session_start();

//print_r($_GET); //troubleshooting

$buttonarray = array('Backspace'=>'Backspace', 'CE'=>'CE', 'C'=>'C',
				'MC'=>'MC', '7'=>'7', '8'=>'8', '9'=>'9', '/'=>'divide', 'sqrt'=>'sqrt',
				'MR'=>'MR', '4'=>'4', '5'=>'5', '6'=>'6', '*'=>'multiply', '%'=>'percent',
				'MS'=>'MS', '1'=>'1', '2'=>'2', '3'=>'3', '-'=>'subtract', '1/x'=>'invert',
				'M+'=>'MPlus', '0'=>'0', '+/-'=>'sign', '.'=>'decimal', '+'=>'add', '='=>'equal');
				

				
//print_r ($buttonarray); //troubleshooting

//make sure that $_GET['btn'] only contains allowed values
function sanitize($field) {
	/*$butarr = array('Backspace', 'CE', 'C', 'MC', '7', '8', '9', 'divide', 'sqrt', 'MR', '4', '5', '6', 'multiply', 'percent',
			'MS', '1', '2', '3', 'subtract', 'invert', 'MPlus', '0', 'sign', 'decimal', 'add', 'equal');*/
	global $buttonarray;
	if (in_array($field, $buttonarray)) {
		return $field;
	} else {
		$_SESSION['Display'] = 'ERR';	
	}
}

//perform arithmetic on entered data, return single variable
function execute($argA, $argB, $argC) {
	switch ($argB) {
		case 'add':
			$result = $argA + $argC;
			break;
		case 'subtract':
			$result = $argA - $argC;
			break;
		case 'multiply':
			$result = $argA * $argC;
			break;
		case 'divide':
			$result = $argA / $argC;
			break;
	}
	return $result;
}

//make sure that $_SESSION['Display'] is set to something
if (!isset($_SESSION['Display'])) {$_SESSION['Display']=0;}

//make sure that $_SESSION['Memory'] is set to something
if (!isset($_SESSION['Memory'])) {$_SESSION['Memory']=0;}


//check to see if $_GET['btn'] is set, and is not blank, then manipulate session variables
if ((isset($_GET['btn'])) && ($_GET['btn']!="")) { 
	$button = sanitize($_GET['btn']);
	//print $button; //troubleshooting
	//manipulate data based on which button was pressed
	switch ($button) {
		case 'Backspace':
			//chop the last character off the end of the $_SESSION['Display'] string and set the new substring to $_SESSION['Display']
			$_SESSION['Display'] = substr($_SESSION['Display'], 0, -1);
			break;
		case 'CE':
			//clear the current display
			unset($_SESSION['Display']);
			break;
		case 'C':
			//check to see if the session variables are set before trying to unset them
			if (isset($_SESSION['NumA'])) {
				unset($_SESSION['NumA']);
			} 
			if (isset($_SESSION['Function'])) {
				unset($_SESSION['Function']);
			} 
			if (isset($_SESSION['NumB'])) {
				unset($_SESSION['NumB']);
			} 
			//clear display variable either way
			$_SESSION['Display'] = 0;			
			break;
		case 'sqrt':
			//find the square root of a number and set the result to $_SESSION['Display']
			$sqrt = sqrt($_SESSION['Display']);
			$_SESSION['Display'] = $sqrt;
			break;
		case 'percent':
			//divide by 100 to create a decimal equivalent for a %
			$_SESSION['Display'] = $_SESSION['Display']/100;
			break;
		case 'invert':
			//invert x
			$_SESSION['Display'] = 1/$_SESSION['Display'];
			break;
		case 'MPlus':
			//add the $_SESSION['Display'] to $_SESSION['Memory'] and set $_SESSION['Memory'] to the total
			$_SESSION['Memory'] += $_SESSION['Display'];
			break;
		case 'MS':
			//set the Memory
			$_SESSION['Memory'] = $_SESSION['Display'];
			break;
		case 'MC':
			//reset the Memory to zero in case someone uses M+ without setting first
			$_SESSION['Memory'] = 0;
			break;
		case 'MR':
			//display the Memory
			$_SESSION['Display'] = $_SESSION['Memory'];
			break;
		case 'sign':
			//change the sign of a number
			$_SESSION['Display'] = -1 * $_SESSION['Display'];
			break;
		case 'equal':
			//create a second variable to hold the new data. run execute(), passing in necessary variables
			$_SESSION['NumB'] = $_SESSION['Display'];
			$result = execute($_SESSION['NumA'], $_SESSION['Function'], $_SESSION['NumB']);
			$_SESSION['Display'] = $result;
			break;
		case 'add':
		case 'subtract':
		case 'multiply':
		case 'divide':
			//create a variable to temporarily hold data entered, create another variable to hold the function entered
			$_SESSION['NumA'] = $_SESSION['Display'];
			$_SESSION['Function'] = $button;
			$_SESSION['Display'] = 0;
			break;
		//do the same action for numerals and decimal point
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 0:
		case 'decimal':
			//add a character to the end of the $_SESSION['Display'] string
			$_SESSION['Display'] .= $button; 
			break;
		case 'ERR':
		default:
			$_SESSION['Display'] = 'ERR';
			break;
	}
}
?>

<?php
$titleadd = "Windows Calculator";
include_once("../header.php");
?>

<P>
<h1>Windows Calculator Emulator</h1>
<h2>using PHP, HTML, and CSS</h2>
</P>
<div class="center">
<table>
<tr><td colspan=6 align="right" class="gray"><? print $_SESSION['Display']; ?></td></tr>
<tr><td class="gray"><? if ($_SESSION['Memory'] != 0) { echo M; }?></td>
<? //switch to PHP to create buttons that are able to call PHP_SELF, print HTML code
$row=1;
foreach($buttonarray as $key => $value) {
	//set colspan value
	if ($value=='Backspace') { 
		$colspan = "colspan=2";
	} else {
		$colspan = "colspan=1";
	}
	//change the end of the line based on row number
	switch ($row) {
		case 3:
		case 9:
		case 15:
		case 21:
			$end = "</td></tr>\n<tr>";
			break;
		case 27:
			$end = "</td></tr>";
			break;
		default:
			$end = "</td>\n";
			break;
	}
	print "<td align='center' $colspan><input type='button' value=$key onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=$value'\">$end";
	$row++;
}	
/*
print "<td align='center' colspan=2><input type='button' value='Backspace' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=Backspace'\"></td>\n
<td align='center'><input type='button' value='CE' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=CE'\"></td>\n
<td align='center'><input type='button' value='C' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=C'\"></td></tr>\n
<tr><td align='center'><input type='button' value='MC' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=MC'\"></td>\n
<td align='center'><input type='button' value='7' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=7'\"></td>\n
<td align='center'><input type='button' value='8' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=8'\"></td>\n
<td align='center'><input type='button' value='9' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=9'\"></td>\n
<td align='center'><input type='button' value='/' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=divide'\"></td>\n
<td align='center'><input type='button' value='sqrt' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=sqrt'\"></td></tr>\n
<tr><td align='center'><input type='button' value='MR' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=MR'\"></td>\n
<td align='center'><input type='button' value='4' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=4'\"></td>\n
<td align='center'><input type='button' value='5' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=5'\"></td>\n
<td align='center'><input type='button' value='6' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=6'\"></td>\n
<td align='center'><input type='button' value='*' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=multiply'\"></td>\n
<td align='center'><input type='button' value='%' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=percent'\"></td></tr>\n
<tr><td align='center'><input type='button' value='MS' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=MS'\"></td>\n
<td align='center'><input type='button' value='1' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=1'\"></td>\n
<td align='center'><input type='button' value='2' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=2'\"></td>\n
<td align='center'><input type='button' value='3' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=3'\"></td>\n
<td align='center'><input type='button' value='-' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=subtract'\"></td>\n
<td align='center'><input type='button' value='1/x' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=invert'\"></td></tr>\n
<tr><td align='center'><input type='button' value='M+' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=MPlus'\"></td>\n
<td align='center'><input type='button' value='0' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=0'\"></td>\n
<td align='center'><input type='button' value='+/-' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=sign'\"></td>\n
<td align='center'><input type='button' value='.' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=decimal'\"></td>\n
<td align='center'><input type='button' value='+' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=add'\"></td>\n
<td align='center'><input type='button' value='=' onclick=\"parent.location='$_SERVER[PHP_SELF]?btn=equal'\"></td></tr>\n";
*/
?>
</table>
</div>
<?php
include_once("../footer.php");
?>