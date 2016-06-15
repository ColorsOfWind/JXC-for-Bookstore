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
				<div class="panel-heading">折扣商品查询</div>
				<!-- /.panel-heading -->    
				<div class="panel-body">
					<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row" style="margin-bottom: 20px">
							<div class="col-sm-6">
								<button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加折扣商品</button>
							</div>
							<div class="col-sm-6">
								<!-- <button class="btn btn-danger" data-toggle="modal" data-target="#modal-deleteall">删除选中用户</button> -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
									<thead>
										<tr role="row">
											<th>折扣号</th>
											<th>商品条形码</th>
											<th>商品名</th>
											<th>商品折扣</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 新增 -->
<div class="modal fade model" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增商品折扣</h4>
				</div>

				<div class="modal-body panel-body" id="modal-create-body">

					<div class="form-group" id="create-inf_Barcode-div">
						<label for="create-inf_Barcode" class="col-sm-3 control-label">商品条形码</label>
						<div class="col-sm-7">
							<input id="create-inf_Barcode" class="form-control" placeholder="请输入商品条形码" value="" type="goodAlias">
							<p id="create-inf_Barcode-p" class="help-block"></p>
						</div>
					</div>	

					<div class="form-group" id="create-goodDiscount-div">
						<label for="create-goodDiscount" class="col-sm-3 control-label">商品折扣</label>
						<div class="col-sm-7">
							<input id="create-goodDiscount" class="form-control" placeholder="请输入折扣" value="" type="goodDiscount">
							<p id="create-goodDiscount-p" class="help-block"></p>
						</div>
					</div>

				</div>
				<div class="modal-footer panel-footer">
					<button id="create-submit" class='btn btn-warning' type='button' onclick="createsubmit()">确定</button>
					<button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- 查看/修改 -->
<div class="modal fade model" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">修改折扣商品</h4>
				</div>
				<div class="modal-body panel-body" id="modal-edit-body">
					<div class="form-group" id="edit-disInfID-div">
						<label for="edit-disInfID" class="col-sm-3 control-label">商品折扣号</label>
						<div class="col-sm-7">
							<input id="edit-disInfID" class="form-control" value="" type="disInf_ID" disabled>
							<p id="edit-disInfID-p" class="help-block"></p>
						</div>
					</div>
				</div>
				<div class="modal-body panel-body" id="modal-edit-body">
					<div class="form-group" id="edit-infBarcode-div">
						<label for="edit-infBarcode" class="col-sm-3 control-label">商品条形码</label>
						<div class="col-sm-7">
							<input id="edit-infBarcode" class="form-control" value="" type="inf_Barcode">
							<p id="edit-infBarcode-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-goodDiscount-div">
						<label for="edit-goodDiscount" class="col-sm-3 control-label">商品折扣</label>
						<div class="col-sm-7">
							<input id="edit-goodDiscount" class="form-control" placeholder="请输入商品折扣" value="" type="goodDiscount">
							<p id="edit-goodDiscount-p" class="help-block"></p>
						</div>
					</div>			
				</div>
				<div class="modal-footer panel-footer">
					<button id="edit-submit" class='btn btn-warning' type='button' onclick="editsubmit()">确定</button>
					<button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- 删除商品 -->
