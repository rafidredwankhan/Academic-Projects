package fileio;
import java.io.*;



public class EmployeeFileReadWrite    //this class is to write and read from employee
{
	public File file;
	public FileWriter writer;
	public FileReader reader;
	public BufferedReader bfr;

	public void writeInFile(String s)       //this method is to write in file (EmployeeHistory.txt)
	{
		try
		{
			file=new File("EmployeeHistory.txt");
			file.createNewFile();
			writer=new FileWriter(file,true);
			writer.write(s+"\r"+"\n");
			writer.flush();
			writer.close();
		}
		catch(IOException ioe)
		{
			System.out.println("IO Exception Occurred");
		}}

		public void readFromFile()          //this method is to read from file
		{
			try
			{
				reader=new FileReader(file);
				bfr=new BufferedReader(reader);
				String text=" ",temp;

				while((temp=bfr.readLine())!=null)
				{
					text=text+temp+"\n"+"\r";
				}
				System.out.print(text);
				reader.close();
			}
			catch(IOException ioe)
			{
				System.out.print("IO Exception Occurred");
			}
		}
	
}