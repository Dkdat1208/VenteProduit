<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajout panier</title>
</head>
<body>
<?php
include_once ("source_data.php");
if (isset($_GET ['id']))
{
//explication boucle while
	$i = 0;
	$id = $_GET['id'];
	while ($i < sizeof($list_produit) && $list_produit[$i]['id'] != $id) 
	{
		$i ++ ;
	}	
	//ici aussi
	if ($list_produit[$i]['id'] == $id) 
	{
		$produit = $list_produit[$i];
		

?>

<form method="POST" action="">
	<table>
		<tr>
			<td><img src="images/<?=$produit['photo']?>" width="200"> <p><?=$produit['nom']?></p><p><?=$produit['prix'	]?></p>
			</td>
			<td>
				<div>Quantité</div>
				<input type="number" min="1" max="100" name="qte" value="1">
				<div><input type="submit" name="btn_valider" value="Valider"></div>
			</td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?=$id?>">
	
</form>

<?php
}
}
?>
<?php 
if (isset($_POST['btn_valider'])) {
	$id=$_POST['id'];
	$qte=$_POST['qte'];
	$_SESSION['panier'][]=['id'=>$id, 'qte'=>$qte];
	header("location:index.php?ajout_ok=1");
}

 ?>
 </body>
</html>

