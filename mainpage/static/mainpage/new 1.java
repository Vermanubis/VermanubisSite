public abstract class Vehicle
{
	protected Vehicle()
	
	public String name;
	public int numberOfWheels;
	public static int accessCount;
	
	public Vehicle(String name, int numberOfWheels, int accessCount)
	{
		
	}
	
	public calcMilesPerGallon()
	
}

public class Car implements Vehicle
{
	public int calcMilesPerGallon()
	{
		//do stuff
		accessCount++;
		
		return result;
	}
}

public class Truck implements Vehicle

public class Motorcycle implements Vehicle


public static void main(String[] args)
{
		String specifications = //stuff
		Vehicle car = new Car();
		Vehicle truck = new Truck();
		Vehicle motorcycle = new Motorcycle();
		
		List vehicles = new ArrayList<>();
		
		vehicles.add(car);
		vehicles.add(truck);
		vehicles.add(motorcycle);
		
		for(int i = 0; i < vehicles.size(); i++)
		{
			if(vehicles.get(i) == specifications)
				System.out.println(vehicles.get(i).getName() + " " + vehicles.get(i).getWheelCount() + " " + vehicles.get(i).getAccessCount())
			
		}
		
		
}


