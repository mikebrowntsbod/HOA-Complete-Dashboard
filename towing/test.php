<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>Towing Request Submission</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="request.php">Request<span class="sr-only">(Current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Users</a></li>
            <li><a href="#">Modify Users</a></li>
            <li><a href="#">Remove Users</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php 
   echo '<table border="3">';

    foreach ($_POST as $key => $value) 
    {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
   echo "</table>";
            
   $firstName=$_POST['first_name']; //completed
   $lastName=$_POST['last_name']; //completed
   $email=$_POST['email'];
      
   $propertyName=$_POST['propertyName']; //completed
   $propertyCity=$_POST['city']; //completed
   $propertyState=$_POST['state']; //completed
   $propertyZip=$_POST['zip']; //completed
      
   $carMake=$_POST['carMake'];
   $carModel=$_POST['carModel'];
   $carPlate=$_POST['carPlate'];
   $carState=$_POST['carState'];
   $carColor=$_POST['carColor'];
   $carLocation=$_POST['carLocation'];
   
   $towReasonOther=$_POST['towReasonOther'];
   $comment=$_POST['comment'];


     if ($firstName != "")
     {
        if (strlen($firstName) < 3)
        {
           exit;
        }
        if (strlen($firstName) > 20)
        {
           exit;
        }
     }
      else
      {
         echo "There was a problem with the value entered for first name";
      }
      
        if ($lastName != "")
     {
        if (strlen($lastName) < 3)
        {
           exit;
        }
        if (strlen($lastName) > 20)
        {
           exit;
        }
     }
      else
      {
         echo "There was a problem with the value entered for first name";
      }
      
      if ( $propertyName != "Tanyard Springs" )
      {
         echo "There is a problem with the value entered for Property Name";
      }
      
      if ( $propertyCity != "Glen Burnie" )
      {
         echo "There is a problem with the value entered for Property City";
      }
      
      if ( $propertyState != "Maryland" )
      {
         echo "There is a problem with the value entered for Property State";
      }
      
      if ( $propertyZip != "21060" )
      {
         echo "There is a problem with the value entered for Property Zip Code";
      }

        
?>   
   </body>
</html>
