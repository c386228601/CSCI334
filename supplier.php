<?php 
 $sql = "SELECT * FROM supplier";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "<tr style='font-size:5px;'><th>" . $row["id"]. " </th><th> " . $row["name"].
		" </th><th>".$row["address"]."</th><th>".$row["phone"]."</th><th>". $row["credit"].
		"</th><th>
		 <form action ='editsupplier.php' method='post'>
		  <input style='display:none' type='text' name='id' value = '".$row["id"]."'>
		  <input style='cursor:pointer;' type ='submit' value ='Edit'>
		  </form>
		</th></tr>";
    }
} else {
    echo "Empty";
}
?>