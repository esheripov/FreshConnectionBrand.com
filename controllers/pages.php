<?php
session_start(); 
class Pages extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('users_model');
	}
	// Be default the view function goes to home.php
	public function view($page = 'index')
	{
		if($page == 'home') $page = 'index'; 
		
		$data['base'] = $this->config->item('base_url');
		if ( ! file_exists('application/views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			
			print($page); 
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view($page, $data);
	}
	public function home()
	{
		$data['base'] = $this->config->item('base_url');
		$this->load->view('index', $data);
	}
	public function shop()
	{
		$data['base'] = $this->config->item('base_url');
		$this->load->view('shop', $data);
	}
	public function blog()
	{
		$data['base'] = $this->config->item('base_url');
		$this->load->view('blog', $data);	
	}
	public function adminLogin()
	{
		$data['base'] = $this->config->item('base_url');
		$hostname = "freshconnection.db.8641795.hostedresource.com"; 
		$username = "freshconnection";
		$password = "ABc20088";  
		$con = mysql_connect($hostname,$username,$password) or die(mysql_error());
		mysql_select_db("freshconnection", $con);
					 
		$qString = sprintf("SELECT * FROM USERS 
			WHERE USERNAME ='%s' AND PASSWORD ='%s'",
			mysql_real_escape_string($_GET['username']), 
			mysql_real_escape_string($_GET['password']));
		$result = mysql_query($qString);
		
		$ip = @$REMOTE_ADDR; 
		if(!$ip) $ip = $_SERVER['REMOTE_ADDR'];
				
		$row = mysql_fetch_assoc($result);
	
		if($row["PERMISSION_ID"] == 1)
		{
			$sql = "INSERT INTO freshconnection.IP_DEMO_HISTORY (IP_DEMO_HISTORY_ID, IP_ADDRESS) VALUES (NULL, '".$ip."');"; 
			mysql_query($sql);
			$_SESSION['DEMO'] = 1; $_GET['username'] = "NULL"; $_GET['password'] = "NULL"; 
			$_SESSION['start'] = time(); // taking now logged in time
			$_SESSION['expire'] = $_SESSION['start'] + (10 * 60) ;
			$this->load->view('index', $data);
		}
		else if($row["PERMISSION_ID"] == 2)
		{
			$sql = "INSERT INTO freshconnection.IP_DEMO_HISTORY (IP_DEMO_HISTORY_ID, IP_ADDRESS) VALUES (NULL, '".$ip."');"; 
			mysql_query($sql);
			$_SESSION['DEMO'] = 1; $_GET['username'] = "NULL"; $_GET['password'] = "NULL"; 
			$_SESSION['start'] = time(); // taking now logged in time
			$_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
			$this->load->view('index', $data);
		}
		else if($_GET['username'] == NULL || $_GET['password'] == NULL)
		{
			session_unset();
			session_destroy();
			$_SESSION["DEMO_LOGIN"] = 2;
			?> <script> window.location = 'demoLogin'; </script> <?php
		}
		else
		{
			session_unset();
			session_destroy();
			$_SESSION["DEMO_LOGIN"] = 1;
			?> <script> window.location = 'demoLogin'; </script> <?php
		}
	}
	
}