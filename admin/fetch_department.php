<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "camsdb";
$conn = mysqli_connect($host, $username, $password, $database);

$results = $conn->query("select DepartmentID, name from tbldepartment");

while($data = $results->fetch_assoc()):
// print_r($data);
?>
<option value="<?php echo $data['DepartmentID'] ?>"><?php echo $data['name'] ?></option>
<?php
endwhile;

// print_r($results);


?>