<?php

/**
 * Fichier de configuration generale de l'application 
 * 
 * 1. Définition des constantes
 * 2. 
 * 3. 
*/

/**
 * 1. Définition des constantes
 */

// WEBSITE_TITLE : DEfinition du titre du site

 define('WEB_SITE_TITLE', "WebPizza !");

/**
 * 2. Définition des variables d'environnemnt d'execution 
*/

// Environnement de développement ou production ?
// Les valeurs peuvent être : "prod" ou "dev"
// Par défaut, on considère que l'application s'execute en environnment de PROD
$env = "prod"; 

// Liste des domaines que l'on considère comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];