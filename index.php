<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vote</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  </head>
<body style="background-color:#181819;">
    <header class="masthead">
      <div class="container text-center my-auto">
<font color="white"><br><h1>Welcome!</h1></font>
<hr style="height:6px;border:none;color:white;background-color:white;" />
<br><br>
<div style="font-family: 'Patua One', serif;"><h2><font color="white">
Please wait to begin. </font></h2>
</div>
</div>
<script>
function checkFile()
{
    $.ajax({
        type: 'HEAD',
        url: 'tmp/filmbegin.txt',
        error : function(){
            setTimeout(function(){ checkFile(); }, 1000);
        },
        success : function(data) {
            window.location = 'wait.html';
        }
    });
}

$(function() {
    checkFile();
});
</script>
</div>
    </header>
  </body>

</html>