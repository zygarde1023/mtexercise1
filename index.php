<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmldemomt.herokuapp.com//rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("cars");
?>

 <h1>Cars</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $carbrand = $data->getElementsByTagName("brand")->item(0)->nodeValue;
     $carstatus = $data->getElementsByTagName("status")->item(0)->nodeValue;
     $carname = $data->getElementsByTagName("name")->item(0)->nodeValue;
     $carprice = $data->getElementsByTagName("price")->item(0)->nodeValue;
     echo "<ul>
            <h2>Brand: $carbrand</h2>
              <ul>
                  <li>Status: $carstatus </li>
                  <li>Name: $carname </li>
                  <li>Price: $carprice </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
