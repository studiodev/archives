<?php
header('Content-Type: text/html; charset=UTF-8');

ini_set('xdebug.collect_vars', 'on');
ini_set('xdebug.collect_params', '4');
ini_set('xdebug.dump_globals', 'on');
ini_set('xdebug.show_local_vars', 'on');

/**
 * Portail Nixtee
 *
 * PHP version 5 - Url rewriting actif
 *
 * @descript   R�seau social
 * @author     Yotsumi <freelance@studio-dev.fr>
 * @copyright  Studio-dev <www.studio-dev.fr>
 * @modified   7/04/2008
 */

// D�claration optimisations et charset
ob_start("ob_gzhandler");

// Chargement du fichier de configuration
include_once 'include/config.php';


include_once 'classes/class_main.php';
$m = new Main();

	include_once "include/menus.php";
	

// On r�cup�re l'adresse de la page du type www.monsite/?nom_page
if (@array_shift(@array_keys(@$_GET))) @$page = @strtolower(array_shift(array_keys($_GET)));
else $page = PAGE_DEFAUT;

// V�rif faille include suppl�mentaire ( >>>FACULTATIF<<< Mieux vaut trop que pas assez ^^  )
if (preg_match("#http|ftp|www|.php#is", $page) || strpos($page, '..')!==false || strpos($page, './')!==false || strpos($page, '__')!==false || strpos($page, '_/')!==false) {
	Fonctions::bloquer_acces('Hack Attempt');
}


// On redirige vers le dossier /membre si la page contient le terme '?my-xxxxx' ( idem avec admin )
if (eregi( "^my-([-_a-zA-Z0-9]*)", $page, $membre )) $page="membre/".$membre[1];


if (file_exists('pages/' . $page . '.php')) {
	include 'pages/' . $page . '.php';
} else {
	$m->design->template("erreur");
	$m->design->assign('nomErreur', 'Erreur 404 : page introuvable');
	$m->design->assign('descErreur', 'Impossible d\'afficher la page <u>'.$page.'</u>.');
} 

// Affiche le contenu avec le template, seulement si des zones ont �t� sp�cifi�es
$m->design->display('index.tpl');
ob_end_flush();
?>