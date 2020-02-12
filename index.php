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
     $carbrand = $data->getElementsByTagName("carbrand")->item(0)->nodeValue;
     $carstatus = $data->getElementsByTagName("carstatus")->item(0)->nodeValue;
     $carname = $data->getElementsByTagName("carname")->item(0)->nodeValue;
     $carprice = $data->getElementsByTagName("carprice")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Brand: $carbrand </li>
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
