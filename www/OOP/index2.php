<?php 

class Human
{
	private $name;

	public function setName($name)
	{
		$this->name = $name; // $this verwijst naar het object
	}

	public function getName()
	{
		return $this->name;
	}

}

$idioot = new Human();

$idioot->setName("Idioot");

echo $idioot->getName();
