<?php 
/*This example will demonstrate a simple use of interface*/
interface Logger{

	public function execute($message);

}

/*	When you see more than one of your class has same functionality doing in different way
	Liek here both LogToFile and LogToDatabase is logging info (either on file/db).
	It's a sign that you need to use an interface.

*/
class LogToFile implements Logger{

	public function execute($message){
			//log to a file
			var_dump('log the message to a file:'. $message);
	}
}


class LogToDatabase implements Logger{

	public function execute($message){
			//log to a database
			var_dump('log the message to a database: '.$message);
	}
}


class UsersController{

	protected $logger;

	/*See, to change the logging functionality from database to file you don't even need to touch this class*/
	public function __construct(Logger $logger){

		$this->logger = $logger;
	}

	public function show(){

		$user = "Neloy Ahmed";

		$this->logger->execute($user);
	}
}

/*	See, to change the logging functionality from database to file you just need to create a new instace of UsersController
	with injecting LogToFile class object here in the following line.
	
*/
$controller = new UsersController(new LogToDatabase);

$controller->show();

?>