<div class="modal fade model" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-danger">
			<div class="panel-heading">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">删除确认</h4>
			</div>
			<div class="modal-body panel-body">
				<p>你真的要删除以下折扣商品么？</p>
				<div class="form-group">
					<label for="dele-disInfID" class="col-sm-3 control-label">商品折扣号</label>
					<div class="col-sm-7">
						<input id="dele-disInfID" class="form-control" value="" type="text" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="dele-infBarcode" class="col-sm-3 control-label">商品条形码</label>
					<div class="col-sm-7">
						<input id="dele-infBarcode" class="form-control" value="" type="text" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="dele-infName" class="col-sm-3 control-label">商品名称</label>
					<div class="col-sm-7">
						<input id="dele-infName" class="form-control" value="" type="text" disabled>
					</div>
				</div>				
				<div class="form-group">
					<label for="dele-goodDiscount" class="col-sm-3 control-label">商品折扣</label>
					<div class="col-sm-7">
						<input id="dele-goodDiscount" class="form-control" value="" type="text" disabled>
					</div>
				</div>          
			</div>
			<div class="modal-footer panel-footer">
				<span id="dele-prompt" style="color: red; opacity: 0"></span>
				<button class='btn btn-warning' type='button' onclick="deletesubmit()">确定</button>
				<button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
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
	function table(){
		if ( $.fn.dataTable.isDataTable( '#table' ) ) {
			return $('#table').DataTable();
		}
		else {
			return $('#table').DataTable( {
				language: {
					"sProcessing":   "处理中...",
					"sLengthMenu":   "显示 _MENU_ 项结果",
					"sZeroRecords":  "没有匹配结果",
					"sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
					"sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
					"sInfoFiltered": "(由 _MAX_ 项结果过滤)",
					"sInfoPostFix":  "",
					"sSearch":       "搜索:",
					"sUrl":          "",
					"sEmptyTable":     "表中数据为空",
					"sLoadingRecords": "载入中...",
					"sInfoThousands":  ",",
					"oPaginate": {
						"sFirst":    "首页",
						"sPrevious": "上页",
						"sNext":     "下页",
						"sLast":     "末页"
					},
					"oAria": {
						"sSortAscending":  ": 以升序排列此列",
						"sSortDescending": ": 以降序排列此列"
					}
				},
				ajax: "/c_goods/checkAllGoodDis",
				columns: [
				{ "data": "disInf_ID" },
				{ "data": "inf_Barcode" },
				{ "data": "inf_Name" },
				{ "data": "disInf_Discount" },
				{ "data": null, "title":"操作","defaultContent": "<button  class='btn-edit btn btn-warning btn-sm' type='button' data-toggle='modal' data-target='#modal-edit'>修改</button>&nbsp;<button  class='btn-delete btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete'>删除</button>"}
				],
				select: false
			});
		}
	}

	function bind() {
		$('#modal-create').on('hidden.bs.modal', function (e) {
			$('#modal-create-body').children(".form-group").attr("class","form-group");
			$('#modal-create-body').find(".form-control").val("");
			$('#modal-create-body').find(".help-block").text("");
		});
		$('#modal-edit').on('show.bs.modal', function (e) {
			$("#edit-disInfID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#edit-infBarcode").val($(e.relatedTarget).parent().siblings()[1].innerText);
			$("#edit-goodDiscount").val($(e.relatedTarget).parent().siblings()[3].innerText);
			console.log($(e.relatedTarget).parent().siblings()[1].innerText);
		});
		$('#modal-edit').on('hidden.bs.modal', function (e) {
			$("#edit-disInfID").val("");
			$("#edit-infBarcode").val("");
			$("#edit-goodDiscount").val("");
			$('#modal-password-body').children(".form-group").attr("class","form-group");
			$('#modal-password-body').find(".form-control").val("");
			$('#modal-password-body').find(".help-block").text("");
		});
		$('#modal-delete').on('show.bs.modal', function (e) {
			$("#dele-disInfID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#dele-infBarcode").val($(e.relatedTarget).parent().siblings()[1].innerText);
			$("#dele-infName").val($(e.relatedTarget).parent().siblings()[2].innerText);
			$("#dele-goodDiscount").val($(e.relatedTarget).parent().siblings()[3].innerText);
		});
		$('#modal-delete').on('hidden.bs.modal', function (e) {
			$("#dele-disInf_ID").val("");
			$("#dele-inf_Barcode").val("");
			$("#dele-goodDiscount").val("");
		});
	}
	
	function retable() {
		dt.ajax.reload();
	}

	$(document).ready(function() {
		dt = table();
		bind();
	});
	function createsubmit() {

		if(!(verifylength("create-inf_Barcode",1,20)&&verifylength("create-goodDiscount",1,20))) { 
			return false;
		}

		// var disInf_ID = $("#create-disInf_ID").val();
		var inf_Barcode = $("#create-inf_Barcode").val();
		var goodDiscount = $("#create-goodDiscount").val();
		$.ajax( {  
	        url:'/c_goods/addGoodDis',// 跳转到 action  
	        data:{  
	        	// 'disInf_ID': disInf_ID,
	        	'goodID': inf_Barcode,
	        	'goodDiscount': goodDiscount,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-create').modal("hide");
	        		$('#modal-prompt-content').text("新增折扣商品成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("create-inf_Barcode-p").innerHTML="折扣商品已存在";
	        		document.getElementById("create-inf_Barcode-div").className="has-error form-group";
	        	}
	        },
	        error : function() {
	        	$('#modal-create').modal("hide");
	        	$('#modal-prompt-content').text("创建出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
    	});
	}
	function editsubmit() {

		if(!(verifylength("edit-disInfID",1,20)&&verifylength("edit-infBarcode",1,20)&&verifylength("edit-goodDiscount",1,20))) {  
			return false;
		}

		var disInf_ID = $("#edit-disInfID").val();
		var inf_Barcode = $("#edit-infBarcode").val();
		var goodDiscount = $("#edit-goodDiscount").val();
		$.ajax( {  
	        url:'/c_goods/changeGoodsDis',// 跳转到 action  
	        data:{  
	        	'disID': disInf_ID,
	        	'goodID': inf_Barcode,
	        	'goodDiscount': goodDiscount,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-edit').modal("hide");
	        		$('#modal-prompt-content').text("修改折扣商品成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("edit-infBarcode-p").innerHTML="修改失败";
	        		document.getElementById("edit-infBarcode-div").className="has-error form-group";
	        	}
	        },
	        error : function() {
	        	$('#modal-edit').modal("hide");
	        	$('#modal-prompt-content').text("修改出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
    	});
	}
	function deletesubmit() {
		var goodDisID = $("#dele-disInfID").val();
		$.ajax( {  
        url:'/c_goods/delGoodDis',// 跳转到 action  
        data:{  
        	  	'goodDisID': goodDisID,
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
        	if(data.msg =="true") {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除折扣商品成功");
        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
        		$('#modal-prompt').modal('show');
        		retable();
        	}
        	else {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除商品失败，无此商品");
        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
        		$('#modal-prompt').modal('show');        	}
        	},
        	error : function() {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除出现错误，请联系管理员或尝试重新登录");
        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
        		$('#modal-prompt').modal('show');
        	}  
        });
	}

</script>