<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>kuadrat</title>
    </head>
    <body>
    <h2>Terima Input</h2>
        <form method="POST" action="lat3.php">
            <table border="0">
                <tr>
                    <td>bilangan</td>
                    <td><input type="text" name="bil">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="kirim">
                        <input type="reset">
                    </td>
                </tr>
            </table>
        </form>

                
        <?php
            
            if(isset($_POST["bil"])==TRUE)
            {
                echo "hasil kuadratnya : <br>";
                $a = $_POST ['bil'];
                function kuadrat($a)
                {
                $hasil = $a * $a;
                return $hasil;
                }
            echo kuadrat($a);
            }
            
        ?>
    </body>
</html>