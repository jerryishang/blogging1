<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Me</title>
<link href="style/styleAbout.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/slide.js"></script>
<script src="js/search.js"></script>
</head>

<body>
<div class="container">
  <div class="header">
    <div class="title">About</div>
  	
    <div class="navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="resumes.html">Resume</a></li>
        <li><a href="about.php" class="current">About</a></li>
        <li>Contact
       	  <ul class="subnav">
            	<li><a href="#">Information</a></li>
                <li><a href="contact.html">Message</a></li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="middle">
    <div id="slider">
    	<?php
        	$imageDisplay = "";
			$images = scandir("images/about/");
			$ignore = array(".","..");
			$i = '1';
			foreach($images as $file) {
				if (!in_array($file,$ignore)){
				$imageDisplay .='<img id="1" src="images/about/'.$file.'" border="0" />';
				$i++;
				}
			}
			echo($imageDisplay);
            
        ?>
        <!--img id="1" src="images/about/image1.jpg" />
        <img id="2" src="images/about/image2.jpg" />
        <img id="3" src="images/about/image3.jpg" />
        <img id="4" src="images/about/image4.jpg" />
        <img id="5" src="images/about/image5.jpg" /-->
        
        
    </div>
    	<!--stops it going to # symbol-->
    	<a href="#" class="left" onclick="previous(); return false;">previous</a>
		<a href="#" class="right" onclick="next(); return false;">next</a>
  </div>
  <div class="footer">
  	<form action="search_sample.php" method="post"><!--placeholder is what appears in box-->
    	<input type="text" name="search" class="custom" placeholder="find users..." onkeydown="searchq();"/>
        <input type="submit" value="-->" />
    </form>
  </div>
  
</div><!--container-->
<div id="output"></div>
</div>
</body>
</html>
