package classes;

public class Person 
{
	protected String name;
	protected String phoneNo;
	public Person(){}
	public Person(String name,String phoneNo)
	{
		this.name=name;
		this.phoneNo=phoneNo;
	}

	public void setName(String name)  //to set name
	{
		this.name=name;
	}
	public String getName(){return name;}  //to get name

	public void setPhoneNo(String phoneNo)  //to set phone no
	{
		this.phoneNo=phoneNo;
	}
	public String getPhoneNo(){return phoneNo;}  //to get phone no

}