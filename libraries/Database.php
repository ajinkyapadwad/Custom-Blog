<?php 
	class Database
	{
		public $host = HOST;
		public $user = USER;
		public $pass = PASS;
		public $name = NAME;

		public $link;
		public $error;

		// constructor
		public function __construct()
		{
			// $this->host = $host;
			// $this->user = $user;
			// $this->pass = $pass;
			// $this->name = $name;

			//call connection
			$this->connect();
		}

		// connector

		private function connect()
		{
			$this->link = new mysqli($this->host,$this->user,$this->pass,$this->name );
			if(!$this->link)
			{
				$this->error = "Connection Failed !".$this->link->connect_error;
				return false;
			}
		}

		//select

		public function select($query)
		{
			$result = $this->link->query($query) or die ($this->error.__LINE__);
			if($result->num_rows>0)
			{
				return $result;
			}
			else
			{
				return false;
			}
		}
	
		//insert
		public function insert($query)
		{
			$insert_row = $this->link->query($query) or die ($this->error.__LINE__);
			if($insert_row)
			{
				header("Location : index.php?msg=".urlencode('Added Successfully!'));
			}
		}
	}