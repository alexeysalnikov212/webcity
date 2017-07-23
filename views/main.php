<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MyDay</title>

  <!-- Bootstrap -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/colorbox.css" rel="stylesheet">

  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- ... -->

</head>
<body>
<div id="container-fluid">
	<?php include ("blocks/navbar.php");?>
  <?php include ("blocks/events.php");?>
  <?php include ("blocks/carousel.php");?>
  <?php include ("blocks/footer.php");?>

</div>
           
         
     <script> $('#media').carousel({
    pause: true,
    interval: false,
    });
    });
    </script> 
          <script>
              $('#datetimepicker').datetimepicker({ pickTime: false, language: 'ru' }
              );

            </script>

            <script>
              $(document).ready(function () {
                $(".iframe").colorbox({ iframe: true, width: "50%", height: "90%", speed: 500, transition: "fade", fadeOut: 500 });
              });
            </script>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/jquery.colorbox-min.js"></script>
</body>

</html>