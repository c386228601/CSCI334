<?php
class admin{
  private $date;
  private $id;
  private $un;
  private $pw;
  private $role;
  private $phone;
  private $avaliability;
  private $shop;
  
 public function __construct(){}
 
 public function set_for_show($id,$date,$un,$pw,$role,$phone,$avaliability,$shop)
 {
	 $this -> id = $id;
	 $this -> date = $date;
	 $this -> un = $un;
     $this -> pw = $pw;
     $this -> role = $role;
     $this -> phone = $phone;
     $this -> avaliability = $avaliability;
     $this -> shop = $shop;	  
 }
 
 public function set_for_insert($un,$pw,$role,$phone,$avaliability,$shop)
 {
	 $this -> un = $un;
     $this -> pw = $pw;
     $this -> role = $role;
     $this -> phone = $phone;
     $this -> avaliability = $avaliability;
     $this -> shop = $shop;	 
	 
 }
 
 public function set_for_edit($id,$un,$pw,$role,$phone,$avaliability,$shop)
 {
	 $this -> id = $id;
	 $this -> un = $un;
     $this -> pw = $pw;
     $this -> role = $role;
     $this -> phone = $phone;
     $this -> avaliability = $avaliability;
     $this -> shop = $shop;	  
 }
 
  public function set_for_verify($un,$pw)
  {
	 $this -> un = $un;
     $this -> pw = $pw;
  }
 
 public function print_admin()
 {
	         echo "
			  <tr>
               <td class='tm-product-name'>".$this ->id."</td>
               <td>".$this -> un."</td>
               <td>".$this -> pw."</td>
			   <td>".$this -> phone."</td>
               <td>".$this -> role."</td>
               <td>".$this -> date."</td>
               <td>".$this -> shop."</td>
			   <td>".$this -> avaliability."</td>
		       <td>
				<form action ='editadmin.php' method ='post'>
			     <input type='text' style='display:none' name ='id' value='".$this ->id."'> 
			     <input type='submit' class='tm-notification-link' value ='Edit'> 
				</form>
               </td>
              </tr>";
 }

 public function insert_admin()
 {
	 include'config.php';
	 $sql = "Insert into admin(username,password,avaliability,shop,phone,role) value('".$this -> un."','".$this ->pw."','".$this -> avaliability."','".$this -> shop."','".$this ->phone."','".$this ->role."')";
     $result = $conn->query($sql);
     header("location:switch.php?page=admin");
     $conn->close();
 }
 
 public function edit_admin()
 {
    include 'config.php';
    $sql = "UPDATE admin set username = '".$this -> un."' ,password = '".$this ->pw."' ,avaliability = '".$this -> avaliability."' ,shop = '".$this -> shop."' ,phone ='".$this ->phone."' ,role = '".$this ->role."'
	where id = '".$this ->id."'";
    $result = $conn->query($sql);
    header("location:switch.php?page=admin");
    $conn->close();
 }
 
  public function verify_admin()
 {
	 if(!empty($this ->un)&&!empty($this ->pw))
	 {
		 include 'config.php';
		  $sql = "SELECT * FROM admin WHERE username = '".$this ->un."' AND password = '".$this ->pw."'";
		  $result = $conn->query($sql);
		  $row = $result->fetch_assoc();
		  
		  if($this ->un ==$row['username']&&$this ->pw==$row['password'])
		  {
			  session_start();
			  $uinfo=array('un'=>$this ->un,'role'=>$row['role'],'shop'=>$row['shop']);
              $_SESSION['user']= $uinfo;
			  return $row['role'];  
		  }
		  else
		  {
			  return "fail";
		  }
		  $conn->close();
	 }
	 else{
		 
		 return "fail";
	 }

 }

}

//class customer
class customer{
  private $date;
  private $id;
  private $address;
  private $status;
  private $name;
  private $phone;
  private $credit;
  private $balance;
  private $subject;
  private $type;
  
 public function __construct(){}
 
 public function set_for_show($id,$date,$address,$status,$name,$phone,$credit,$balance)
 {
	 $this -> id = $id;
	 $this -> date = $date;
	 $this -> address = $address;
     $this -> status = $status;
     $this -> name = $name;
     $this -> phone = $phone;
     $this -> credit = $credit;
     $this -> balance = $balance;	  
 }
 
