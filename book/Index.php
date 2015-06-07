<?php 
 	session_start(); 
	
	//kiểm xem người đã đăng nhập chưa. Nếu chưa(tức sseion chưa tồn tại), điều hướng người dùng về trang đăng nhập
	if(! isset($_SESSION["tendangnhap"]))
		header("location:login.php");
	
	include_once("KETNOI/ketnoi.php");
?>
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
      <?php //include_once("MENUTRAI/MH_CHUDE.php"); ?>
     
    </div>  
    <div id="content-container">
        <?php 
				echo "<h1>Chào ".$_SESSION["tendangnhap"]."</h1>";
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
