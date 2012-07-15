<?PHP

/* CONFIGURATION */
$query = "SELECT * jdct_records ORDER by date ASC LIMIT $

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 20; 
$sql = "SELECT * FROM students ORDER BY name ASC LIMIT $start_from, 20"; 
$rs_result = mysql_query ($sql,$connection); 
?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><? echo $row["Name"]; ?></td>
            <td><? echo $row["PhoneNumber"]; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT COUNT(Name) FROM students"; 
$rs_result = mysql_query($sql,$connection); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 20); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='pagination.php?page=".$i."'>".$i."</a> "; 
}; 
?>