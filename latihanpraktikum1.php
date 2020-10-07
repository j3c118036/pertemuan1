<!DOCTYPE html>
<html>
<body>
    
<input type="text" name="a">
<select>
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
</select>
<input type="text" name="b">
<input type="submit" value="=">
if ($_GET):
    $a = (double) @$_GET['a'];
    $b = (double) @$_GET['b'];
    $operator = @$_GET['operator'];
    
    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;
        case '-':
            $hasil = $a - $b;
            break;
        case '*':
            $hasil = $a * $b;
            break;
        case '/':
            $hasil = $a / $b;
            break;
    }
    ?>
    </body>
</html>