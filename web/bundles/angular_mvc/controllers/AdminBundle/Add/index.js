function add_user( $scope , $http)
{
	$scope.username_exist = function (e)
	{
		data = {
			'username' : $scope.username , 
		};

		$http({
			url : $scope.add_user_ ,
			data : $.param( data) , 
			method : "POST" ,  
		}).success(function(data ,status) {
			$scope.username_status = data;
		});
	}
}