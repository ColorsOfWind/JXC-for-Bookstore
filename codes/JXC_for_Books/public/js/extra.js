// 开发中自己写的正在调试中的js
function updateTime() {
	// body...
	var span = document.getElementById("current_time");
	setInterval(function () {
		// body...
		span.innerHTML = new Date();
	},1000);
}
$(document).ready(function() { 
	updateTime();
}); 