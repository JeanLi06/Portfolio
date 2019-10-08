<?php
//    par sécurité, ces données ne sont pas sur Github, grâce à .gitignore
    function secret_bdd_connection()
    {
        global $pdo;
        $pdo = new PDO
        (
            'mysql:host=185.98.131.93;dbname=jeanl1235352;charset=UTF8',
            'jeanl1235352',
            '6o2comilez',
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//	    	Demande à PDO de générer une exception en cas d'erreur
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES, false
            ]
        );
    }