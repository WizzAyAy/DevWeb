<?php
	require_once('Manager.php');
	require_once('Employee.php');
	
	
	
	class team{
		private $ManaTab;
		private $EmplTab;
		
		public function __construct(){
			$this->EmplTab = [];
			$this->ManaTab = [];
		}
		
		public function addEmployee(employee $e){
			array_push($this->EmplTab, $e);
		}
		
		public function addManager(Manager $m){
			array_push($this->ManaTab, $m);
		}
		
		public function afficher(){
			echo "<h1>Les employés</h1>";
			$this->afficherEmpl();
			echo "<h1>Les Mana</h1>";
			$this->afficherMana();
		}
		
		public function match_with_int (int $n){
			$tmp = [];
			foreach($this->EmplTab as $e){
				if($e->getId() == $n){
					array_push($tmp, $e);
				}
			}
			return $tmp;
		}
		
		public function afficherMana(){	
			foreach($this->ManaTab as $mana){
				echo $mana;
				foreach($mana->getArrEmployeesId() as $i){
					$tmp = $this->match_with_int($i);
					foreach($tmp as $e){
						echo "->" . $e ;
					}
				
				}
					echo "<br>";
			}
		}
		
		public function afficherEmpl(){
			array_map('afficherEmployee',$this->EmplTab); 
		}
	}
	

	
	$t = new team();
	
	$e1 =  new employee(1110,'guiguie',1000,8);
	$e2 =  new employee(1111,'christ',2000,36);
	$e3 =  new employee(1112,'marie',3000,50);
	
	$m1 =  new Manager(3000,'jerome',5000,60);
	$m1->add(1110);
	$m1->add(1111);
	
	$m2 =  new Manager(3001,'vanness',5000,17);
	$m2->add(1112);
	$m2->add(1111);
	
	$t->addEmployee($e1);
	$t->addEmployee($e2);
	$t->addEmployee($e3);
	
	$t->addManager($m1);
	$t->addManager($m2);
	
	$t->afficher();
?>
