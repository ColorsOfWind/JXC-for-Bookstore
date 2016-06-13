function updateTime() {
	// body...
	var span = document.getElementById("current_time");
	setInterval(function () {
		// body...
		span.innerHTML = new Date();
	},1000);
}
function verifylength(id,min,max) {
	var that = document.getElementById(id);
	if(that.value.length < min || that.value.length > max) {
		that.nextElementSibling.innerHTML = "请输入正确长度";
		that.parentNode.parentNode.className = "has-error form-group";
		return false;
	} else {
		that.nextElementSibling.innerHTML = "";
		that.parentNode.parentNode.className = "has-success form-group";
		return true;
	}
}
function verify4sure(element1,element2) {
	var ele = document.getElementById(element1);
	var that = document.getElementById(element2);
	if(ele.value === that.value) {
		that.nextElementSibling.innerHTML = "";
		that.parentNode.parentNode.className = "has-success form-group";
		return true;
	} else {
		that.nextElementSibling.innerHTML = "两次输入不一致";
		that.parentNode.parentNode.className = "has-error form-group";
		return false;
	}
}    
$(document).ready(function() { 
	updateTime();

}); 
// 工具函数
