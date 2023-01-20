<?php 
include "selectoption.php";
?>
<h1 style="text-align:center"> Calculator</h1>
<div style="text-align:center">
    <form action="<?php $_SERVER['PHP_SELF'] ?>"method="GET" >
        <input type="text" name="num1" value="<?php
        if(isset($_GET['num1'])) { echo $_GET['num1']; }
        ?>">
        <select name="operation" id="">
            <option <?php echo $a ?> >+</option>
            <option <?php echo $b ?>  >-</option>
            <option <?php echo $c ?>  >*</option>
            <option <?php echo $d ?>  >/</option>
        </select>
        <input type="text" name="num2" value="<?php
        if(isset($_GET['num2'])) { echo $_GET['num2']; }
        ?>">
        <input type="submit" value="=">
    </form>
    <?php include "allcalc.php" ?>
</div>