 public function set_for_insert($address,$status,$name,$phone,$credit,$balance,$subject,$type)
 {
	 $this -> address = $address;
     $this -> status = $status;
     $this -> name = $name;
     $this -> phone = $phone;
     $this -> credit = $credit;
     $this -> balance = $balance;
	 $this -> subject = $subject;
     $this -> type = $type;		 
	 
 }
 
 public function set_for_edit($id,$address,$status,$name,$phone,$credit,$balance,$subject,$type)
 {
	 $this -> id = $id;
	 $this -> address = $address;
     $this -> status = $status;
     $this -> name = $name;
     $this -> phone = $phone;
     $this -> credit = $credit;
     $this -> balance = $balance;	
	 $this -> subject = $subject;
     $this -> type = $type;		 
 }
 
 public function print_customer()
 {
            echo " 
                <div class='media tm-notification-item'>
                    <div class='media-body'>
                      <p class='mb-2'>
						<b> ID: </b>" . $this ->id . 
						 "<b> NAME: </b>" . $this ->name .
		                 "<b> ADDRESS: </b>".$this ->address .
						 "<b> PHONE: </b>".$this ->phone .
						 "<b> CREDIT: </b>". $this ->credit .
		                 "<b> BALANCE: </b>" . $this ->balance .
						 "<b> MEMBER STATUS: </b>" . $this ->status . 
						 "
						 <form action ='editcustomer.php' method ='post'>
						  <input type='text' style='display:none' name ='id' value='".$this ->id ."'> 
						  <input type='submit' class='tm-notification-link' value ='Edit'> 
						  </form>
						</p>
                         <span class='tm-small tm-text-color-secondary'>" . $this ->date ."</span>
                       </div>
                       </div>
					   ";
 }

 public function insert_customer()
 {
	 include'config.php';
	 $sql = "Insert into customer(address,status,credit,balance,phone,name,subject,type) value('".$this -> address."','".$this ->status."','".$this -> credit."','".$this -> balance."','".$this ->phone."','".$this ->name."','".$this ->subject."','".$this ->type."')";
     $result = $conn->query($sql);
     header("location:index.php");
     $conn->close();
 }
 
 public function edit_customer()
 {
    include 'config.php';
    $sql = "UPDATE customer set address = '".$this -> address."' ,status = '".$this ->status."' ,credit = '".$this -> credit."' ,balance = '".$this -> balance."' ,phone ='".$this ->phone."' ,name = '".$this ->name."',subject = '".$this ->subject."',type = '".$this ->type."'
	where id = '".$this ->id."'";
    $result = $conn->query($sql);
    header("location:index.php");
    $conn->close();
 }

}

//class order
class order {
  private $date;
  private $id;
  private $cid;
  private $price;
  private $discount;

  
 public function __construct(){}
 
 public function set_for_show($id,$date,$cid,$price,$discount)
 {
	 $this -> id = $id;
	 $this -> date = $date;
	 $this -> cid = $cid;
     $this -> price = $price;
     $this -> discount = $discount;  
 }
 
 public function set_for_insert($cid,$price,$discount)
 {
	 $this -> cid = $cid;
     $this -> price = $price;
     $this -> discount = $discount; 
	 
 }
 
 public function print_order()
 {
            echo " 
                <tr><th scope='row'><b>#" .$this ->id ." </b></th><td><div class='tm-status-circle moving'> </div> num." . $this ->cid . 
		"</td><td><b>$" . $this ->price ."</b></td><td><b>$" .$this ->discount ."</b></td><td><b>" . $this ->date ."</b></td></tr>
					   ";
 }

 public function insert_order()
 {
	 include'config.php';
	 $sql = "Insert into olist(cid,price,discount) value('".$this -> cid."','".$this ->price."','".$this ->discount."')";
     $result = $conn->query($sql);
     header("location:switch.php?page=product");
     $conn->close();
 }

}

class product {
  private $date;
  private $id;
  private $type;
  private $price;
  private $subject;
  private $stock;
  private $supid;
  private $name;
  private $description;
  private $location;
  private $avaliability;

 public function __construct(){}
 
