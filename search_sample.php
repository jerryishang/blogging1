<?php
	// servername, username, password
	mysql_connect("localhost","root","legolas11") or die("could not connect");
	// finds database
	mysql_select_db("search_test") or die ("could not find db");
	$output = '';
	//collect
	//check if post is set
	//name of first field in form
	if(isset($_POST['search'])) {
		//search query
		$searchq = $_POST['search'];
		// replacing things of not first argument to second argument for third argument variable
		//i for capital as well
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		$query = mysql_query("SELECT * FROM user_infromation WHERE username LIKE '%$searchq%'") or die ("could not search!");
		$count = mysql_num_rows($query);
		if ($count == 0) {
			$output == 'There was no search results!';			
		} else {
			while ($row = mysql_fetch_array($query)) {
				$uname = $row['username'];
				$identity = $row['id'];
				//. is concatenation
				$output .= '<div>'.$identity.' '.$uname.'</div>';
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search</title>
</head>

<body>
	<?php 
	print("$output");
	?>
</body>
</html>