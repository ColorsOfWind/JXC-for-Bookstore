<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"></h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">商品销售管理</div>
				<!-- /.panel-heading -->    
				<div class="panel-body">
					<div class="row">
							<div class="form-group col-sm-6" id="cl_Name-div">
								<label for="cl_Name" class="col-sm-3 control-label">客户姓名</label>
								<div class="col-sm-7">
									<select id="cl_Name" class="form-control">
										<!-- <option>ss</option> -->
									</select>
									<p id="cl_Name-p" class="help-block"></p>
								</div>
							</div>
							<div class="form-group col-sm-6" id="sale_Counter-div">
								<label for="sale_Counter" class="col-sm-3 control-label">柜台名字</label>
								<div class="col-sm-7">
									<input id="sale_Counter" class="form-control" value="" type="text">
									<p id="sale_Counter-p" class="help-block"></p>
								</div>
							</div>
					</div>
					<div class="row" style="margin-bottom: 20px">
						<div class="col-sm-6">
							<button class="btn btn-primary" data-toggle="modal" onclick="begin()">开始录入商品销售单</button>
						</div>
						<div class="col-sm-6">
							<div class="form-group" id="sale_ID-div">
								<label for="sale_ID" class="col-sm-3 control-label">单据编号</label>
								<div class="col-sm-7">
									<input id="sale_ID" class="form-control" value="" type="text" disabled>
									<p id="sale_ID-p" class="help-block"></p>
								</div>
							</div>
						</div>
					</div>
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>书籍条形码</th>
								<th>书籍名</th>
								<th>书籍原价</th>
								<th>书籍打折</th>
								<th>书籍实际价格</th>
								<th>书籍购买数量</th>
								<th>书籍总价格</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr id="sale-1">
								<td><input class="form-control" id="inf_Barcode-1" type="text" name="" onblur="getInfo(1)"></td>
								<td id="inf_name-1"></td>
								<td id="inf_Commodityprice-1"></td>
								<td id="saledetail_Discount-1"></td>
								<td id="saledetail_Price-1">11.00</td>
								<td><input class="form-control" id="saledetail_Number-1" type="number" name="" onchange="cal(1)"></td>
								<td id="saledetail_Amount-1">200</td>
								<td id="option-1"><button  class='btn-delete btn btn-info btn-sm' type='button' data-toggle='modal' onclick="add(1)">提交</button><!-- &nbsp;<button  class='btn-delete btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete'>删除</button> --></td>
							</tr>
						</tbody>
					</table>
					<div class="row" style="margin-bottom: 20px">
						<div class="col-sm-6">
							<button class="btn btn-success" data-toggle="modal" onclick="end()">确认完成销售单录入（最后一行不用填）</button>
						</div>
						<div class="col-sm-6">
							<!-- <button class="btn btn-danger" data-toggle="modal" data-target="#modal-deleteall">删除选中用户</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- 提示 -->
<div class="modal fade" id="modal-prompt" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel" id="modal-prompt-panel">
			<div class="panel-heading">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">提示</h4>
			</div>
			<div class="modal-body panel-body" id="modal-prompt-content">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function getclNames() {
		$.ajax( {  
	        url:'/c_sale/getAllcl',// 跳转到 action  
	        data:{},
	        type:'get',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	console.log(data.data);
	        	for(var i=0;i<data.data.length;i++) {
	        		$('#cl_Name').append("<option>"+data.data[i]["cl_Name"]+"</option>");
	        	}
	        },
	        error : function() {
	        	$('#modal-create').modal("hide");
	        	$('#modal-prompt-content').text("连接出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
	    });
	}
	function begin() {
		var cl_Name = $("#cl_Name").val();
		var sale_Counter = $("#sale_Counter").val();
		$.ajax( {  
	        url:'/c_sale/addSale',// 跳转到 action  
	        data:{
	        	'cl_Name': cl_Name,
	        	'sale_Counter': sale_Counter
	        },
	        type:'get',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	$("#sale_ID").val(data.sale_ID);
	        },
	        error : function() {
	        	$('#modal-prompt-content').text("连接出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
	    });
	}

	function end() {
		window.location.reload()
	}
	function getInfo(id) {
		var inf_Barcode = $("#inf_Barcode-"+id).val();
		$.ajax( {  
	        url:'/c_sale/getInfo',// 跳转到 action  
	        data:{
	        	'inf_Barcode': inf_Barcode
	        },
	        type:'get',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	$("#inf_name-"+id).text(data.inf_Name);
	        	$("#inf_Commodityprice-"+id).text(data.inf_Commodityprice);
	        	$("#saledetail_Discount-"+id).text(data.saledetail_Discount);
	        	$("#saledetail_Price-"+id).text(data.saledetail_Price);
	        },
	        error : function() {
	        	$('#modal-prompt-content').text("连接出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
	    });
	}
	function cal(id) {
		$("#saledetail_Amount-"+id).text($("#saledetail_Price-"+id).text()*$("#saledetail_Number-"+id).val());
	}

	function add(id) {
		var inf_Barcode = $("#inf_Barcode-"+id).val();
		var saledetail_Number = $("#saledetail_Number-"+id).val();
		$.ajax( {  
	        url:'/c_sale/addDetail',// 跳转到 action  
	        data:{
	        	'inf_Barcode': inf_Barcode,
	        	'saledetail_Number': saledetail_Number
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg=="true") {
	        		newLine(id);
	        	}
	        },
	        error : function() {
	        	$('#modal-prompt-content').text("连接出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
	    });
	}

	function newLine(id) {
		var idp = id+1;
		$("#sale-"+id).addClass("success");
		$("#inf_Barcode-"+id).attr("readonly","");
		$("#saledetail_Number-"+id).attr("readonly","");
		$("#option-"+id).empty();
		$("#option-"+id).append('<button class="btn-delete btn btn-danger btn-sm" type="button" onclick="deleteSubmit('+id+')">删除</button>');
		$("tbody").append('<tr id="sale-'+idp+'">'
								+'<td><input class="form-control" id="inf_Barcode-'+idp+'" type="text" name="" onblur="getInfo('+idp+')"></td>'
								+'<td id="inf_name-'+idp+'"></td>'
								+'<td id="inf_Commodityprice-'+idp+'"></td>'
								+'<td id="saledetail_Discount-'+idp+'"></td>'
								+'<td id="saledetail_Price-'+idp+'"></td>'
								+'<td><input class="form-control" id="saledetail_Number-'+idp+'" type="number" name="" onchange="cal('+idp+')"></td>'
								+'<td id="saledetail_Amount-'+idp+'"></td>'
								+'<td id="option-'+idp+'"><button  class="btn-delete btn btn-info btn-sm" type="button" data-toggle="modal" onclick="add('+idp+')">提交并输入下一条</button></td>'
							+'</tr>');
	}

	function deleteSubmit(id) {
		var sale_ID = $("#sale_ID").val();
		var inf_Barcode = $("#inf_Barcode-"+id).val();
		var saledetail_Number = $("#saledetail_Number-"+id).val();
		$.ajax( {  
	        url:'/c_sale/delDetail',// 跳转到 action  
	        data:{
	        	'sale_ID': sale_ID,
	        	'inf_Barcode': inf_Barcode,
	        	'saledetail_Number': saledetail_Number
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg=="true") {
	        		deleLine(id);
	        	}
	        },
	        error : function() {
	        	$('#modal-prompt-content').text("连接出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
	    });
	}

	function deleLine(id) {
		$("#sale-"+id).remove();
	}
	$(document).ready(function() {
		// getclNames();
	});




</script>