<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Portfolio de Julien LAFONT - {$titrePage}</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="Description" content="{$description}" />
	<meta name="Keywords" content="{$keywords}" />
	<meta name="generator" content="www.Studio-Dev.fr - Julien LAFONT" />
	
	<script type="text/javascript" src="javascript/librairies/jquery.js"></script>
	<script type="text/javascript" src="javascript/-general.js"></script>

	<link rel="stylesheet" href="styles_min.css" type="text/css" />	
    {$header}
    
</head>
<body id="page2">

<h1><span class="hhhhhh">Portfolio Julien LAFONT : </span>{$titrePage}</h1>

<!-- header  -->
<div class="tall_content site_center">
		<div class="main">

			<div class="flash">
			  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
           				codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
           				width="780" height="240">
    			<param name="movie" value="templates/images/header.swf"  /> 
    			<param name="quality" value="high"  />
    			<param name="menu" value="false"  />
				<param name="wmode" value="transparent"  />
				
				 <!--[if !IE]> <-->
				 <object data="templates/images/header.swf"
				         width="780" height="240" type="application/x-shockwave-flash">
				     <param name="quality" value="high"  />
				     <param name="menu" value="false"  />
					 <param name="wmode" value="transparent"  />
				     <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer"  />
				 </object>
				 <!--> <![endif]-->
   			  </object>
			</div>
		</div>	

</div>



<!-- content -->
<div class="tall_bot" id="main">
	<div class="tall_top site_center">
		<div class="main">
			
			<ul class="mon_menu">
				<li><a href="accueil.htm" class="naviguer_accueil" title="Accueil du portfolio de Julien LAFONT, développeur Web 2.0">Accueil</a></li>
				<li><a href="qui-suis-je.htm" title="Informations sur la vie de Julien LAFONT">Qui suis-je ?</a></li>
				<li><a href="mon-cv.htm" title="CV et références">Mon CV</a></li>
				<li><a href="mes-realisations.htm" title="Mes développements en Web, Software et Design">Réalisations</a></li>
				<li><a href="me-contacter.htm" title="Contacter l'auteur de ce site">Contact</a></li>
			
			</ul>
            
			
			<div class="con_tent">
				
			    <div id="contenu">{include file="$lang/$page.tpl"}</div>
				<div class="clear"></div>
		  </div>
			
		</div>
	</div>
</div>


<!--footer-->
<div class="site_center">
	<div class="main">
		<span class="lien_plan"><img src="images/sitemap.png" alt="Plan du site"/> <a href="plan-du-portfolio.htm" title="Accéder au plan de mon portfolio">Plan du site</a></span>
			
		<div class="footer">
			Développement réalisé par <strong>Julien LAFONT</strong> alias <strong>YoTsumi</strong> pour <a href="http://www.studio-dev.fr">Studio-Dev.fr</a><br  />
	   		Contenus sous license <a href="http://creativecommons.org/licenses/by-nc/2.0/fr/">Creative Commons</a> | Valide XHTML et (presque ^^ ) CSS <br />
			Friends : <a href="http://fr.twilight-thegame.com/blog/" title="blog twilight" target="_blank">blog twilight</a> | <a href="http://www.meteorange.fr" title="Station automatique destinée à fournir des informations météorologiques en temps réel à Orange." target="_blank">Météo Orange</a>
		</div>
  </div>
</div>

</body>
</html>