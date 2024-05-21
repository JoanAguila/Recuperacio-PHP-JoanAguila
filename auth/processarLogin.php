<?php
    session_start();
    include "connectar.php";
    
    function comprova_usuari($bd, $username, $password) {
        session_start();
        $sql="select username, password from users where username=:username and password=:password";
        $order = $bd->prepare($sql);
        $order -> bindValue(':username',$username);
        $order -> bindValue(':password',md5($password));

        $order->execute();
        $resultat = $order -> fetch(pdo::FETCH_ASSOC);

        if($resultat==null)return false;
        return true;  
    }

    // Posar Aquí el codi per recuperar dades del formulari de Login i comprovar usuari i password
    
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(comprova_usuari($bd, $username, $password)) {
            $_SESSION['username'] = $username;
            header("Location: http://localhost/portafoli-personal-php/index.php");
        }
        else header("Location: login.php");

    }
    else {
        header("Location: login.php");
    }



?>
