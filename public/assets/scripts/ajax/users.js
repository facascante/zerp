var Users = function(){
	return {
		init: function () {
			function callAjaxRequest(method,endpoint,data,cb){
				var request = {};
				if(method){
					request.type = method;
				}
				if(endpoint){
					request.url = endpoint;
				}
				if(data){
					request.data = data
				}
				$.ajax(request)
				.done(function( msg ) {
					cb(null,msg)
                })
                .fail(function( jqXHR, textStatus ) {
                    cb(textStatus);
                });
			}
			function ajaxCreateUser(data,cb){
				callAjaxRequest("POST","/account/api/user/add",data,cb);
			}
			function ajaxGetRoleOptions(data,cb){
				callAjaxRequest(null,"/account/api/user/role/list",null,cb);
			}
		}
	}
}();