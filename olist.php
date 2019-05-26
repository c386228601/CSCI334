<?php 
 $sql = "SELECT * FROM olist";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr><th scope='row'><b>#" . $row["id"]. " </b></th><td><div class='tm-status-circle moving'> </div> num." . $row["cid"]. 
		"</td><td><b>$" . $row["price"]."</b></td><td><b>$" .$row["discount"]."</b></td><td><b>" . $row["date"]."</b></td></tr>";
    }
} else {
    echo "Empty";
}
?>