 public function set_for_show($id,$date,$type,$price,$subject,$stock,$supid,$name,$description,$location,$avaliability)
 {
	 $this -> id = $id;
	 $this -> date = $date;
	 $this -> type = $type;
     $this -> price = $price;
     $this -> subject = $subject;  
	 $this -> stock = $stock;
	 $this -> supid = $supid;
	 $this -> name = $name;
     $this -> description = $description;
     $this -> location = $location;  
	 $this -> avaliability = $avaliability;
 }
 
 public function set_for_insert($type,$price,$subject,$stock,$supid,$name,$description,$location,$avaliability)
 {
	 $this -> type = $type;
     $this -> price = $price;
     $this -> subject = $subject; 
	 $this -> stock = $stock;
	 $this -> supid = $supid;
	 $this -> name = $name;
     $this -> description = $description;
     $this -> location = $location;  
	 $this -> avaliability = $avaliability;
 }
 
 public function set_for_edit($id,$type,$price,$subject,$stock,$supid,$name,$description,$location,$avaliability)
 {
	 $this -> id = $id;
	 $this -> type = $type;
     $this -> price = $price;
     $this -> subject = $subject;  
	 $this -> stock = $stock;
	 $this -> supid = $supid;
	 $this -> name = $name;
     $this -> description = $description;
     $this -> location = $location;  
	 $this -> avaliability = $avaliability;
 }
 
 public function print_product()
 {
            echo " 
			  <tr>
               <td class='tm-product-name'>" . $this ->id . "</td>
               <td>" . $this ->name ."</td>
               <td>".$this ->description ."</td>
               <td>".$this ->price ."</td>
               <td>". $this ->stock ."</td>
               <td>" . $this ->subject ."</td>
               <td>" . $this ->type ."</td>
               <td>" . $this ->location ."</td>
               <td>" . $this ->date ."</td>
               <td>" . $this ->avaliability ."</td>
			   <td><button onclick='add_shoppingcar(this);'>+</button></td>
		       <td>
				 <form action ='edititem.php' method ='post'>
					<input type='text' style='display:none' name ='id' value='".$this ->id."'> 
					<input type='submit' class='tm-notification-link' value ='Edit'> 
				  </form>
               </td>
              </tr>
					   ";
 }

 public function insert_product()
 {
	 include'config.php';
	 $sql = "Insert into product(type,price,subject,stock ,supid ,name ,description,location,avaliability) value('".$this -> type."',".$this ->price."','".$this ->subject."','".$this ->stock."','".$this ->supid."'
	 ,'".$this ->name."','".$this ->description."','".$this ->location."','".$this ->avaliability."')";
     $result = $conn->query($sql);
     header("location:index.php");
     $conn->close();
 }
 public function edit_product()
 {
    include 'config.php';
    $sql = "UPDATE product set name = '".$this -> name."' ,description = '".$this ->description."' ,price = '".$this -> price."' ,stock = '".$this -> stock."' ,subject ='".$this ->subject."' ,type = '".$this ->type."'
	,location = '".$this ->location."' ,supid = '".$this ->supid."',avaliability = '".$this ->avaliability."' where id = '".$this ->id."'";
    $result = $conn->query($sql);
    header("location:switch.php?page=product");
    $conn->close();
 }
}

class supplier {
  private $id;
  private $address;
  private $credit;
  private $phone;
  private $name;

 public function __construct(){}
 
 public function set_for_show($id,$address,$credit,$phone,$name)
 {
	 $this -> id = $id;
	 $this -> address = $address;
     $this -> credit = $credit;
     $this -> phone = $phone;  
	 $this -> name = $name;
 }
 
 public function set_for_insert($address,$credit,$phone,$name)
 {
	 $this -> address = $address;
     $this -> credit = $credit;
     $this -> phone = $phone;  
	 $this -> name = $name;
 }
 
 public function print_supplier()
 {
            echo " 
			  <tr>
               <td class='tm-supplier-name'>" . $this ->id . "</td>
               <td>" . $this ->name ."</td>
			   <td>" . $this ->address ."</td>
               <td>".$this ->credit ."</td>
               <td>" . $this ->phone ."</td>
		       <td>
				 <form action ='editsupplier.php' method ='post'>
					<input type='text' style='display:none' name ='id' value='".$this ->id."'> 
					<input type='submit' class='tm-notification-link' value ='Edit'> 
				  </form>
               </td>
              </tr>
					   ";
 }

