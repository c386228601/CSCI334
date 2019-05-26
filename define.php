 <?php 

 if(!empty($_SESSION['user']))
  { 
		 if($current == "home")
			 {
			    include'theme/home.html';
			 }
			 if($current == "product")
			 {
			   	include'theme/products.html';
			 }
			 if($current == "add-product")
			 {
			   	include'theme/add-product.html';
			 }
			 if($current == "edit-product")
			 {
			   	include'theme/edit-product.html';
			 }
			 if($current == "admin")
			 {
				 if($_SESSION['user']['role']=="Admin")
				 {
			   	  include'theme/admin.html';
				 }
				 else{
					 echo"<h1 style ='color:white;text-align:center'><br/><br/><br/><br/>You dont have Privilege to access this page</h1>";
				 }
			 }
			 if($current == "add-admin")
			 {
				if($_SESSION['user']['role']=="Admin")
				{
			   	 include'theme/add-admin.html';
				}
				 else{
					 echo"<h1 style ='color:white;text-align:center'><br/><br/><br/><br/>You dont have Privilege to access this page</h1>";
				 }
				
			 }
			 if($current == "edit-admin")
			 {
				if($_SESSION['user']['role']=="Admin")
				{
			   	include'theme/edit-admin.html';
				}
			    else{
					 echo"<h1 style ='color:white;text-align:center'><br/><br/><br/><br/>You dont have Privilege to access this page</h1>";
				 }
				
			 }
			 if($current == "add-customer")
			 {
			   	include'theme/add-customer.html';
			 }
			 if($current == "edit-customer")
			 {
			   	include'theme/edit-customer.html';
			 }
			 if($current == "supplier")
			 {
			   if($_SESSION['user']['role']=="Warehouse" || $_SESSION['user']['role']=="Admin")
			   {
			        include'theme/supplier.html';
			   }
			    else{
					echo"<h1 style ='color:white;text-align:center'><br/><br/><br/><br/>You dont have Privilege to access this page</h1>";
			}
			 }
			 if($current == "add-supplier")
			 {			   
			   if($_SESSION['user']['role']=="Warehouse" || $_SESSION['user']['role']=="Admin")
			   {
			        include'theme/add-supplier.html';
			   }
			    else{
					echo"<h1 style ='color:white;text-align:center'><br/><br/><br/><br/>You dont have Privilege to access this page</h1>";
			}
			 }
			 if($current == "edit-supplier")
			 {			  
			   if($$_SESSION['user']['role']=="Warehouse" || $_SESSION['user']['role']=="Admin")
			   {
			        include'theme/edit-supplier.html';
			   }
			    else{
					echo"<h1 style ='color:white;text-align:center'><br/><br/><br/><br/>You dont have Privilege to access this page</h1>";
			}
			 }
			 if($current == "login")
			 {
			   	include'theme/login.html';
			 }
			 if($current == "add-delivery")
			 {
			   	include'theme/add-delivery.html';
			 }
			if($current == "searchproduct")
			 {
			   	include'theme/searchproduct.html';
			 }
			 if($current == "search")
			 {
			   	include'theme/search.html';
			 }
			 if($current == "searchresult")
			 {
			   	include'theme/searchresult.html';
			 }
			
  }
    else
	{
		include 'theme/login.html';
	}
			?>