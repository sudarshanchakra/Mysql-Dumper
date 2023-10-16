<?php

// Load database credentials from a configuration file or environment variables
require 'config.php'; // Include a separate file with your database credentials

$dumpTable = isset($_POST['table']) ? $_POST['table'] : null;

if (empty($dumpTable)) {
    $dump_name = "Exported_{$database}_" . time() . rand(10000, 999999) . "_By_MYSQL_Dumper.sql";
} else {
    $dump_name = "Exported_{$dumpTable}_" . time() . rand(10000, 999999) . "_By_MYSQL_Dumper.sql";
}

$dir = dirname(__FILE__) . "/{$dump_name}";

echo "<h3>Backing up database to `<code>{$dir}</code></h3>";

if (empty($dumpTable)) {
    $command = "mysqldump -u{$user} -p{$pass} {$database} > {$dump_name} 2>&1";
} else {
    $command = "mysqldump -u{$user} -p{$pass} {$database} {$dumpTable} > {$dump_name} 2>&1";
}

exec($command, $output, $return_var);

if ($return_var === 0) {
    echo "Backup successful!";
} else {
    echo "Backup failed!";
}

echo "<br/><br>";
echo json_encode($output);
echo "<br/><br>";

?>

Please Check the file <b style="color: red;"><?php echo $dir; ?></b>
