<!-- Constants in PHP:
    1. What are constannts?
    2. Constants vs variables
    3. two ways to define constants.
        a. const
        b. define
    4. examples of constants 
    5. inteview questions for constants
-->

<?PHP
    // $pi=3.14;    
    const pi=3.14;    
    echo pi;
    // pi=3.27;

    define("data", "Prathamesh");
    echo data;
    // define("data","peter");
    // echo data;                 // error : Constant data already defined in C:\xampp\htdocs\PHP\constants.php on line 17 Prathamesh


?>
