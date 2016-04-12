

<?php 
	$x = file_get_contents("data.json");
	$data = json_decode($x, true);
	var_dump($_POST["id"]);
	var_dump(intval($_POST["id"]));
	if($_POST["remove"] != null){
		$data["messages"][ intval($_POST["id"])] = null;
	} else {
		if($_POST["type"] == "create"){
			$data["messages"][] = array("text" => $_POST["text"], "top" => $_POST["top"], "left" => $_POST["left"], "id" => $_POST["id"]);
		} else {
			$id = intval($_POST["id"]);
			if($_POST["text"] != null){
			$data["messages"][$id]["text"] = $_POST["text"];
			}
			if($_POST["top"] != null){
				$data["messages"][$id]["top"] = $_POST["top"];
			}
			if($_POST["left"] != null){
				$data["messages"][$id]["left"] = $_POST["left"];
			}
		}
	}
	$x = json_encode($data);
	file_put_contents("data.json", $x);
	
?>












