<?php


$q = $_GET["q"];
 
$sql= "SELECT * FROM newsarticle WHERE title '$q%' OR content LIKE '$q%'"; 
$result = mysqli_query($con, $sql);
    
echo "<table>
<tr>
<th>Name</th>
<th>Continent</th>
</tr>";
    
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Continent'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


?>