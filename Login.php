<?php
$login = $_POST['login'];
$senha = $_POST['SENHA'];

if ($login == " chuck" && #senha == "noris") {
    echo "logado!!";
} else {
    header('location: index.php');


}

?>
