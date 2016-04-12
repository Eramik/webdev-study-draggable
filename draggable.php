

<?php 
	$x = file_get_contents("data.json");
	$data = json_decode($x, true);
	if($_POST["remove"] == "true"){
		unset($data["messages"][$_POST["id"]]);
	} else {
		if($_POST["type"] == "create"){
			$data["messages"][] = array("text" => $_POST["text"], "top" => $_POST["top"], "left" => $_POST["left"], "id" => $_POST["id"]);
		} else {
			$id = $_POST["id"];
			$data["messages"][$id]["text"] = $_POST["text"];
			if($_POST["top"] != "no"){
				$data["messages"][$id]["top"] = $_POST["top"];
				$data["messages"][$id]["left"] = $_POST["left"];
			}
		}
		$x = json_encode($data);
		file_put_contents("data.json", $x);
	}
?>












