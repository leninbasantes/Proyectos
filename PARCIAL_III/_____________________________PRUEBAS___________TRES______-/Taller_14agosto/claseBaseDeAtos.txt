<?php
 
class conexion
{

  var $DB_USER='admin';
  var $DB_PASS='admin';
  var $DB_HOST='localhost';
  var $DB_NAME='programacionweb';
   
  function get_dbuser()
  {
	return $this->DB_USER;
 }
  function get_dbpass()
  {
	return $this->DB_PASS;
	}
  function get_dbhost()
  {
	return $this->DB_HOST;
	}
  function get_dbname()
  {
	return $this->DB_NAME;
	}

}

?>