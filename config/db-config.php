<?php 
	include_once 'env.php';

	class dbc
	{
		
		private $host = host;
        private $user = user;
        private $password = password;
        private $database = database;

        /**   function to open database connection  **/
	    protected function open()
		{
			$con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
			if (mysqli_connect_errno())
			{
			    return "System failed to connect to server";
			}else{
				return $con;
			}
		}

		/**   function to close database connection  **/
		public function close($con)
		{
			mysqli_close($con);
		}

		/**   function to query database  **/
		public function query($query)
		{
			$con = $this->open();
			$q = mysqli_query($con,$query);
			if ($q == true) {
				return $q;
			}else{
				return mysqli_error($con);
			}
			
			$this->close($con);
		}

		/**   function to get query result array  **/
		public function getArray($query)
		{
				$q = mysqli_fetch_array($query);
				return $q;
		}

		/**   function to get num_rows  **/
		public function getRows($query)
		{
				$q = mysqli_num_rows($query);
				return $q;
		}

		/** function to check duplicate email address on registration **/
		public function checkDuplicate($email){
			$q = $this->getRows($this->query("SELECT * FROM user WHERE email='$email' "));
			return $q;
		}

		/**   function to treat GET values  **/
		public function getty($txt)
		{
			$con = $this->open();
			$txt=mysqli_real_escape_string($con,htmlentities(trim($_GET[$txt])));
			$this->close($con);
			return $txt;
		}

		/**   function to treat POST values  **/
		public function posty($txt)
		{
			$con = $this->open();
			$txt=mysqli_real_escape_string($con,htmlentities(trim($_POST[$txt])));
			$this->close($con);
			return $txt;
		}
	}
 ?>