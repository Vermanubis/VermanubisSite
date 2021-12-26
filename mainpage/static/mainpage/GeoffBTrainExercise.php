<?php

/*	
	Train and TrainCar classes up top
	Polymorphism stuff in the middle
	Use case example at the bottom
*/

class Train
{
	private $first_car;
	private $last_car;
	
	function __construct()
	{
		$this->first_car = null;
	}
	
	/*-------------------------------------------*/
	
	function count_cars()
	{
		$next = $this->first_car; //start traversal at first car
		$car_count = 0;
		
		while($next != null) //while not at end of train
		{
			$car_count++;
			$next = $next->get_next(); //move to next car
		}
		
		return $car_count;
	}
	
	/*-------------------------------------------*/
	
	function calculate_weight()
	{
		$next = $this->first_car; //start traversal at first car
		$total_weight = 0;
		
		while($next != null) //while not at end of train
		{
			$total_weight += $next->get_weight();
			$next = $next->get_next(); //move to next car
		}
		
		return $total_weight;
	}	
	
	/*-------------------------------------------*/
	
	function add_first_car($weight)
	{
		if($this->count_cars() < 30) //less than 30 cars in train; add new one
		{
			$new_car = new TrainCar(); //create new train car
			$new_car->set_weight($weight); //set weight
			
			if($this->first_car == null) //empty train
			{
				$new_car->set_next(null);
				$new_car->set_previous(null);
				$this->first_car = $new_car;
				$this->last_car = $new_car;
			}
			
			else //train not empty
			{
				$new_car->set_next($this->first_car); //set former head as new head's next
				$this->first_car->set_previous($new_car); //old puts new -first as previous
				$this->first_car = $new_car; //set new train car as new first
			}
			
		}
		else
		{
			echo "Too many cars! Failed to add new first car";
		}
	}
	
	/*-------------------------------------------*/
	
	function add_last_car($weight)
	{
		if($this->count_cars() < 30) //less than 30 cars in train; add new one
		{
			$new_car = new TrainCar(); //create new train car
			$new_car->set_weight($weight); //set weight
			
			if($this->first_car == null) //empty train
			{
				$new_car->set_next(null);
				$new_car->set_previous(null);
				$this->first_car = $new_car;
				$last_car = $new_car;
			}
			
			else //train not empty
			{
				$new_car->set_previous($this->last_car); //set former last as new last's previous
				$this->last_car->set_next($new_car); //set new last as former last's next
				$this->last_car = $new_car; //set new train car as new last
			}
		}
		else
		{
			echo "Too many cars! Failed to add new last car";
		}
	}
	
	/*-------------------------------------------*/
	
	function remove_first()
	{
		if($this->first_car == null)
		{
			echo "No cars left to remove! Car removal failed";
		}
		else
		{
			$this->first_car = $this->first_car->get_next();
			$this->first_car->set_previous(null);
		}
	}
	
	/*-------------------------------------------*/
	
	function remove_last()
	{
		if($this->first_car == null)
		{
			echo "No cars left to remove! Car removal failed";
		}
		else
		{
			$this->last_car = $this->last_car->get_previous();
			$this->last_car->set_next(null);
		}
	}
}

/*------------------------------------------*/
	
class TrainCar
{
	private $weight;
	private $next;
	private $previous;
	
	function __construct()
	{
	}
	
	function get_weight()
	{
		return $this->weight;
	}
	
	function set_weight($weight)
	{
		$this->weight = $weight;
	}
	
	function get_next()
	{
		return $this->next;
	}
	
	function get_previous()
	{
		return $this->previous;
	}
	
	function set_next($next)
	{
		return $this->next = $next;
	}
	
	function set_previous($previous)
	{
		return $this->previous = $previous;
	}
}

/*-----------Polymorphism stuff--------------*/

class CargoCar extends TrainCar
{
	function do_cargo_car_stuff()
	{
		//do cargo car stuff
	}
}

/*-------------------------------------------*/

class EngineCar extends TrainCar
{
	function do_engine_car_stuff()
	{
		//do engine car stuff
	}
}

/*--------------------Use Case--------------------*/

/*

I could see this Train™ being handy for things that require
bi-directional navigation, like a music player.

*/

function use_case() //use case of Train
{
	$Train = new Train(); //new playlist
	$Train->add_first_car(7); //add song to start of playlist (and set user rating, I guess???)
	$Train->add_first_car(7); //add another song
	$Train->add_last_car(2); //add a song to the end of the playlist
	$Train->remove_last(); //remove that same song!
	$Train->remove_first(); //remove the first one!
	$Train->calculate_weight(); //sum user ratings
	$Train->count_cars(); //count # of songs in the playlist
	$Train->get_previous(); //go to previous song
	$Train->get_next(); //go to next song
}

?>