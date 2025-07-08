<!--
    In PHP, echo, print, and var_dump are used to output data, but they differ in usage, functionality, and what kind of information they provide:

1. echo
    Purpose: Output one or more strings.
    Return Value: No return value.
    Usage: Faster than print, can output multiple values.

<?php 
    echo "Hello, world!";
    echo "Name: ", " John"; // Multiple parameters allowed
?>


2. print
    Purpose: Output a string.
    Return Value: Always returns 1, so it can be used in expressions.
    Usage: Slightly slower than echo, only one argument allowed.

<?php
    print "Hello, world!";
    $success = print "Printed!"; // $success = 1
?>

3. var_dump()
    Purpose: Displays structured information about a variable, including type and value.
    Return Value: None (used for debugging).
    Usage: Best for inspecting arrays, objects, or complex data.

<?php
    $age = 25;
    var_dump($age); // int(25)
    $arr = ["apple", "banana"];
    var_dump($arr); 
    /*    array(2) {
        [0]=> string(5) "apple"
        [1]=> string(6) "banana"}  */
?>


✅ When to Use What?
echo → When you just want to display strings quickly.
print → When you need to use the output in an expression (rare).
var_dump() → When debugging variables (especially arrays, objects).

-->