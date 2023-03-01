package classes;

public class Client extends Person //client class extends person class
{
	public String email;
	public String clientNId;

	public Client(){}
	public Client(String name,String phoneNo,String email,String clientNId)
	{
		super(name,phoneNo);
		this.email=email;
		this.clientNId=clientNId;
	}

	public void setEmail(String email)   //to set email
	{
		this.email=email;
	}
	public String getEmail(){return email;} //to get email

	public void setClientNId(String clientNId)  //to set client id
	{
		this.clientNId=clientNId;
	}
	public String getClientNId(){return clientNId;} //to get client id

	public void clientDetails()          //This method is to view client details
	{
		System.out.println("\n\t\t\tClient Name : "+getName());
		System.out.println("\t\t\tClient Phone Number : "+getPhoneNo());
		System.out.println("\t\t\tClient Email : "+getEmail());
		System.out.println("\t\t\tCLient NID : "+getClientNId());
	}
}