

<?php 
	/*$x = file_get_contents("data.json");
	$data = json_decode($x, true);
		$id = intval($_POST["id"]);
		$data["messages"][$id]["text"] = $_POST["text"];
		$data["messages"][$id]["top"] = $_POST["top"];
		$data["messages"][$id]["left"] = $_POST["left"];
	$x = json_encode($data);
	file_put_contents("data.json", $x);*/
	
	if($_POST["case"] == "create"){
		$x = file_get_contents("data.json");
		$data = json_decode($x, true);
		$data["messages"][] = array("text" => $_POST["text"], "top" => $_POST["top"], "left" => $_POST["left"]);
		$x = json_encode($data);
		file_put_contents("data.json", $x);
	}
	else if($_POST["case"] == "newpos"){
		$x = file_get_contents("data.json");
		$data = json_decode($x, true);
		print_r( $id = intval($_POST["id"]));
		$data["messages"][$id]["top"] = $_POST["top"];
		$data["messages"][$id]["left"] = $_POST["left"];
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
	else{ 
		echo "<p><b>Error</b>: unknown case!</p>";
	}
	
?>












