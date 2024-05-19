<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
	<div id="cimek">
        <ul id="elsosor">
            <li id="TelóBirodalom"><a href="index.php"> <span id="szin"><?= $fejlec['cim'] ?></span></a></li>
            <li> <a href="index.php?oldal=termekek" ><?= $fejlec['cim2'] ?></a></li>
            <li><a href="index.php?oldal=kapcsolat" > <?= $fejlec['cim3'] ?></a></li>
            <li><a href="index.php?oldal=uzenetek"><?= $fejlec['cim4'] ?></a></li>
            <li id="belepes">
			<?php if(isset($_SESSION['login'])) { ?>
<?php } else { ?>
    <a href="index.php?oldal=belepes" class="gomb">
        <button type="button"> Belépés </button>
    </a>
<?php } ?>
			  
				  <?php if(isset($_SESSION['login'])) { ?>				 <a href="?oldal=kilepes" class="gomb">
                     <span id="reg"> <button type="button">Kilépés</button></span>
                  </a><?php } ?>

                </li>
				
         </ul>
         <hr noshade id="vonal">
    </div>
		<?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
    <div id="wrapper">
        <aside id="nav">

        </aside>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</body>
</html>
