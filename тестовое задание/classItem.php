<?php 

class item{

	private $id;
	private $name;
	private $status;
	private $changed;


	public function __construct($id)
	{
		$this->id = (int)$id; 
	}

	private function init()
	{

		// одноразовый вызов метода 
		static $isCallInit = false;
		$this->isCallInit = $isCallInit;

		if (!$isCallInit) {
 			// получаем данные из БД, где в
 			// $nameFromDB - находится результат запроса поля name
 			// $statusFromDB- находится результат запроса поля status
			$this->name = (string)$nameFromDB;
			$this->status = (int)$statusFromDB;
			



			$isCallInit = true;	
		}
	}

	public function __get($property)
	{
		if (property_exists($this, $property)) {

			$this->init();
			echo $this->$property;

		}	

	}

	public function __set($property, $value)
	{
		if (property_exists($this, $property)) {

			$this->init();
			// проверка вводимого значения на заполненность и тип значения
			if ( trim($value) ) 

				switch ($property) {
					case 'name':
						$this->$property = (string)$value;
					break;
					case 'status':
						$this->$property = (int)$value;
					break;
				}

			}


	}
	// Метод сохраняет установленные значения name и status в случае, если свойства объекта были изменены извне
	public function save()
	{
			$this->init();
			// сравниваем значение
			if ($nameFromDB != $this->name)
				 // если данные были изменены, обновляем, и делаем UPDATE в БД
				$nameFromDB = $this->name;

			if ($statusFromDB != $this->status) 
				$statusFromDB = $this->status;
			
	}
}

	




