<?php
            
            if(isset($_POST["bil"])==TRUE){
                echo "hasil kuadratnya : <br>";
                $a = $_POST ['bil'];
            function kuadrat($a){
                $hasil = $a * $a;
                return $hasil;
            }
            echo kuadrat($a);
        }
        ?>