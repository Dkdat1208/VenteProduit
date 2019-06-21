<?php
session_start();
		$list_produit = [
		['id'=>1, 'nom'=>'Iphone', 'prix'=> 300000, 'photo'=> 'img1.jpg'],
		['id'=>2, 'nom'=>'Imprimante', 'prix'=> 80000, 'photo'=> 'img2.jpeg'],
		['id'=>3, 'nom'=>'Montre', 'prix'=> 35000, 'photo'=> 'img3.jpg'],
		['id'=>4, 'nom'=>'Casque B', 'prix'=> 15000, 'photo'=> 'img4.jpg'],
		['id'=>5, 'nom'=>'Souris', 'prix'=> 5000, 'photo'=> 'img5.jpg'],
		['id'=>6, 'nom'=>'Casque Fil', 'prix'=> 20000 , 'photo'=> 'img6.jpg'],
		['id'=>7, 'nom'=>'Ordinateur por', 'prix'=> 250000, 'photo'=> 'img7.jpg'],
		['id'=>8, 'nom'=>'PC', 'prix'=> 150000, 'photo'=> 'img8.jpg'],
		['id'=>9, 'nom'=>'Routeur', 'prix'=> 65000 , 'photo'=> 'img9.jpg'],
	];

	$_SESSION['list_produit'] = $list_produit





?>
