
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
/* html body tag style */
body {    
	margin: 0px;    
	padding: 0px;
}
  
#outer-container 
{    
	width: 990px;    
	margin: 0 auto;
}
/* footer CSS Style Rule */
#header {    
	width: 990px;    
	height: 120px;   
	background-color: #66CC33;
}
/* footer CSS Style Rule */
#footer {    
	width: 990px;    
	background-color: #339933;
}
    
#content-container {   
	width: 626px;   

	height: 400px;    
	background-color: #FFFFCC; */   
	margin: 2px 0px 2px 0px;    
	float: left;
}
   
#left-sidebar 
{    
	width: 180px;
	height: 400px;    
	background-color: #FFFF99;    
	margin: 2px 2px 2px 0px;    
	float: left;
}
     
#right-sidebar
{
	width: 180px;
	height: 400px;
	background-color: #FFFF99;
	margin: 2px 0px 2px 2px;
	float: left;
}

#top-Nav {    
	width: 990px; 
	height:40px;   
	background-color: #669933;    
	margin: 2px 0px 0px 0px;
}

#top-Nav  A{    
	text-decoration:none;
	color:#FFFFFF;
}
</style>
</head>

<body>


<div id="outer-container">
    <div id="header">
      <h1>{ Banner }    </h1>
    </div>
    
    <div style="clear: both"></div>
    
    <div id="top-Nav">
         
    </div>
    
    <div style="clear: both"> </div>

    <div id="left-sidebar">
      <p><a href="?view=bai210">Bài 2-10</a></p>
      <p><a href="?view=bai211">Bài 2-11</a></p>
      <p><a href="?view=bai215">Bài 2-15</a></p>
      <p><a href="?view=bai216">Bài 2-16</a></p>
      <p><a href="?view=giohang">Giỏ hàng</a> <br/>
      </p>
    </div>
    
    <div id="content-container">
    <?php 
		$view = isset($_REQUEST["view"]) ? $_REQUEST["view"] : "" ; 
		switch($view)
		{
			case "bai210":
				include_once("Bai2-10.php");
				break;
			case "bai211":
				include_once("Bai2-11.php");
				break;
			case "bai215":
				include_once("Bai2-15.php");
				break;
			case "bai216":
				include_once("Bai2-16.php");
				break;
			case "giohang":
				include_once("../MANG/MangHaiChieu.php");
				break;
			default:
				echo "HELLO";
		}		
	?>
    </div>
    
    <div id="right-sidebar">
      <h1>{ Right }    </h1>
    </div>
	    
    <div style="clear: both">
    </div>
    
    <div id="footer">
        <h1>{ Footer }</h1>
    </div>    
</div>

</body>
</html>
