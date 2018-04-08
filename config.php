<$php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'administrator');
   define('DB_PASSWORD', 'H@L01halo');
   define('DB_DATABASE', 'haloGuests');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if (!$db) 
    {
	   die( 'Could not connect: ' . mysql_error());
    }
    @mysql_selectdb(DB_DATABASE) or die( "Unable to open");

?>
