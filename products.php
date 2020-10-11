<?php
include ('header.php');
error_reporting(0);
$mysqli = new mysqli("localhost:3308","root","","anandimpex");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    $prodList = "Select id, name, color, image_url,tile_description from products;";
    $prodRes = $mysqli -> query($prodList);
    // Fetch all
    $res = $prodRes -> fetch_all(MYSQLI_ASSOC);
    // print_r($res);
    // Free result set
    $res1  = $prodRes -> free_result();
    // echo "<br/>";
    print_r($res1);
    $mysqli -> close();
    // echo "successfully connected";
}
$prodDisplayHtml = '';
$j = 0;
$prodDisplayHtml = $prodDisplayHtml . '<br/><br/><br/><br/><br/><br/><div class="container">
<div class="row">';
for($i=0; $i < count($res); $i++){
    
    $j = $j + 1;
    if($j > 3 ){
        $j = 1;
        $prodDisplayHtml = $prodDisplayHtml . '</div> <div class="row">';
    }
    $prodDisplayHtml = $prodDisplayHtml . '<div class="col-sm">
    <div class="card" style="width: 18;">
      <img class="card-img-top card-img-top_cstm" src="images/gallery/'.$res[$i]['name'].'.jpg" alt="'.$res[$i]['name'].'">
      <div class="card-body">
        <h5 class="card-title">'. $res[$i]['name'] .'</h5>
        <p class="card-text">'.$res[$i]['tile_description'].'</p>
        <a href="product_spec.php?name='.$res[$i]['name'].'&id='.$res[$i]['id'].'" class="btn btn-primary">Know More >> </a>
      </div>
      </div>
  </div>';
}
if($j < 1){
    $prodDisplayHtml = $prodDisplayHtml . '</div>';
}
if($j == 1){
    $prodDisplayHtml = $prodDisplayHtml . '<div class="col-sm"></div><div class="col-sm"></div></div>';
}
if($j == 2){
    $prodDisplayHtml = $prodDisplayHtml . '<div class="col-sm"></div></div>';
}
$prodDisplayHtml  = $prodDisplayHtml . '</div>';
echo $prodDisplayHtml;

//include ('footer.php');
?>