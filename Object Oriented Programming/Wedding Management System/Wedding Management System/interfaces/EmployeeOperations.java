package interfaces;
import classes.Employee;

public interface EmployeeOperations       //this is an interface for employee management
{
	public abstract void addEmployee(Employee emp);
	void removeEmployee(int id);
	void showEmployees();
}