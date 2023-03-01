package classes;
public class Package2
{
	public String decoration = "Medium-Low Range Decoration(Including Flower)";
	public String foodItem = "Polao,Roast,Beef,Doi,Sprite/Coke/Fanta";
	public String venue = "Small---Capacity = 400 People";
	
	public int package2Cost = 120000;      //cost of package 2
	public Package2(){}
	public void showPackageInfo(){
		System.out.println("\t\t\tDecoration = "+decoration);
		System.out.println("\t\t\tFood Item = "+foodItem);
		System.out.println("\t\t\tVenue = "+venue);
		System.out.println("\t\t\tTotal Cost : "+package2Cost);
		System.out.println(" ");
	}
}