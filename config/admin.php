<?php
	include_once ('env.php');
	include_once ('db-config.php');
	/**
	 * 
	 */
	class admin extends dbc
	{

        /** function to run q query **/
        public function runQuery($data)
        {
            $result = $this->query($data);
            if ($this->getRows($result) > 0) {
                $row = $this->getArray($result);
                return $row;
            }
            else{
                return 'false';
            }
        }

         /** function to query the database **/
        public function siteQuery($query)
        {
            $ins = $this->query($query);
            if ($ins == true) {
                return $ins;
            }else{
                return $ins;
            }
        }

        /** function to login a user **/
		public function userLogin($data)
		{
			$result = $this->query($data);
			if ($this->getRows($result) > 0) {
				$row = $this->getArray($result);
				return $row;
			}
			else{
				return 'false';
			}
		}
		
        /** function to check for duplicate email on registeration **/
        public function checkUserDuplicate($email){
            $q = $this->getRows($this->query("SELECT * FROM user WHERE email='$email' "));
            return $q;
        }

         /** function to get users info with id **/
        public function getUserInfo($query){
            $row = $this->getArray($this->query($query));
            $obj = new stdClass();
            $obj->username   = $row['username'];
            $obj->email      = $row['email'];
            $obj->unique_id  = $row['unique_id'];
            return $obj;
        }

	    /** function to logout a user **/
		public function logout(){
			// remove all session variables
			session_unset();
			// destroy the session
			session_destroy(); 
		}
	}

?>