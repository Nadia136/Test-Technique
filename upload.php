<?php

if(isset($_POST['submit'])) {
   foreach($_FILES['doc']['name'] as $key=>$val) {
       move_uploaded_file($_FILES['doc']['tmp_name'][$key],'uploads/'.$val) ;
   }
}

// sort files by last modified date
usort($_FILES, function($x, $y) {
    return filemtime($x) < filemtime($y);
});

?> 