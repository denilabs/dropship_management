<?php  

require "config.php";



class kategories{
	
	function show($db){
		$query = "SELECT * FROM kategories";
		$get = mysqli_query($db, $query);
		$data = array();
		if (count($get) > 0) {
			while ($row = mysqli_fetch_array($get)) {
				$data[] = $row;
			}
			echo json_encode($data);
		}
	}

	function insert($db, $getData, $title, $description){
		$getData = json_decode(file_get_contents("php://input"));
		$title = mysqli_real_escape_string($db, $getData->title);
		$description = mysqli_real_escape_string($db, $getData->description);

		$query = mysqli_query($db, "INSERT INTO kategories(title_kat, desc_kat) VALUES('$title', '$description')");
		if (count($query) > 0) {
			echo "success";
		}
		else
		{
			echo "false";
		}

	}
}

$kat = new kategories();
echo $kat->show($db);


?>