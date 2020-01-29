<?php
	require_once('IEmployee.php');
	class employee implements IEmployee {
		
		private  $id;
		private $salary;
		private $age;
		public $name;
		
		public function __construct(int $idc, string $namec, float $salaryc, int $agec){
			$this->id = $idc;
			$this->salary = $salaryc;
			$this->age = $agec;
			$this->name = $namec;
		}
		
		public function getId(): int{
			return $this->id;
		}
		public function getSalary(): float{
			return $this->salary;
		}
		public function getAge(): int{
			return $this->age;
		}
		public function getName(): string{
			return $this->name;
		}
		
		public function setId(int $tmp){
			$this->id = $tmp;
		}
		public function setSalary(float $tmp){
			$this->salary = $tmp;
		}
		public function setAge(int $tmp){
			$this->age = $tmp;
		}
		public function setName(string $tmp){
			$this->name = $tmp;
		}
		
		public function __toString(): string{
			return "employee: id=".$this->id." name=".$this->name." salary=".$this->salary." age=".$this->age."<br>";
		}		
	}
	
	function afficherEmployee (employee $e){
		echo $e;
	}
	
	function augmenterEmployee($e){
		if($e instanceof employee){
		$newSalay = $e->getSalary() * 1.05;
		$e->setSalary($newSalay);
		}
		else 
			echo "ceci c'est pas un employee <br>";
	}
	
	function comparator (employee $e1, employee $e2){
		return $e1->getSalary() < $e2->getSalary();
	}
	
	
	
	
	
?>






















































