
var ajaxCreateRealms = function(data,cb){
	callAjaxRequest("POST","/api/realms/add",data,cb);
};

var ajaxEditRealms = function(data,cb){
	callAjaxRequest("POST","/api/realms/edit",data,cb);
};

var ajaxGetReamlTypeOptions = function(cb){
	callAjaxRequest(null,"/api/realms/type/list",null,cb);
};

var ajaxGetUserStatusOptions = function(filter,cb){
	callAjaxRequest("POST","/account/api/status/list",filter,cb);
};
