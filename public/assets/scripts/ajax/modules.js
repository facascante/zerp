var ajaxCreateModules = function(data,cb){
	callAjaxRequest("POST","/api/modules/add",data,cb);
};

var ajaxEditModules = function(data,cb){
	callAjaxRequest("POST","/api/modules/edit",data,cb);
};

var ajaxGetRealmKeyOptions = function(cb){
	callAjaxRequest(null,"/api/realms/key/list",null,cb);
};
