<?php
$_COOKIE_name1 = "num";
$_COOKIE_name2 = "op";
$num = ""; 

if (isset($_POST['num'])) {
   
    $num = $_POST['input'] . $_POST['num'];
}

if (isset($_POST['op'])) {
   
    if (!empty($_POST['input'])) {
        $num = $_POST['input'] . " " . $_POST['op'] . " "; 
    }
}

if (isset($_POST['equal'])) {
    
    $num = $_POST['input'];
   
    $result = eval("return " . str_replace(' ', '', $num) . ";"); // Evaluate the expression
    $num = $result; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculator</title>
</head>
<body>
    <div class="calc">
        <form action="" method="post"><br>
            <label for="DIDAS" class="label">DIDAS CALCULATOR 991fx</label>
            <input type="text" class="maininput" name="input" value="<?php echo htmlspecialchars($num); ?>" readonly><br><br> <!-- Set input to readonly -->
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"><br>
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="*"><br>
            <input type="submit" class="c" name="cancel" value="C">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">
        </form>
    </div>
</body>
</html>