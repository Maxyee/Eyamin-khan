<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        
        <!--Bootstrap CDN-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link href="css/style.css" rel="stylesheet" type="text/css">	
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
                <a class="navbar-brand" href="#">Login Site</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/mprice-laravel/resources/views/welcome.blade.php">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <h1 class="well" align="center">Login Form</h1>
                <div class="col-lg-12 well" align="center">
                <div class="row">
                            <form>
                                <div class="col-sm-12">
										<div class="dropdown">
										  <select name="one" class="dropdown-select">
											<option value="">Login As.....</option>
											<option value="1">Admin</option>
											<option value="2">Supplier</option>
											<option value="3">Farmer</option>
										  </select>
										</div>
										
                                    <div class="row">
										<label class="col-sm-2">Username</label>
                                        <div class="col-sm-10 form-group">
                                            <input type="text" placeholder="Enter Username Here.." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
										<label class="col-sm-2">Password</label>
                                        <div class="col-sm-10 form-group">
                                            <input type="text" placeholder="Enter Password Here.." class="form-control">
                                        </div>
                                    </div>


                                <button type="button" class="btn btn-lg btn-info">Login</button>					
                                </div>
                            </form> 
                            </div>
                </div>
                </div>
				

            <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
            <script src="js/scripts.js"></script>
    </body>
</html>