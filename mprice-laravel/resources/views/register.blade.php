<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Supplier Registration</title>
        
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
                <a class="navbar-brand" href="#">Supplier Site</a>
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
                <h1 class="well">Registration Form</h1>
                <div class="col-lg-12 well">
                <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8 form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Enter First Name Here.." class="form-control">
                                        </div>
										<div class="col-sm-4 dropdown">
										  <select name="one" class="dropdown-select">
											<option value="">Gender</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
										  </select>
										</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>FarmName</label>
                                            <input type="text" placeholder="Enter First Name Here.." class="form-control">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Legal/trade licence/entity</label>
                                            <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>NID</label>
                                            <input type="text" placeholder="Enter First Name Here.." class="form-control">
                                        </div>
                                        
                                    </div>					
                                    <div class="form-group">
                                        <label>Business Address</label>
                                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                                    </div>	
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>City</label>
                                            <input type="text" placeholder="Enter City Name Here.." class="form-control">
                                        </div>	
                                        <div class="col-sm-4 form-group">
                                            <label>State</label>
                                            <input type="text" placeholder="Enter State Name Here.." class="form-control">
                                        </div>	
                                        <div class="col-sm-4 form-group">
                                            <label>Zip</label>
                                            <input type="text" placeholder="Enter Zip Code Here.." class="form-control">
                                        </div>		
                                    </div>
                                    						
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                                </div>		
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" placeholder="Enter Email Address Here.." class="form-control">
                                </div>
                                <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Social Media</label>
                                            <input type="text" placeholder="Enter Designation Here.." class="form-control">
                                        </div>		
                                        <div class="col-sm-6 form-group">
                                            <label>Nature of business</label>
                                            <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                                        </div>	
                                </div>	
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                                </div>
                                <div class="form-group">
                                        <label>Remark(Reason For Joining)</label>
                                        <textarea placeholder="Enter Reason Here..." rows="3" class="form-control"></textarea>
                                </div>
                                <!--Avater or photo Code-->
                                
                                <div class="kv-avatar center-block" style="width:200px">
                                    <label>Upload Your Photo:</label>
                                    <input id="avatar-1" name="avatar-1" type="file" class="file-loading">
                                </div>

                                <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Member of association or chember!</label>
                                            <input type="text" placeholder="Enter First Name Here.." class="form-control">
                                        </div>
                                        
                                </div>

                                <button type="button" class="btn btn-lg btn-info">Submit</button>					
                                </div>
                            </form> 
                            </div>
                </div>
                </div>

            <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
            <script src="js/scripts.js"></script>
    </body>
</html>