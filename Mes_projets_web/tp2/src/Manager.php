<?php
	require_once('IManager.php');
	require_once('Employee.php');
	
	class Manager extends employee implements IManager{
		private $tabSubId = [];
	
	public function __construct(int $id, string $name,float $salary, int $age){
		employee::__construct($id,  $name, $salary,  $age);					
	}  
    public function add(int $employeeId){
		array_push($this->tabSubId, $employeeId);
	}
    
    public function getArrEmployeesId() : array{
		return $this->tabSubId;
	}
    
    public function __toString(): string{
			return "manager: id=".$this->getId()." name=".$this->getName()." salary=".$this->getSalary()." age=".$this->getAge()."<br>";
		}
	}
	
?>
