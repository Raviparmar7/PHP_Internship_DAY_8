<?php
//DB connection
$connection = mysqli_connect("localhost","root","","db_php");
 //Query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($q)){
 
    echo "<tr>";
     echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
      echo "<td>{$row['user_gender']}</td>";
        echo "<td>{$row['user_mobile']}</td>";
       echo "<td> <a href='edit.php?id={$row['user_id']}'>Edit</a> <?php echo {$row['user_id']}->id?> | <a href='delete.php?deleteid={$row['user_id']}'>Delete</a></td>"; 
        echo "</tr>";
}
echo "</table>";
echo"<a href='insertrecord.php'>Add Record</a>";
?>