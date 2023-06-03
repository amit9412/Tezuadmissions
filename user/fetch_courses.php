 <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "camsdb";
$conn = mysqli_connect($host, $username, $password, $database);

$PrgType = $_GET['prg'];

$results = $conn->query("select ID, CourseName from tblcourse where ProgrammeType= '$PrgType'");

while($data = $results->fetch_assoc()):
// print_r($data);
?>
<option value="<?php echo $data['ID'] ?>"><?php echo $data['CourseName'] ?></option>
<?php
endwhile;

// print_r($results);


?>