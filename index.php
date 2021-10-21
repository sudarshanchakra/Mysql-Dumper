<?php

$host = "localhost";
$user = "Enter Your Username Here";
$pass = "Enter Your Password Here";
$database = "Enter Your Database Name Here";

//if you want to dump a table then uncomment the bottom line 
//$table = "Enter Your Table Name";

$dump_name = "Exported_".$database.time().rand(10000,999999)."_By_MYSQL_Dumper.sql";
$dir = dirname(__FILE__) . "/".$dump_name;

echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";

exec("(mysqldump -u$user -p$pass $database > $dump_name) 2>&1", $output);

//if you want to dump a table then uncomment the bottom line & comment out the top line;

//$table = "Enter Your Table Name";
//$dump_name = "Exported_".$table.time().rand(10000,999999)."_By_MYSQL_Dumper.sql";
//exec("(mysqldump -u$user -p$pass $database $table > $dump_name) 2>&1", $output);

echo json_encode($output);

echo "<br/>";
echo "<br/>";

?>

Please Check the file <b style="color: red;"> <?php echo $dump_name;?> </b>
