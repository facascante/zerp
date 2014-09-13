
var ajaxCreateRealms = function(data,cb){
	callAjaxRequest("POST","/api/realms/add",data,cb);
};

var ajaxGetRoleOptions = function(cb){
	callAjaxRequest(null,"/account/api/role/list",null,cb);
}
var ajaxGetUserStatusOptions = function(filter,cb){
	callAjaxRequest("POST","/account/api/status/list",filter,cb);
}
