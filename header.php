<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>|USER INFORMATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">

    </head>
    <body >
        <?php
        include './class/user.php';
		//include './class/trip.php';
        $user_obj = new User();
		
		
        ?>  
		
	

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
						<li class="inactive"><a href="#">EXPH</a></li>
                        <li class="inactive"><a href="index.php">USER</a></li>
						<li class="inactive"><a href="trip/index.php">TRIP</a></li>
				
			
                    </ul>

                </div>
            </div>
        </nav>