<?php 
/*
if(isset($_POST)){
	if($_POST["save"]==1){
		if(saveResult()) echo "result saving succesful";
		else echo "Error: result not saving";
	}
	else echo "Error: result not saving";
}
*/
if(isset($_POST)){
	if($_POST["save"]==1)
		saveResult();
}

function saveResult(){
	if($handle = fopen("results.csv", "a+")){
		$text = $_POST["game"]."|".date("d-m-Y H:i:s")."|".$_POST["time"]."|".$_POST["actions"].chr(10);
		//$text = $_POST["game"]."|".date("d-m-Y H:i:s")."|".$_POST["time"]"|".$_POST["actions"];
		//echo $_POST["game"];
		echo $text;
		//echo $_POST["actions"];
		if(fwrite($handle, $text)) return true;
		return false;
	}
	return false;
}

//if(isset($_POST)) print_r($_POST);
?>