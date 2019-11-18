<?php 

function getProducts($pdo){
	$sql = "SELECT *  FROM cadastro_produtos ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $ids) {
	$sql = "SELECT * FROM cadastro_produtos WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsOfPharma($pdo, $farmaId){
	$sql = "SELECT *  FROM cadastro_produtos WHERE farmacia = ". $farmaId;
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}