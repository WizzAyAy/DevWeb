<?php
use PHPUnit\Framework\TestCase;

final class ManagerTest extends TestCase {
	private $manager;
	
	public function setUp() {
		$this->manager = new Manager(0, "John", 2000.0, 40);
	}

	public function tearDown() {
		unset($this->manager);
	}
	
	public function testSetId() {
		$id = 10;
		$this->manager->setId($id);
		$this->assertEquals($this->manager->getId(),10);
	}
	
	public function testSetName() {
		$name = "Alfred";
		$this->manager->setName($name);
		$this->assertEquals($this->manager->getName(),$name);
	}
	
	public function testSetSalary() {
		$salary = 30;
		$this->manager->setSalary($salary);
		$this->assertEquals($this->manager->getSalary(),$salary);
	}
	
	// TODO : ajouter la méthode testSetAge
	
	public function testAddEmployee() {
		$employees[]= new Employee(2, "Pif", 10, 10);
		$employees[] = new Employee(0, "Paf", 100, 100);
		$employees[] = new Employee(1, "Pouf", 5, 50);
		$this->manager->add(2);
		$this->manager->add(0);
		$this->manager->add(1);
		// TODO : compléter avec assertEquals
	}
}
?>
