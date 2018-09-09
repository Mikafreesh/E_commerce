<?php
if(isset($_GET['id_article']) && !empty($_GET['id_article']) && is_int($_GET['id_article']))
{
require '../classe/include_all_classe.php';

$id_article = htmlspecialchars($_GET['id_article']);
$id_article = intval($id_article);
$article = new Article($BDD, array($id_article));
include '../views/article.view.php';
}
else
	header('Location: acceuil.php');
?>