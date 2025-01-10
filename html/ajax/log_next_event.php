<?php //header("Cache-Control: no-cache, must-revalidate");
// session_start();

/*
 This file will generate our CSV table. There is nothing to display on this page, it is simply used
 to generate our CSV file and then exit. That way we won't be re-directed after pressing the export
 to CSV button on the previous page.
*/
$configFileContents = file_get_contents("../setup/config/config.json");
$config = json_decode($configFileContents, true);


$data = json_decode(file_get_contents('php://input'), $flags = JSON_OBJECT_AS_ARRAY);
var_dump(implode(",", $data));
echo implode(",", $data);
$header = ["participant_id", "session_id", "trial", "fileUsed", "something", "something", "condition", "something","something","timeStamp","webpage_id"];
// write individual file
echo("EEEEEEEEEEEEEEEEEEE");
print_r($data);
if (!file_exists('../../results/individual/'.strval($data["participant_id"]))) {
    mkdir('../../results/individual/'.strval($data["participant_id"]), 0777, true);
}
$indiv_file = '../../results/individual/'.strval($data["participant_id"]).'/' . strval($data["pageNumber"]) .".csv";
$exists = file_exists($indiv_file);

$handle = fopen("php://output", "w");
ob_start();
// write a column header
if (!$exists) {
	fputcsv($handle, $header);
}
//foreach ($data as $dat) {
    fputcsv($handle, $data);
//}
$csvContent = ob_get_clean();

/*if(isset($_POST['condition']) && $_POST['condition'] !=''){
    $result = $_POST['condition']();
    var_dump(json_encode($result));
}*/
echo file_put_contents($indiv_file, $csvContent, $flags = FILE_APPEND | LOCK_EX);
var_dump(implode(",", $data));
echo implode(",", $data);
/*var_dump(implode(",", $config));
echo implode(",",$config);*/
// if we used a file to assign the participant and if the name of that file was written into the condition field, move the file assigned to the participant from the 'in_use' to the 'used' folder
/*

// set the old working directory back
chdir($cwd);
}
*/


exit;
?>
