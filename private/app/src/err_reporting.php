<?php

/**
 * Fichier de définition du comportement des erreurs PHP
 * 
 * Info
 * - http://php.net/manual/fr/function.error-reporting.php
 */

// Dans le cas ou la variable $dev_domains n'est pas défini (dans le fichier config.php)
 // On utilise la variable $dev_domains avec un tableau vide 

 if((!isset( $dev_domains )) {
    $dev_domains = [];
}

// Dans le cas ou la variable $env est défini à une autre valeur que "dev"
// On demande à PHP d'ignorer toutes les erreurs.
if ($env != "dev") {
    init_set('display_errors', 0);
    init_set('display_startup_errors', 0);
    error_reporting(E_ALL);
}