 public function insert_supplier()
 {
	 include'config.php';
	 $sql = "Insert into supplier(address,credit,phone,name) value('".$this -> address."','".$this ->credit."','".$this ->phone."','".$this ->name."')";
     $result = $conn->query($sql);
     header("location:switch.php?page=supplier");
     $conn->close();
 }
 public function edit_supplier()
 {
    include 'config.php';
    $sql = "UPDATE supplier set name = '".$this -> name."' ,address = '".$this ->address."' ,credit = '".$this -> credit."',phone ='".$this ->phone."' where id = '".$this ->id."'";
    $result = $conn->query($sql);
    header("location:switch.php?page=supplier");
    $conn->close();
 }
}

class sproduct {
  private $id;
  private $type;
  private $price;
  private $subject;
  private $supid;
  private $name;
  private $description;


 public function __construct(){}
 
 public function set_for_show($id,$type,$price,$subject,$supid,$name,$description)
 {
	 $this -> id = $id;
	 $this -> type = $type;
     $this -> price = $price;
     $this -> subject = $subject;  
	 $this -> supid = $supid;
	 $this -> name = $name;
     $this -> description = $description;
 }
 
 public function set_for_insert($type,$price,$subject,$supid,$name,$description)
 {
	 $this -> type = $type;
     $this -> price = $price;
     $this -> subject = $subject;  
	 $this -> supid = $supid;
	 $this -> name = $name;
     $this -> description = $description;
 }
 
 public function set_for_edit($id,$type,$price,$subject,$supid,$name,$description)
 {
	 $this -> id = $id;
	 $this -> type = $type;
     $this -> price = $price;
     $this -> subject = $subject;  
	 $this -> supid = $supid;
	 $this -> name = $name;
     $this -> description = $description;
 }
 
 public function print_product()
 {
            echo " 
			  <tr>
               <td class='tm-product-name'>" . $this ->id . "</td>
               <td>" . $this ->name ."</td>
               <td>".$this ->description ."</td>
               <td>".$this ->price ."</td>
               <td>" . $this ->subject ."</td>
               <td>" . $this ->type ."</td>
               <td>" . $this ->supid ."</td>
			   <td><button onclick='add_shoppingcar(this);'>+</button></td>
		       <td>
				 <form action ='edititem.php' method ='post'>
					<input type='text' style='display:none' name ='id' value='".$this ->id."'> 
					<input type='submit' class='tm-notification-link' value ='Edit'> 
				  </form>
               </td>
              </tr>";
 }
 }

class delivery {
  private $id;
  private $price;
  private $supid;
  private $date;
  private $shop;
  private $name;
  private $phone;


 public function __construct(){}
 
 public function set_for_show($id,$supid,$price,$date,$shop,$name,$phone)
 {
	 $this -> id = $id;
     $this -> price = $price; 
	 $this -> supid = $supid;
	 $this -> date = $date;
     $this -> shop = $shop;
	 $this -> name = $name;
     $this -> phone = $phone;
 }
 
 public function set_for_insert($supid,$price,$shop,$name,$phone)
 {
     $this -> price = $price; 
	 $this -> supid = $supid;
     $this -> shop = $shop;
	 $this -> name = $name;
     $this -> phone = $phone;
 }
 
 
 public function print_delivery()
 {
            echo " 
			  <tr>
               <td class='tm-product-name'>" . $this ->id . "</td>
               <td>" . $this ->supid ."</td>
               <td>".$this ->price ."</td>
               <td>".$this ->date ."</td>
               <td>" . $this ->shop ."</td>
			   <td>".$this ->name ."</td>
               <td>" . $this ->phone ."</td>
              </tr>";
 }
 }
 /*
 public function update(Subject $subject){
        if($this->member == true){
            $memberEmail = $this->email;
            $fileToSend = $subject->getLocation();
            $content = $memberEmail."\t".$fileToSend;
            file_put_contents("emails.txt", $content.PHP_EOL , FILE_APPEND | LOCK_EX);
        }
    }
 
 */
?>