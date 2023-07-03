<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="umdas";
//connect to database
$lidhu = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Couldn't connet to database.");
//get the data from table Data_ahome
$query = "SELECT Informacioni_administrator FROM umdas_administrator_informacion";
//execute the query
$rezultati = mysqli_query($lidhu, $query);
if(!$rezultati){ echo "Couldn't execute the query"; die();}
else{
 //creates an empty array to hold data
 $data = array();
  while($rresht = mysqli_fetch_assoc($rezultati)){
    $data[]=$rresht;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file results.json with writing mode.
//you can read more about file handling in PHP here. 
$fp = fopen('test.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
echo "File is created";
//close the file
fclose($fp);
}
?>