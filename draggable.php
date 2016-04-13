

<?php 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	/*$x = file_get_contents("data.json");
	$data = json_decode($x, true);
		$id = intval($_POST["id"]);
		$data["messages"][$id]["text"] = $_POST["text"];
		$data["messages"][$id]["top"] = $_POST["top"];
		$data["messages"][$id]["left"] = $_POST["left"];
	$x = json_encode($data);
	file_put_contents("data.json", $x);*/
	
	
	if($_POST["case"] == "newpos"){
		$x = file_get_contents("data.json");
		$data = json_decode($x, true);
		$id = intval($_POST["id"]);
		$data["messages"][$id]["top"] = $_POST["top"];
		$data["messages"][$id]["left"] = $_POST["left"];
		$x = json_encode($data);
		file_put_contents("data.json", $x);
	}
	else if($_POST["case"] == "create"){
		$x = file_get_contents("data.json");
		$data = json_decode($x, true);
		$data["messages"][] = array("text" => $_POST["text"], "top" => $_POST["top"], "left" => $_POST["left"]);
		$x = json_encode($data);
		file_put_contents("data.json", $x);
	}
	else if($_POST["case"] == "newval"){
		$x = file_get_contents("data.json");
		$data = json_decode($x, true);
		$id = intval($_POST["id"]);
		$data["messages"][$id]["text"] = $_POST["text"];
		$x = json_encode($data);
		file_put_contents("data.json", $x);
	}
	else if($_POST["case"] == "remove"){
		$x = file_get_contents("data.json");
		$data = json_decode($x, true);
		$id = intval($_POST["id"]);
		for($i = $id; $i < count($data["messages"]) - 1; $i++){
			$data["messages"][$i] = $data["messages"][$i + 1];
		}
		unset($data["messages"][$i + 1]);
	}
	else{ 
		echo "<p><b>Error</b>: unknown case!</p>";
	}
	
?>












