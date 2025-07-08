<!-- Operators :
    1. Arithmatic operators (+,-,/,%,*,**)
    2. Logical operators (&&,||,!)
    3. Bitwise operators (&,)
    4. Relational operators (<,>,<=,>=,==,===,!=)
        !== (not identical)- checkes are they not equal and datatype
        <> (not equal)- same as the (!=)
        <=> (spaceship)- result set (-1, 0, 1) interger values
        for e.g 
        case 1:
            x=10,y=15
            var_dump(x<=>y)  -> int(-1)
        case 2: 
            x=10,y=10
            var_dump(x<=>y)  -> int(-0)
        case 3:
            x=15,y=10
            var_dump(x<=>y)  -> int(1)

    5. Assignment operators (=, +=, -=, *=, /=, %=)
    6. increment/decrement operators (++,--)
            1. pre-increment/decrement
            2. post-increment/decrement
    7. String and String Operators:
            . Dot operator  
            .= dot assignment operator
-->

<?php
    $a = 10;
    $b = 2;
    // print$a+$b;
    // echo $a-$b;
    // echo $a*$b; 
    // echo $a/$b;
    // echo $a%$b;
    // echo $a**$b;

    // var_dump()--> shows the datatype as well as result

    // increment/decrement operators
    // echo ++$a;      // 11
    // echo $a++;      // 10
    // echo "</br>";
    // echo $a;        // 11

    // String and String Operators:
    // echo 3+2+"7";       // 12 
    // $x="10";
    // echo $a+$x;         // 20
    $name = 'prathamesh';
    $surname = ' karande';
    // echo "my name is ".$name.$surname;
    $name.=$surname;
    echo "my name is ".$name;


?>