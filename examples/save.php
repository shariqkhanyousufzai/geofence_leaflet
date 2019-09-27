<?php
	require_once 'config.php';
	//print_r($_POST);die();

$sql = "INSERT INTO geofency (geolocation_name, circle_radius, lat_circle,lon_circle,type_geofency)
VALUES ('test', '".$_POST['circle_radius']  ."', '".$_POST['lat_circle']  ."','".$_POST['lon_circle']  ."','".$_POST['type_geofency']  ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>