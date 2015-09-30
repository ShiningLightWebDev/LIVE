<?php
//make sure you have the login info you will need
require_once ('ftpinfo.php');
//make sure only valid pathnames are passed in
$allowed = '%[a-z0-9\/._]%i';
$ohmywordwhy = str_split($file);
(int)$totalerrors = 0;
foreach ($ohmywordwhy as $becauseisaidso) {
	if (!preg_match($allowed, $becauseisaidso)) { $totalerrors++; }
}
//print number of errors and error message -- troubleshooting
if ($totalerrors > 0) {
	echo "Invalid characters detected.\n";
	}
else {
	//create an array that contains the pieces of the filepath, separated at the slash
	$patharray = explode('/', $file);

	// set up basic connection
	$conn_id = ftp_connect($ftp_server);

	// login with username and password
	ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) or die ("Failure to connect to FTP server\n");

	//build directory path by reassembling the filepath and chopping off the filename
	$dirpath = '';
	$filename = '';
	foreach ($patharray as $key=>$value) {
		switch($key) {
			case count($patharray) - 1:
				$filename .= "$value";
				break;
			default:
				$dirpath .= "$value/";
		}
	}

	//check to see if you reconstructed the filepath correctly -- troubleshooting
	//echo "$dirpath$filename";

	//print contents of connection directory -- troubleshooting
	//print_r(ftp_nlist($conn_id, "."));

	//change to directory containing the file to be deleted
	ftp_chdir($conn_id, $dirpath) or die ("Error changing to directory $dirpath, does it exist?\n");

	//print the contents of the new directory -- troubleshooting
	//print_r(ftp_nlist($conn_id, "."));

	// try to delete $file, or throw an error
	ftp_delete($conn_id, $filename) or die ("Error deleting file $file\n");
	// next line only prints if previous line is successful
	echo "$filename deleted successfully\n";

	// close the connection
	ftp_close($conn_id);
	}
?>