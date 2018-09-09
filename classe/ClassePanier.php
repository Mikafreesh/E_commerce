<?php
class Panier
{	
	private $_BDD;

	function __construct($bdd)
	{
		if(!isset($_SESSION))
			session_start();

		if(!isset($_SESSION['panier']))
			$_SESSION['panier'] = array();

		$this->_BDD = $bdd;
	}

	private function total()
	{
		$total = 0;
		$tab_keys = array_keys($_SESSION['panier']);
		$mes_articles = $this->_BDD->query('SELECT id_article, prix_unitaire FROM article WHERE id_article IN ('.implode(',', $tab_keys).')');
		foreach ($mes_articles as $article)
		{
			$total += $article->prix_unitaire * $_SESSION['panier'][$article->id_article];
		}
		$_SESSION['prix_total'] = $total;
	}

	public function count()
	{
		return array_sum($_SESSION['panier']);
	}

	public function add($article_id)
	{
		if(isset($_SESSION['panier'][$article_id]))
			$_SESSION['panier'][$article_id]++;
		else
			$_SESSION['panier'][$article_id] = 1;

		$this->total();
	}

	public function del($article_id)
	{
		unset($_SESSION['panier'][$article_id]);
		$this->total();
	}

	public function ajoute($article_id)
	{
		$_SESSION['panier'][$article_id]++;
	}

	public function retire($article_id)
	{
		$_SESSION['panier'][$article_id]--;
	}

}
?>