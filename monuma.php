
<?php 
include('db.php'); 
 //$connect = mysqli_connect("localhost", "root", "monu1991", "shapcare");  
if(isset($_POST["query"]))  
{  
      $output = '';  
      $query = "SELECT * FROM sup_details WHERE sup_name LIKE '%".$_POST["name"]."%'";  
      $result = mysqli_query($db,$query);  
      $output = '<ul class="list-unstyled">';  
      if( mysqli_num_rows($result)>0)  
      {  
           while($row = mysqli_fetch_array($result)) 
		   while($row=  mysqli_fetch_assoc($result)) 
           {  
                //$output .= '<li>'.$row["sup_name"].'</li>';  
				$output .= '<li>'.$row["sup_address"].'</li>';  
               //$output .= '<li>'.$row["sup_contact"].'</li>';  
               //$output .= '<li>'.$row["sup_contact1"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Name Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  

 ?>  