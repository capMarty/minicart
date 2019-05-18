<?php 

final class item{

    private $id;
    private $name;
    private $status;
    private $changed;
    // create a variable to determine the initialization of the function call
    private $isCallInit = false ;
    // create a variable to store values from DB
    private $getDataDB;


    /**
     * item constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = (int)$id;
        $this->init();
    }

    /**
     *
     */
    private function init()
    {

        //one-time method call

        $isCallInit = $this->isCallInit;
        if (!$isCallInit) {

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


    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {  
        if (property_exists($this, $property)) {
//
            return $this->$property;

        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {

            //check of the entered value for fullness and type of value
            if ($value != '')

                if (is_string($value) && $property === 'name')
                    $this->$property = (string)$value;

                if (is_int($value) && $property === 'status')
                $this->$property = (int)$value;


        }
    }

	 //The method saves the specified NAME and STATUS values in case the object properties have been changed externally.
    public function save()
    {
            $getDataDB = $this->getDataDB;

            //compare values
		if ($getDataDB['nameFromDB'] != $this->name)
            
            		//if the data has been changed, do UPDATE in the database
            		$getDataDB['nameFromDB'] = $this->name;

        	if ($getDataDB['statusFromDB'] != $this->status)
            
            		//if the data has been changed, do UPDATE in the database
           		 $getDataDB['statusFromDB'] = $this->status;
    }


}

	




