
<html>
<!--
    <head>
        <title> Operasi Fungsi </title>
    </head>
    <body>
        <br>
        <br>
        <br>
        <h3 align="center"> Operasi Fungsi PHP </h3>
        <br>
        <br>
        <form>
            <table action="tugas_fungsi2.php" method="POST" border="1" align="center">
                <tr>
                    <th colspan="2">Pertambahan </th>
                    <th colspan="2">Perkalian   </th>
                </tr>
                <tr>
                    <td colspan="2"> Rumus : a + b = c </td>
                    <td colspan="2"> Rumus : d x e = f </td>
                </tr>
                <tr>
                    <td> <label for="a"> a : </label> <input type="text" name="a"> </td>
                    <td> <label for="b"> b : </label> <input type="text" name="b"> </td>
                    <td> <label for="d"> d : </label> <input type="text" name="d"> </td>
                    <td> <label for="e"> e : </label> <input type="text" name="e"> </td>
                </tr>
            </table>
            <br>
            <br>
            <table action="tugas_fungsi2.php" method="POST" border="1" align="center">
                    <tr>
                        <th colspan="2">Pengurangan </th>
                        <th colspan="2">Pembagian   </th>
                    </tr>
                    <tr>
                        <td colspan="2"> Rumus : g - h = i </td>
                        <td colspan="2"> Rumus : j / k = l </td>
                    </tr>
                    <tr>
                        <td> <label for="g"> g : </label> <input type="text" name="g"> </td>
                        <td> <label for="h"> h : </label> <input type="text" name="h"> </td>
                        <td> <label for="j"> j : </label> <input type="text" name="j"> </td>
                        <td> <label for="k"> k : </label> <input type="text" name="k"> </td>
                    </tr>
                </table>
                <br>
                <br>
                <table action="tugas_fungsi2.php" method="POST" border="1" align="center">
                    <tr>
                        <td colspan="2"> <input type="submit" value="hasil"> </td>
                    </tr>
                </table>
        </form>
    </body>
-->
</html>




<?php

    
    $a = $_POST['a']; $d = $_POST['d']; $g = $_POST['g'];
    $b = $_POST['b']; $e = $_POST['e']; $h = $_POST['h'];
    $j = $_POST['j']; $k = $_POST['k'];
    
    
    function sum($a, $b)
    {
        $c = $a + $b;
        return $c;
    }
    
    
    function multiply($d, $e)
    {
        $f = $d * $e;
        return $f;
    }

   
    function kurang($g, $h)
    {
        $i = $g - $h;
        return $i;
    }
    

    function divide($j, $k)
    {
        $l = $j / $k;
        return $l;
    }

    echo "<br>HASIL OPERASI <br><br>";

    echo " $a + $b = ";
    echo sum($a, $b) ;

    echo "<br> $d x $e = ";
    echo multiply($d, $e) ;

    echo "<br> $g - $h = ";
    echo kurang($g, $h) ;

    echo "<br> $j / $k = ";
    echo divide($j, $k) ;
    

?>