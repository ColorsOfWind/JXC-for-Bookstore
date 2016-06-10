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
// 工具函数
