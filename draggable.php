<?php 
	$x = file_get_contents("data.json");
	$data = json_decode($x, true);
	if($_POST["id"] == -1){
		$data["messages"][] = array("text" => $_POST["text"], "top" => $_POST["top"], "left" => $_POST["left"]);
	} else {
		$id = $_POST["id"];
		$data["messages"][$id]["text"] = $_POST["text"];
		$data["messages"][$id]["top"] = $_POST["top"];
		$data["messages"][$id]["left"] = $_POST["left"];
	}
	$x = json_encode($data);
	file_put_contents("data.json", $x);
	echo "Succes";
?>












