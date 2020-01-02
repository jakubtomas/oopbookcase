<?php
session_start();

include_once 'load.php';

include_once '_partials/header.php';


$db = new database();

$user = new  users();

$db->getconn();
echo 'hell';

echo '<pre>';
//print_r( $db->getdata());
echo '</pre>';


//$user->getdata();
?>

    <div class="white min-vh-100">

        <h1>Hellou</h1>

        <?php
        echo '<pre>';
        print_r($user->getuser());
        echo '</pre>';

        ?>


    </div>


<?php
include_once '_partials/footer.php';

?>