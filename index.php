<?php include_once(  "./config/data.php"); 
 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
    <head>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <meta name="KEYWORDS" content="">
        <meta name="DESCRIPTION" content="">
        <meta name="VERSION" content="">
        <link href="" rel="shortcut icon" type="image/x-icon">
        <title></title>
    </head>
    <frameset rows='100%, *' frameborder=no framespacing=0 border=0>
        <frame src="<?= $Settings['Url'] ?>" name=mainwindow frameborder=no framespacing=0 marginheight=0 marginwidth=0></frame>
    </frameset>
    <noframes>
        <h2>Your browser does not support frames. We recommend upgrading your browser.</h2><br><br>
        <center>Click <a href="<?= $Settings['Url'] ?>" >here</a> to enter the site.</center>
    </noframes>
</html>