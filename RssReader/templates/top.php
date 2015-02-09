<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="js/angular.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
</head>
	<body ng-app="RssModule">
		<div ng-controller="formController">
			<form name="form">
				<input type="text" name="url" id="url" ng-model="user.url">
				<button ng-click="submit(user)"></button>
			</form>
		</div>
		<div ng-controller="pageController">
			<!-- feed list -->
			<div ng-show="show.list">
				<div ng-controller="feedController">
					<div class="list-group">
						<a class="list-group-item" ng-repeat="item in items">
							<div>
								<h4 class="feedTitle">{{item.title}}</h4>
								<p class="feedDescription">{{item.description}}</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>