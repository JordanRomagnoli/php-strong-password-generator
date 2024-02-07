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
    }


    function randomPass($lunghezza, $caratteri){

        $passwordCasuale = substr(str_shuffle($caratteri), 0, $lunghezza);

        return $passwordCasuale;
    };

    $finalPassword = randomPass($userLength, $caratteri);


    $_SESSION['finalPassword'] = $finalPassword;

    if($_SESSION['finalPassword'] !== ''){
        header('Location: ./resultPass.php');
    }else{
        header('Location: ../landingPage.php');
    }
    
?>