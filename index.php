<!DOCTYPE html>
<html>
<head>
	<title> Boutique </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	//session_start();


		include 'source_data.php';
	
	if (!isset($_SESSION['panier'])) {
		$_SESSION['panier'] = [];
	}
	$nb_article = sizeof($_SESSION['panier']);


?>

<div id="global">
	<div class="commander">
		<a href="commander.php">Passer la commande</a>
		<?php 
		if (isset($_GET['ajout_ok'])) {
			?>
			<span><b>Ajout au panier effectue avec succes</b></span>
			<?php
		}
		 ?>


	</div>
	<div class="panier">
		<?php
			if ($nb_article == 0) {
				echo "(vide)";
			}
			else{
				echo "($nb_article)";
			}
		?>
		<img src="images/panier.png" width="50">
	</div>
	
	<table  class="tableau_produit">
		<tr>
			<?php
				$list = $_SESSION['list_produit'];
				$cpt_ligne = 0;
				foreach ($list as $prd) {
					if ($cpt_ligne % 3 == 0 && $cpt_ligne != 0) {
						echo "</tr> <tr>";
					}
			?>
			<td align="center">
				<img src="images/<?=$prd['photo']?>" width="200" height='175'>
				<br><?= $prd['nom'] ?>
				<br><?= $prd['prix'] ?>
				<br><a href="ajout_panier.php?id=<?= $prd['id'] ?>">Ajouter au panier</a> 
			</td>
			<?php
				$cpt_ligne++;
				} //fin foreach
			?>

		</tr>
	</table>

</div>

</body>
</html>

