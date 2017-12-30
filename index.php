<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/material-dashboard.css">
</head>
<body ng-app="logIn" ng-controller="logMeIn">
	<div style="padding: 40px;"></div>
	<div class="container">
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<div class="card">
                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Hello Admin</h4>
                                    <p class="category">Please Login To Use App</p>
                </div>
                <div class="card-content">
                    <form>
                                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input ng-model="username" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input ng-model="password" type="password" class="form-control">
                                </div>
                            </div>
                                           
                        </div>
                                        
                        <button type="submit" class="btn btn-info pull-right" ng-click="buttonLog()">Login</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
		</div>
	</div>
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script type="text/javascript">
	var app = angular.module("logIn", []);
	app.controller("logMeIn", function($scope, $http){
		
		
		$scope.buttonLog = function(){
			var url = "module/login.php";
			$http.post(url, {'username':$scope.username, 'password':$scope.password}).success(function(data)
				{   
                    $scope.data;
					window.location.href="dashboard.php";
				});
		}

		
	});
</script>
</body>
</html>