<?php
/**
 * Détermine les langues de l'utilsateur
 */
if (!function_exists('getUserLanguages'))
{ 
    function getUserLanguages() 
    {
        // On récupère la liste des langues depuis la super global $_SERVER
       $languages_str = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

       // On converti la chaine en tableau
       $languages_arr = explode(",", $languages_str);

       dump($languages_arr);


       // On boucle sur la liste des langues
       foreach($languages_arr as $key => $lang)
       {
            $lang = explode(";", $lang);
            $lang = $lang [0];
            dump ( $lang );
       }

        dump($languages_arr);
    }
}
getUserLanguages();