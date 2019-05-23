<?php
/**
 * Class item
 * The class instance accepts the user id.
 * Without the implementation of working with the database (imagine that
 * the class is already working with the database).
 * class for initializing data ( method init() ) from the database, 
 * changing (magic method __set()) 
 * and saving ( method save() ) in case of a change
 */
final class item{

    private $id;
    private $name;
    private $status;
    // create a variable to determine the initialization of the function call
    private $isCallInit = false ;
    // create a variable to store values ​​from DB
    private $getDataDB;


    public function __construct($id)
    {
        $this->id = (int)$id;
        $this->init();
    }


    private function init()
    {
        //one-time method call
        $isCallInit = $this->isCallInit;
        if (!$isCallInit)
        {
            //get data from db where in
            //$ nameFromDB - is the result of the query field name
            //$ statusFromDB - is the result of the query field status
            $nameFromDB = "данные из DB";
            $statusFromDB = 11964;

            //create an array for storage
            $getDataDB['nameFromDB'] = $nameFromDB;
            $getDataDB['statusFromDB'] = $statusFromDB;
            
			$this->name = (string)$nameFromDB;
            $this->status = (int)$statusFromDB;
            $this->isCallInit = true;

            //put the data in the $getDataDB variable
            $this->getDataDB = $getDataDB;

        }
    }

    public function __get($property)
    {  
        if (property_exists($this, $property))
        {
          try {
              if (!($this->$property))
                  throw new Exception("Error. No data found!");
              else
                  return $this->$property;

          }catch (Exception $e) {
              return $e->getMessage();
          }
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            //check of the entered value for fullness and type of value
            if (strlen(trim(htmlspecialchars($value))))
            {
                try {
                    if ($property === "name")
                    {
                        if (!is_string($value))
                            throw new Exception("Incorrect data entered (correct data type is string).");
                        else
                            $this->$property = (string)$value;
                    }
                    if ($property === "status")
                    {
                        if (!is_int($value))
                            throw new Exception("Incorrect data entered (correct data type is number).");
                        else
                            $this->$property = (int)$value;
                    }
                }catch (Exception $e){
                    echo $e->getMessage();
                }
            }
        }
    }

	 //The method saves the specified NAME and STATUS values ​​in case the object properties have been changed externally.
    public function save()
    {
            $getDataDB = $this->getDataDB;

            //compare values
	if ($getDataDB['nameFromDB'] !== $this->name)
            
            //if the data has been changed, do UPDATE in the database
            $getDataDB['nameFromDB'] = $this->name;

        if ($getDataDB['statusFromDB'] != $this->status)
            
            //if the data has been changed, do UPDATE in the database
            $getDataDB['statusFromDB'] = $this->status;
    }
}


