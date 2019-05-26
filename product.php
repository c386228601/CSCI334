<?php 
 $sql = "SELECT * FROM product";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // list product
    while($row = $result->fetch_assoc()) {
        echo "<tr>
               <td class='tm-product-name'>" . $row["id"]. "</td>
               <td>" . $row["name"]."</td>
               <td>".$row["description"]."</td>
               <td>".$row["price"]."</td>
               <td>". $row["stock"]."</td>
               <td>" . $row["subject"]."</td>
               <td>" . $row["type"]."</td>
               <td>" . $row["location"]."</td>
               <td>" . $row["supid"]."</td>
               <td>" . $row["date"]."</td>
               <td>" . $row["avaliability"]."</td>
			   <td><button onclick='add_shoppingcar(this);'>+</button></td>
		       <td>
				 <form action ='edititem.php' method ='post'>
					<input type='text' style='display:none' name ='id' value='".$row["id"]."'> 
					<input type='submit' class='tm-notification-link' value ='Edit'> 
				  </form>
               </td>
              </tr>";
    }
} else {
    echo "Empty";
}
?>


