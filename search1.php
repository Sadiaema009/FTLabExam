<?php
	$key=$_GET["key"];
	$s="localhost";
	$u="root";
	$p="";
	$d="employee";
	$conn=mysqli_connect($s,$u,$p,$d);
	$query="SELECT * FROM employee WHERE Name LIKE '$key'";
	$rs=mysqli_query($conn,$query);
?>

<table>
	<?php
		while ($row=mysqli_fetch_assoc($rs)) {
			echo "<tr>";
			echo '<td>'.'ID'.'</td>';
			echo '<td>'.'Name'.'</td>';
			echo '<td>'.'Department'.'</td>';
			echo '<td>'.'Joining Date'.'</td>';
			echo '<td>'.'salary'.'</td>';
			echo "</tr>";
			echo "<tr>";
			echo '<td>'.$row["ID"].'</td>';
			echo '<td>'.$row["Name"].'</td>';
			echo '<td>'.$row["Department"].'</td>';
			echo '<td>'.$row["JoiningDate"].'</td>';
			echo '<td>'.$row["Salary"].'</td>';
			echo "</tr>";
		}
	?>
</table>