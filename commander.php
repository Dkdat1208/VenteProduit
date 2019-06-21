
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Commande</title>
 </head>
 <body>
 	<?php 
	//differnce entre include et include_once
include_once("source_data.php");
if (sizeof($_SESSION['panier'])==0) {
	header("location:index.phtml");
}

 ?>
 <h3 align="center">FACTURE</h3>
 <table border="1" align="center">
 	<tr>
 		<th>Designation</th>
 		<th>Prix</th>
 		<th>Quantite</th>
 		<th>Montant</th>
 	</tr>
 	<?php
 	$total=0;
 	foreach ($_SESSION['panier'] as $pp) {
 		
 		$i=0;
 		while ($i<sizeof($list_produit) && $list_produit[$i]['id']!=$pp['id']) {
 			$i++;
 		}
 		if ($i<sizeof($list_produit)) {
 			$produit=$list_produit[$i];
 			$montant=$produit['prix']*$pp['qte'];
 			$total+=$montant;
 			?>
 			<tr>
 				<td><?=$produit['nom']?></td>
 				<td><?=$produit['prix']?></td>
 				<td><?=$pp['qte']?></td>
 				<td><?=$montant?></td>
 			</tr>
 			<?php 
 		}
 	}
 	?>
 	<tr>
 		<td>total</td>
 		

 		<td colspan="3" align="right"><?=$total?></td>
 	</tr>
 </table>
 
 </body>
 </html>