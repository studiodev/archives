<?php
securite('5+');

// ------------------------------------------------------------------------------------ //
//              Met � jour le fichier module.js permettant � un webmaster               //
//                       d'afficher le dernier duel sur son site                        //
// ------------------------------------------------------------------------------------ //

// S�lection du dernier duel :
	$sqlChoixDuel=mysql_query("SELECT * FROM ".PREFIX."duels ORDER BY id DESC LIMIT 0,1");
	$d=mysql_fetch_object($sqlChoixDuel);
	
		// Calcul des pourcentages
		$note1P=round((($d->note1*100)/$d->votestotal),1);
			$width1=($note1P*243)/100;
		$note2P=round((($d->note2*100)/$d->votestotal),1);		
			$width2=($note2P*243)/100;		

// Mise en forme du duel
$c='<div id="inner_faistonchoix" style="width:520px; border:1px solid #ccc; padding:5px; text-align:center">
		<a href="'.URL.'rss.xml" target="_blank" title="Ajouter le flux rss du site � mon agr�gateur favoris" /><img src="'.URL.'images/rss1.png" border="0" style="float:right;" alt="Rss"/></a>
	
	<div id="titre" style="text-align:center;margin-left:30px">
		<a href="'.URL.'" target="_blank" title="Faistonchoix.fr : Duels de photos en ligne" style="font-family:verdana, Arial; font-size:20px; color:#0099FF; text-decoration:none">Fais Ton Choix</a>
	</div>
	<div id="sous_titre" style="font-family:Verdana; text-align:center; padding-left:15px; color:#777; font-size:13px; font-variant:small-caps; margin-left:20px">et d�cide qui sera le vainqueur</div>
	
	<table style="width:100%;height:270px; margin:15px 0">
		<tr>
			<td style="width:50%;">
		
				<div id="img1" style="text-align:center; line-height:35px">
					<a href="'.URL.'voter_pour_'.recode(recupBdd($d->nom1)).'-'.$d->id.'-1.htm" title="Vote pour '.recupBdd($d->nom1).' sur Faistonchoix.fr" target="_blank" onmousedown="this.style.outline=0"><img src="'.DUEL.recupBdd($d->img1).'" alt="'.recupBdd($d->nom1).'" border="0" style="border:3px solid #ccc" onmouseover="this.style.borderColor=\'#00a8FF\'"  onmouseout="this.style.borderColor=\'#ccc\'" onmousedown="this.style.borderColor=\'#FF9900\';" /></a><br />
					<strong style="color:#333; border-bottom:1px solid #00A8FF; font-size:14px">'.recupBdd($d->nom1).'</strong>
					
					<ul style="list-style:none; margin:0 0 0 -40px; font-family:verdana; font-size:13px; width:250px">	
						<li style="padding:1px; border:1px solid #ccc; width: 243px; line-height:11px; font-family:Verdana, Arial, Helvetica, sans-serif">
							<span style="width: '.$width1.'px; height:20px; background: #fff url('.URL.'theme/images/fond-barre.png); display: block;">&nbsp;</span>
							<strong style="margin-top:-15px;padding-bottom:4px; display:block; text-align:center; font-family:verdana; color:#333333">'.$note1P.' %</strong>
						</li>
					</ul>
					
				</div>
				
			</td>
			<td style="width:50%;">
		
				<div id="img2" style="text-align:center; line-height:35px">
					<a href="'.URL.'voter_pour_'.recode(recupBdd($d->nom2)).'-'.$d->id.'-2.htm" title="Vote pour '.recupBdd($d->nom2).' sur Faistonchoix.fr" target="_blank" onmousedown="this.style.outline=0"><img src="'.DUEL.recupBdd($d->img2).'" alt="'.recupBdd($d->nom2).'" border="0"  style="border:3px solid #ccc" onmouseover="this.style.borderColor=\'#00a8FF\'"  onmouseout="this.style.borderColor=\'#ccc\'" onmousedown="this.style.borderColor=\'#FF9900\';" /></a><br />
					<strong style="color:#333; border-bottom:1px solid #00A8FF; font-size:14px">'.recupBdd($d->nom2).'</strong>
		
					<ul style="list-style:none; margin:0; padding:0; font-family:verdana; font-size:13px; width:250px">	
						<li style="padding:1px; border:1px solid #ccc; width: 243px; line-height:11px; font-family:Verdana, Arial, Helvetica, sans-serif">
							<span style="width: '.$width2.'px; height:20px; background: #fff url('.URL.'theme/images/fond-barre.png); display: block;">&nbsp;</span>
							<strong style="margin-top:-15px;padding-bottom:4px; display:block; text-align:center; font-family:verdana; color:#333333">'.$note2P.' %</strong>
						</li>
					</ul>
				</div>
		
			</td>
	</tr>
	</table>
	

	<span style="font-family:Helvetica, sans-serif; color:#0066FF; font-size:11px">Vote pour l\'opposant que tu veux d�fendre en cliquant sur sa photo.</span>
	
</div>';

// On ins�re dan le code jvs ( en compressant le tout )
$code="try {
	div = document.getElementById('faistonchoix');
	div.innerHTML = '".addslashes(preg_replace ('/('.CHR(9).'|'.CHR(13).'|'.CHR(10).')/', "", $c))."';
} 
catch (e) { alert('Vous devez cr�er un div ayant pour id \'faistonchoix\' pour que le script fonctionne'); throw e }";

	// On enregistre dans le fichier
	$fp = fopen("webmaster/module.js", 'w+');
	fputs($fp, $code);
	fclose($fp);


?>
