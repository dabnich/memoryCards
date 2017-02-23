<?php 
/*
if($_POST["save"]==1){
	if(saveResult()) echo "result saving succesful";
	else echo "Error: result not saving";
}
else echo "Error: result not saving";

function saveResult(){
	if($handle = fopen("results.csv", "a+")){
		$text = $_POST["game"]+"|"+date("d-m-Y H:i:s")+"|"+$_POST["time"]+"|"+$_POST["actions"]+chr(10);
		if(fwrite($handle, $text)) return true;
		return false;
	}
	return false;
}
*/
print_r($_POST);
?>