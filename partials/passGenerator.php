<?php
    session_start();

    if(intval($_GET['length']) > 0){

        $userLength = intval($_GET['length']); 

    }else{

        $userLength = 0; 
    };

    $finalPassword = '';

    $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()_-+=<>?';
    $caratteri = '';
    $repeat = false;

    if(isset($_GET['repeatStatus']) && $_GET['repeatStatus'] === 'true'){
        $repeat = true;
    }
    

    if(isset($_GET['option1'])){

        $caratteri .= $lettere;

    };
    
    if(isset($_GET['option2'])){

        $caratteri .= $numeri;

    };
    
    if(isset($_GET['option3'])){

        $caratteri .= $simboli;

    };

    if(empty($caratteri)){
        $caratteri = $lettere.$numeri.$simboli;
    };


    function randomPass($lunghezza, $caratteri, $repeat) {
        if (!$repeat) {
            $caratteriUnici = str_shuffle($caratteri);
            return substr($caratteriUnici, 0, $lunghezza);
        }
    
        $passwordCasuale = '';
        $caratteriLunghezza = strlen($caratteri);
    
        for ($i = 0; $i < $lunghezza; $i++) {
            $passwordCasuale .= $caratteri[mt_rand(0, $caratteriLunghezza - 1)];
        }
    
        return $passwordCasuale;
    }
    

    $finalPassword = randomPass($userLength, $caratteri, $repeat);


    $_SESSION['finalPassword'] = $finalPassword;

    if($_SESSION['finalPassword'] !== ''){
        header('Location: ./resultPass.php');
    }else{
        header('Location: ../landingPage.php');
    }
    
?>