
<?php 
    
if(isset($_GET['num1'])) {
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];
        if($num1 != "" && $num2 != "") {
            switch($operation) {
                case("+"):
                    echo "<h1>" . ($num1+$num2) . "</h1>";

                    break;
                case("-"):
                    echo "<h1>" . ($num1-$num2) . "</h1>";
                    break;
                case("*"):
                    echo "<h1>" . ($num1*$num2) . "</h1>";

                    break;
                case("/"):
                    echo "<h1>" . ($num1/$num2) . "</h1>";
                    break;
            }
        } 
    }
}
?>