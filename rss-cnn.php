<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("rss.xml");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("brand")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("name")->item(0)->nodeValue;
  
   echo "<li>$brand
            <ul>
                <li>$name</li>
            </ul>
        </li>";
 }
?>
</ul>
