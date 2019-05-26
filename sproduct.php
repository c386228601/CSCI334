<?php 
   $sql = "SELECT * FROM product";	

 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // list product
    while($row = $result->fetch_assoc()) {
        echo "<tr>
               <td class='tm-product-name'>" . $row["supid"]. "</td>
               <td>" . $row["name"]."</td>
               <td>".$row["price"]."</td>
            
			   <td><button onclick='add_shoppingcar(this);'>+</button></td>
		       <td>
				 <form action ='edititem.php' method ='post'>
					<input type='text' style='display:none' name ='id' value='".$row["id"]."'>  
				  </form>
               </td>
              </tr>";
    }
} else {
    echo "Empty";
}
?>


