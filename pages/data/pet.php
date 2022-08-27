<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 60%;
    border-collapse: collapse;
    background-color: white;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost:3308','dev02dbuser','FM02web2020','dev02db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//**modify the following code to work with your database table names and rows, etc.

mysqli_select_db($con,'pets');
$sql="SELECT * FROM pets";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Pet's Name</th>
<th>Animal</th>
<th>Adoption Place</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Pet Name'] . "</td>";
    echo "<td>" . $row['Animal'] . "</td>";
    echo "<td>" . $row['Adoption Place'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
