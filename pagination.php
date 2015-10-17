<?php
	mysql_connect("localhost","root","legolas11") or die("could not connect");
	mysql_select_db("search_test") or die ("could not find db");
	$count_query = mysql_query('SELECT NULL FROM user_infromation');
	$count = mysql_num_rows($count_query);
	
	//pagination starts here. Only numbers must go into page variable
	if (isset ($_GET['page'])){
		//getting rid of numbers or anything you need ^. Replace with
		$page = preg_replace("#[^0-9]#","",$_GET['page']);
	} else {
		$page = 1;
	}
	// showing 10 per page
	$perPage = 10;
	$lastPage = cell($count/$perPage);
	//url number is not lower than 1 and not higher than last page
	if ($page < 1) {
		$page = 1;
	} else if ($page > $lastPage) {
		$page = $lastPage;
	}
	
	//first is number you want to limit from. second is number you want to limit after from
	//e.g. 'LIMIT 70,10'
	$limit = 'LIMIT'.($page-1)*$perPage.",$perPage";
	
	$query = mysql_query('SELECT username FROM user_infromation ORDER BY user_id DESC $limit');
	
	if ($lastPage != 1) {
		if ($page != $lastPage) {
			$next = $page + 1;
			$pagination .= '<a href=""'
		}
	}
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
echo $count;
?>
<body>
</body>
</html>