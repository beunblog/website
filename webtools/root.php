<?php
include("..\header.php");
?>
<div

<div class="container-fluid pt-5">
    <form action="" method="post">
        Number: <input type="number" name="quad_num"><br>
        <input type="submit">
    </form>


    <?php
    if (!empty($_POST['quad_num']))
    {
        $num = $_POST['quad_num'];
        $divDigit = $num % 10;
        if ($divDigit == 0){
            $divDigit = 1;
        }
        $res = 0;
        $inc = 1;

        while(abs($divDigit - $res) > 0.01){
            echo abs($divDigit - $res) > 0.01;
            echo "<br>";
            echo $divDigit;
            echo "<br>";
            echo $divDigit - $res;
            echo "<br>";

            $res = $num/$divDigit;
            echo $res;
            echo "<br>";
            echo $divDigit - $res;
            echo "<br>";
            echo "<br>";



            if($divDigit - $res > 0.01){
                if($divDigit > 1){
                    $divDigit = $divDigit - $inc;
                }else{
                    if($inc > 0.001) {
                        $inc = $inc / 10;
                    }
                }
            }
            if($divDigit - $res < 0.01){
                $inc = $inc + $inc/10;
                $divDigit = $divDigit + $inc;

            }
        }

        echo $res;

    }

    ?>

</div>
<?php
include("../footer.php");
?>

