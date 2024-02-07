<?php

    function randomPass($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=<>?';
        $stringaCasuale = substr(str_shuffle($caratteri), 0, $lunghezza);

        return $stringaCasuale;
    };

?>