
<!DOCTYPE html>
<html>
<head>

    <link rel='stylesheet' href="myStyleSheet.css">
    
</head>
<body>
    

    
    
<?php
// DB name = shop_store, DB-tabel-name=products

$db = mysqli_connect("localhost", "root", "", "shop_store" );
$result = mysqli_query($db , "SELECT * FROM products " );


echo '<div class="flex-container">';

while($row = mysqli_fetch_array($result)){
    echo '<div>'
                    ."<img style= width:100px;height:100px; src='images/".$row['image']."' >".'<br>'
                    .$row['name'].'<br><br><br>'
                    .$row['description']
                    .'<br><br><br><br> $'
                    .$row['price'].'</h5><br>'
                    
                    .
                    
                    
         '</div>';
    	

}
echo "</div>";

 // '<br>'."<img src='images/"
/*
 * 
 * while($row = mysqli_fetch_array($result)){
    echo '<div>'
                    .$row['name'].'<br>'
                    .$row['catogory'].'<br><h5> $'
                    .$row['price'].'</h5><br>'
                    .$row['description']
 * ."<img src='images/".$row['image']."' >".'<br>'
                     .$row['image'].'<br>'     
                    .$row['quantity'].'<br>'
                    .$row['date'].'<br>'.
         '</div>';
    	

}
echo "</div>";
 * 
 */
//echo "<pre>";
//print_r($result);

/*echo "<table><tr> <th>ID</th> <th>Name</th>   <th>Catogory</th>  <th>Price</th>  <th>Description</th> <th>Image</th> <th>Quantity</th> <th>Date</th></tr>";
while($row = mysqli_fetch_array($result)){
    
   echo "<tr><td>".$row['id'].
           "</td><td>".$row['name'].
           "</td><td>".$row['catogory'].
           "</td><td>".$row['price'].
           "</td><td>".$row['description'].
           "</td><td>".$row['image'].
           "</td><td>".$row['quantity'].
           "</td><td>".$row['date'].
           "</td></tr>";
    
}
echo "</table>";*/

?>
    
 
  <!--
    <br><br><br>
 <div class="flex-container">
       <div><span>1</span></div>
      <div><span>2</span></div>
      <div><span>3</span></div>
      <div><span>4</span></div>  
     
 </div>
 <div class="flex-container">
       <div><span>1</span></div>
      <div><span>2</span></div>
      <div><span>3</span></div>
      <div><span>4</span></div>  
     
    </div>
 <div class="flex-container">
       <div><span>1</span></div>
      <div><span>2</span></div>
      <div><span>3</span></div>
      <div><span>4</span></div>  
      
    </div>
     <div class="flex-container">
       <div><span>1</span></div>
      <div class="two">  <span>2</span>  </div>
      <div><span>3</span></div>
      <div><span>4</span></div>  
      <div><span>5</span></div>
    </div>  -->
    
    
</body>
</html>
