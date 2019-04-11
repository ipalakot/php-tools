<?php


/*
class info
	{
		//Propriété statique
		public static $bourse="Bourse de Paris";
		//Méthodes statiques
		public static function getheure() {
			$heure=date("h : m : s");
			return $heure;
		}
		public static function afficheinfo() {
			$texte=info::$bourse.", il est ".self::getheure();
			return $texte;
		}
	}
		echo info::$bourse,"<br />";
		echo info::getheure(),"<br />";
		echo info::afficheinfo(),"<hr />";
	//Création d'un objet info
		$objet=new info(); 
		$objet->afficheinfo(New York);
		echo "\$objet->bourse : ",$objet->bourse,"<hr />";
		echo "\$objet->getheure() : ",$objet->getheure(),"<br />";
		echo "\$objet->afficheinfo() : ",$objet->afficheinfo(),"<br />";*/



// La classe action munie d’un constructeur et d’un destructeur
/*
	class action
	{
		private $propnom;
		private $propcours;
		protected $propbourse;
		
		function __construct($nom,$cours,$bourse="Paris") 
			{
				$this->propnom = $nom; 
				$this->propcours = $cours;	
				$this->propbourse = $bourse;
			}
		function __destruct()
			{
				echo "L'action $this->propnom n'existe plus!<br />"; 
			}
	}
	//Création d'objets
		$alcotel = new action("Alcotel",10.21);
		$bouch = new action("Bouch",9.11,"New York"); 
		$bim = new action("BIM",34.50,"New York"); 
		$ref=&$bim;

		var_dump($alcotel); 
		echo "<hr />";
		unset($alcotel); 
		unset($bim); 

		echo "<hr /><h4> FIN du script </h4><hr />"; */



// 9-10. Déréférencement de méthodes
/*		
		class varchar
			{
				private $chaine;
				function __construct($a)
				{
					$this->chaine= (string)$a;
				}

				function add($addch)
				{
					$this->chaine.=$addch;	
					return $this;
				}
				function getch()
				{
					return $this->chaine;
				}
			}
			
			//Création d'objet
			$texte=new varchar("Apache "); 
			echo $texte->getch(),"<hr />"; 
			echo $texte->add( " PHP 5 ")->getch(),"<hr />"; 
			echo $texte->add(" MySQL ")->add(" SQLite ")->getch(),"<hr />";
*/

//	9-11. Ajout dynamique d’une propriété
/*
		class action
			{
				public $propnom;
				public $propcours;
				public $propbourse;
				function __construct($nom,$cours,$bourse)
					{
						$this->propnom=$nom;
						$this->propcours=$cours;
						$this->propbourse=$bourse;
						}
			}
			
				$bim = new action("BIM",9.45,"New York");
				var_dump($bim); 	
				$bim->date="2001";
				echo "<hr />";
				var_dump($bim); 
				echo "<hr />";
				echo "Propriété date : ",$bim->date;
*/

// 9-12. Création de classes enfants

			//Classe valeur
			class valeur 
			{
				protected $nom; 
				protected $prix;	
				function __construct($nom,$prix) 
					{
						$this->nom=$nom;
						$this->prix=$prix;
					}
				protected function getinfo() 
					{
						$info="<h4>Le prix de $this->nom est de $this->prix </h4>";
						return $info;
					}
			}				
			//Classe action
			class action extends valeur 
				{
					public $bourse; 
					function __construct($nom,$prix,$bourse="Paris")
					{
						parent::__construct($nom,$prix); 
						$this->bourse=$bourse;
						}
					public function getinfo()

					{
					$info="<h3>Action $this->nom cotée à la bourse de $this->bourse </h3>";
					$info.=parent::getinfo();
					return $info;
					}
				}

				//Classe emprunt
				class emprunt extends valeur
					{
						private $taux; 
						private $fin; 

						function __construct($nom,$prix,$taux,$fin) 
							{
								parent::__construct($nom,$prix); 
								$this->taux=$taux;
								$this->fin=mktime(24,0,0,12,31,$fin);
							}
						public function getinfo()
							{
								$reste=round(($this->fin->time()) /86400);
								$info="<h3>Emprunt $this->nom au taux de $this->taux % </h3>";
								$info.=parent::getinfo();
								$info.="<h4>Echéance : dans $reste jours</h4>";
								return $info;
							}
					}
		
				//Création d'objets
						$action1 = new action("Alcotel",9.76); 
						echo $action1->getinfo();
						$action2 = new action("BMI",23.75,"New York");
						echo $action2->getinfo() ;
						$emprunt = new emprunt("EdF",1000,5.5,2012);
						echo $emprunt->getinfo();
		?>

