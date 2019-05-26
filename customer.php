<?php 
 $sql = "SELECT * FROM customer";
 $e = "edit-customer";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " 
                 <div class='media tm-notification-item'>
                    <div class='media-body'>
                      <p class='mb-2'>
						<b> ID: </b>" . $row["id"]. 
						 "<b> NAME: </b>" . $row["name"].
		                 "<b> ADDRESS: </b>".$row["address"].
						 "<b> PHONE: </b>".$row["phone"].
						 "<b> CREDIT: </b>". $row["credit"].
		                 "<b> BALANCE: </b>" . $row["balance"].
						 "<b> MEMBER STATUS: </b>" . $row["status"]. 
						 "
						 <form action ='editcustomer.php' method ='post'>
						  <input type='text' style='display:none' name ='id' value='".$row["id"]."'> 
						  <input type='submit' class='tm-notification-link' value ='Edit'> 
						  </form>
						</p>
                         <span class='tm-small tm-text-color-secondary'>" . $row["date"]."</span>
                       </div>
                       </div>";
    }
} else {
    echo "Empty";
}
?>