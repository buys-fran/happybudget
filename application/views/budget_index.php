<!doctype html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="utf-8">
  <title>My AngularJS App</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/app/css/app.css'); ?>">
<body>
  <ul class="menu">
    <li><a href="#/view1">view1</a></li>
    <li><a href="#/view2">view2</a></li>
  </ul>

  <div ng-view></div>

  <div>Angular seed app: v<span app-version></span></div>

  <!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
  -->
  <script src="<?php echo base_url('/assets/app/lib/angular/angular.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/app/js/app.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/app/js/services.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/app/js/controllers.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/app/js/filters.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/app/js/directives.js'); ?>"></script>
  
</body>
</html>
