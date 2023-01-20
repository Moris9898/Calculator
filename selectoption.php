<?php 

    $a=""; $b=""; $c=""; $b=""; $d="";
if(isset($_GET['operation'])) {
    if($_GET['operation'] == "+") {
        $a ="selected";
    } elseif ($_GET['operation'] == "-") {
        $b ="selected";
    
    } elseif ($_GET['operation'] == "*") {
        $c ="selected";
    
    } elseif ($_GET['operation'] == "/") {
        $d ="selected";
    }
}
?>