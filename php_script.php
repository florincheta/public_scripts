<?php 
interface CarInterface(){
    public function getCarFromDB();
    public function storeCar($name , $model);
}

class Car implements CarInterface{
  //this class we can use like a model for a car
  
  public id;  
  
  public function __construct($id = null) {
    if(!null($id)){
		$this->id = $id   
		$this->getCarFromDB();
	}
  }
  public function getCarFromDB(){
	 $retrun_array = null
     $sql = "SELECT * FROM car_list WHERE id = ".$this->id;
	 //... after execute query result an array for return.
	 return $return_array;
  };
  public function storeCar($car_list_id){
	try {
	  $sql = "INSERT INTO car_sales (car_id) VALUES (".$car_list_id.");
		SELECT LAST_INSERT_ID();";
		//... after execute query result LAST_INSERT_ID and we set $this->id = $row[0]->LAST_INSERT_ID;
	   return true;
	}catch(Exception $e) {
	  return false;
	}
  }
}

class RegisterOrder(){
	public function saveOrder($car_list_id){
		$new_order = new Car();
		if($new_order->storeCar(2)){
			return $new_order->getCarFromDB();
		}else{
			return [];
		}
	}
}