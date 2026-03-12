<center><h1 style="color:red">Error... Please call the developer.</h1></center>
<?php
$output_name = $_REQUEST['output_name'];
// Count the number of uploaded files in array
$total_count = count($_FILES['uploadedfiles']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['uploadedfiles']['tmp_name'][$i];
   $uploadedfiles[$i]= $tmpFilePath;
}

$words = [];
$firstrow = true;
foreach ($uploadedfiles as $x) {
	$path = $x;
	$handle = fopen($path, "r"); // open in readonly mode
	while (($row = fgetcsv($handle)) !== false) {
		//if direct csv from imoep use isset($row[5])
		//if excel converted to csv use $row[5]!==""
		if(isset($row[5]) && ($firstrow == true || $row[0]!=="Interval Start")){
			array_push($words,$row);
			$firstrow = false;
		}
	}
}
fclose($handle);

$path = 'output/'.$output_name.'.csv';
$fp = fopen($path, 'w'); // open in write only mode (write at the start of the file)
foreach ($words as $row) {
    fputcsv($fp, $row);
}
fclose($fp);

header("Location:modal.php");
?>