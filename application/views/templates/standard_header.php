<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>HappyBudget - Budget Tools!</title>
        
        <!-- styles -->
        <link rel="stylesheet" href="<?php echo base_url('assets/app/css/app.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/app/css/bootstrap.css'); ?>">
        
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        
        
        
        <link rel="stylesheet" href="<?php echo base_url('assets/app/css/bootstrap-responsive.css'); ?> ">
        
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="../../../assets/app/img/ico/desc-money-icon.png">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> 
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav"><li class="active">
                                <a href="#">Budget</a>
                            </li> 
                            <li>
                                <a href="#test1">Test1</a>
                            </li> 
                            <li>
                                <a href="#test1">Test2</a>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email"> 
                            <input class="span2" type="password" placeholder="Password"> 
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </body>
</html>