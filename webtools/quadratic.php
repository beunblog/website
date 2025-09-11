<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
include(__DIR__ . '/../header.php');
?>
<div class="container-fluid pt-5">
    <form action="" method="post">
        Number: <input type="number" name="quad_num"><br>
        <input type="submit">
    </form>


<?php
if (!empty($_POST['quad_num']))
{
    $num = $_POST['quad_num'];
    $prev = 0;
    $quad = 0;
    for ($i = 1; $i <= $num; $i++){
        $to_add =  $i+$prev;
        $quad = $quad + $to_add;
        $prev = $i;
    }

    echo $quad;

}

?>

</div>
<?php
include(__DIR__ . '/../footer.php');
?>

