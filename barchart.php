<?php  
	$connect = mysqli_connect("localhost", "root", "", "patientbook");  
	$query = "SELECT weight FROM data ";
	$result = mysqli_query($connect, $query);  

	$dataPoints = array();
	$i = 0;
	while($row = mysqli_fetch_array($result)) {  
	   	$dataPoints[$i][y] = $row["weight"]; 
	   	$i = $i+1; }  
	print_r($dataPoints);
?>

<!DOCTYPE HTML>
<html>
<head>  
	<script>
		window.onload = function () {
		 
		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			exportEnabled: true,
			theme: "light1", // "light1", "light2", "dark1", "dark2"
			title:{
				text: "Evolution of the weight"
			},
			data: [{
				type: "column", //change type to bar, line, area, pie, etc
				indexLabel: "{y}", //Shows y value on all Data Points
				indexLabelFontColor: "#5A5757",
				indexLabelPlacement: "outside",   
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();

		}
	</script>
</head>
<body>
	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 