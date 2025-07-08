<!-- PHP with HTML:
 
    1. what do we need to PHP and HTMl?
    2. Write html inside php.
    3. Write php inside htl tages
    4. Add some style with php
   
-->



<?php 
    $h2_color = "Sykblue";
    $name = "Prathamesh";
    echo "Multiple php tags in one php page";
?>

<?php 
    echo "<h1 style='color:blue'>PHP with html </br> Name :$name</h1> ";

    echo "<h2 style='$h2_color'>Hello</h2>";
    echo "<h2 style='$h2_color'>$name, </h2>";
    echo "<h2 style='$h2_color'>Welcome!!!</h2>";
?>



