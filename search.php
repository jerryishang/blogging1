<?php
	// servername, username, password
	mysql_connect("localhost","root","legolas11") or die("could not connect");
	// finds database
	mysql_select_db("search_test") or die ("could not find db");
	$output = '';
	//collect
	//check if post is set
	//name of first field in form
	if(isset($_POST['searchValue'])) {
		//search query
		$searchq = $_POST['searchValue'];
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
	echo($output);
?>
