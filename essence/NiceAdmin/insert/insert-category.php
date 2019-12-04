<?php
    if(isset($_POST['submit-category'])){
        $name = $_POST['name'];
      
        $insCategory = "INSERT INTO categories(name)
                        VALUE('$name')";
        mysqli_query($conn,$insCategory);
      }
?>