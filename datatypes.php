<!-- Data types in php:
    1. What is data type?
    the type of data we are storing in memory or that variable

    1. String
    2. Integer
    3. float
    4. Boolean
    5. Null
    6. Array 
    7. object(class)
    8. Resourse
1.37.00
-->

<?php
    // string
    $name = "prathamesh";
    echo var_dump($name);

    // Interger
    $num = 92;
    echo var_dump($num);

    // Float
    $numfloat = 92.330;
    echo var_dump($numfloat);

    // boolean
    $bool = true;
    echo var_dump($bool);

    // array
    $arr = ['prathamesh', 'onkar', 'rohan'];
    echo var_dump($arr);

    // null
    $empty = null;
    echo var_dump($empty);

    // object(class)
    // $user = new ClassName();

    // resource
    $connection = ftp_connect("127.0.0.1") or die('localhost not found');
    echo $connection;
?>

<!-- Comments in php :
 
    1. what is a comment in the code?
    2. types of comments
    3. examples of comments
    4. interview question
-->

<?php

   // single line comment
   /**
    * multiline commnet
    */

?>


<!-- How PHP Works?
                        1
                    http request                2
1.   web browser                            web server     
                    http response            (apache)  
                     index.php
                     html doc
                        3 
Apache-creates server on local machines    
That's the reason why php helps to build the dynamic websites
-->
