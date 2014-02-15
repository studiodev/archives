<?php /* Smarty version 2.6.18, created on 2008-02-06 15:41:38
         compiled from admin/admin.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo $this->_tpl_vars['nomSite']; ?>
 - Administration</title>
	<link rel="stylesheet" type="text/css" href="templates/admin/css/main.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="templates/admin/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="templates/admin/js/common.js" media="print" />
	<!--[if lte IE 6]>
		<link rel="stylesheet" type="text/css" href="templates/admin/css/ie6_or_less.css" />
	<![endif]-->
	<script type="text/javascript" src="javascript/librairies/jquery.js"></script>
	<script type="text/javascript" src="templates/admin/js/common.js"></script>
	<script type="text/javascript" src="javascript/admin.js"></script>	
	<script language=JavaScript src="javascript/editor3/scripts/language/french/editor_lang.js"></script>
	<script language=JavaScript src="javascript/editor3/scripts/innovaeditor.js"></script>
    <?php echo $this->_tpl_vars['header']; ?>


</head>

<body id="type-a">
<div id="wrap">

	<div id="header">
		<br /><div id="site-name">Administration <?php echo $this->_tpl_vars['nomSite']; ?>
</div><br />
	
	<?php echo $this->_tpl_vars['menu_admin']; ?>

	
	</div>
	
  <div id="content-wrap">
	
		
		<div id="content">
		
			<div id="breadcrumb">
				<?php echo $this->_tpl_vars['fil_ariane']; ?>

			</div>
					
			<?php echo $this->_tpl_vars['retour']; ?>

            
			<h1><?php echo $this->_tpl_vars['titre']; ?>
</h1>

			<?php echo $this->_tpl_vars['contenu']; ?>

			
					
			<div id="footer">
			<p>Administration du site <?php echo $this->_tpl_vars['nomSite']; ?>
 par <a href="#">Studio-Dev</a></p>
			</div>
			
		</div>
		
  </div>
</div>
</body>
</html>