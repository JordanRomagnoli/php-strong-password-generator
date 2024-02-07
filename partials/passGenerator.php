<?php
    session_start();

    if(intval($_POST['length']) > 0){

        $userLength = intval($_POST['length']); 

    }else{

        $userLength = 0; 
    };

    $finalPassword = '';

    function randomPass($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=<>?';
        $passwordCasuale = substr(str_shuffle($caratteri), 0, $lunghezza);

        return $passwordCasuale;
    };

    $finalPassword = randomPass($userLength);


    $_SESSION['finalPassword'] = $finalPassword;

    if($_SESSION['finalPassword'] !== ''){
        header('Location: ./resultPass.php');
    }else{
        header('Location: ../landingPage.php');
    }
    
?>