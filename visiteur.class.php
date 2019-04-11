<?php
/* pas besoin de html ici car cette page ne contient que du PHP et a vocation a etre inserré dans dautres pages */

Class Visiteur
{
	private $prenom; 

	public function set_prenom($nouveau_prenom)
		{
			$this->prenom = $nouveau_prenom;
		}

	Public function get_prenom()
		{
			return $this->prenom;
		} 
}