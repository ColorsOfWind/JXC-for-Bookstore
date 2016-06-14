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
				<div class="panel-heading">商品信息查询</div>
				<!-- /.panel-heading -->    
				<div class="panel-body">
					<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row" style="margin-bottom: 20px">
							<div class="col-sm-6">
								<button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加商品</button>
								<button class="btn btn-success" data-toggle="modal" data-target="#modal-createCat">添加商品分类</button>
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
											<th>商品ID</th>
											<th>商品名</th>
											<th>商品别名</th>
											<th>商品分类</th>
											<th>商品拼音</th>
											<th>商品助记码</th>
											<th>出版社</th>
											<th>商品售价</th>
											<th>编辑</th>
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

<!-- 新增商品 -->
<div class="modal fade model" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增商品</h4>
				</div>

				<div class="modal-body panel-body" id="modal-create-body">
					<div class="form-group" id="create-goodClassify-div">
						<label for="create-goodClassify" class="col-sm-3 control-label">商品分类</label>
						<div class="col-sm-7">
							<select id="create-goodClassify" class="form-control" placeholder="请输入商品分类"></select>
							<p id="create-goodClassify-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="create-goodName-div">
						<label for="create-goodName" class="col-sm-3 control-label">商品名</label>
						<div class="col-sm-7">
							<input id="create-goodName" class="form-control" placeholder="请输入商品名" value="" type="goodName">
							<p id="create-goodName-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="create-goodAlias-div">
						<label for="create-goodAlias" class="col-sm-3 control-label">商品别名</label>
						<div class="col-sm-7">
							<input id="create-goodAlias" class="form-control" placeholder="请输入商品别名" value="" type="goodAlias">
							<p id="create-goodAlias-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="create-goodMnemonniccode-div">
						<label for="create-goodMnemonniccode" class="col-sm-3 control-label">商品助记码</label>
						<div class="col-sm-7">
							<input id="create-goodMnemonniccode" class="form-control" placeholder="请输入商品助记码" value="" type="goodMnemonniccode">
							<p id="create-goodMnemonniccode-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="create-goodPinyin-div">
						<label for="create-goodPinyin" class="col-sm-3 control-label">商品拼音</label>
						<div class="col-sm-7">
							<input id="create-goodPinyin" class="form-control" placeholder="请输入拼音" value="" type="goodPinyin">
							<p id="create-goodPinyin-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="create-goodManufacture-div">
						<label for="create-goodManufacture" class="col-sm-3 control-label">出版社</label>
						<div class="col-sm-7">
							<input id="create-goodManufacture" class="form-control" placeholder="请输入出版社" value="" type="goodManufacture">
							<p id="create-goodManufacture-p" class="help-block"></p>
						</div>
					</div>		
					<div class="form-group" id="create-goodPrice-div">
						<label for="create-goodPrice" class="col-sm-3 control-label">商品售价</label>
						<div class="col-sm-7">
							<input id="create-goodPrice" class="form-control" placeholder="请输入价格" value="" type="goodPrice">
							<p id="create-goodPrice-p" class="help-block"></p>
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
<!-- 新增商品分类 -->
<div class="modal fade model" id="modal-createCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增商品分类</h4>
				</div>

				<div class="modal-body panel-body" id="modal-createCat-body">
					<div class="form-group" id="createCat-goodCatIndex-div">
						<label for="createCat-goodCatIndex" class="col-sm-3 control-label">新商品分类父索引</label>
						<div class="col-sm-7">
							<input id="createCat-goodCatIndex" class="form-control" placeholder="请输入新商品分类父索引" value="" type="text">
							<p id="createCat-goodCatIndex-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="createCat-goodCatName-div">
						<label for="createCat-goodCatName" class="col-sm-3 control-label">商品分类名</label>
						<div class="col-sm-7">
							<input id="createCat-goodCatName" class="form-control" placeholder="请输入商品分类名" value="" type="text">
							<p id="createCat-goodCatName-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="createCat-goodCatDes-div">
						<label for="createCat-goodCatDes" class="col-sm-3 control-label">商品分类描述</label>
						<div class="col-sm-7">
							<input id="createCat-goodCatDes" class="form-control" placeholder="商品分类描述" value="" type="goodCatDes">
							<p id="createCat-goodCatDes-p" class="help-block"></p>
						</div>
					</div>	
				</div>
				<div class="modal-footer panel-footer">
					<button id="createCat-submit" class='btn btn-warning' type='button' onclick="createCatsubmit()">确定</button>
					<button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- 查看/修改商品 -->
<div class="modal fade model" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">修改商品</h4>
				</div>

				<div class="modal-body panel-body" id="modal-edit-body">
					<div class="form-group" id="edit-goodID-div">
						<label for="edit-goodID" class="col-sm-3 control-label">商品ID</label>
						<div class="col-sm-7">
							<input id="edit-goodID" class="form-control" value="" type="goodName" disabled="">
							<p id="edit-goodID-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-goodClassify-div">
						<label for="edit-goodClassify" class="col-sm-3 control-label">商品分类</label>
						<div class="col-sm-7">
							<select id="edit-goodClassify" class="form-control" placeholder="请输入商品分类"></select>
							<p id="edit-goodClassify-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-goodName-div">
						<label for="edit-goodName" class="col-sm-3 control-label">商品名</label>
						<div class="col-sm-7">
							<input id="edit-goodName" class="form-control" placeholder="请输入商品名" value="" type="goodName">
							<p id="edit-goodName-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-goodAlias-div">
						<label for="edit-goodAlias" class="col-sm-3 control-label">商品别名</label>
						<div class="col-sm-7">
							<input id="edit-goodAlias" class="form-control" placeholder="请输入商品别名" value="" type="goodAlias">
							<p id="edit-goodAlias-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="edit-goodMnemonniccode-div">
						<label for="edit-goodMnemonniccode" class="col-sm-3 control-label">商品助记码</label>
						<div class="col-sm-7">
							<input id="edit-goodMnemonniccode" class="form-control" placeholder="请输入助记码" value="" type="goodMnemonniccode">
							<p id="edit-goodMnemonniccode-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-goodPinyin-div">
						<label for="edit-goodPinyin" class="col-sm-3 control-label">商品拼音</label>
						<div class="col-sm-7">
							<input id="edit-goodPinyin" class="form-control" placeholder="请输入拼音" value="" type="goodPinyin">
							<p id="edit-goodPinyin-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="edit-goodManufacture-div">
						<label for="edit-goodManufacture" class="col-sm-3 control-label">出版社</label>
						<div class="col-sm-7">
							<input id="edit-goodManufacture" class="form-control" placeholder="请输入出版社" value="" type="goodManufacture">
							<p id="edit-goodManufacture-p" class="help-block"></p>
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
				<p>你真的要删除以下商品么？</p>
				<div class="form-group">
					<label for="dele-Barcode" class="col-sm-3 control-label">商品ID</label>
					<div class="col-sm-7">
						<input id="dele-Barcode" class="form-control" value="" type="text" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="dele-inf_Name" class="col-sm-3 control-label">商品名</label>
					<div class="col-sm-7">
						<input id="dele-inf_Name" class="form-control" value="" type="text" disabled>
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
				ajax: "/c_goods/checkAllGood",
				columns: [
				{ "data": "inf_Barcode" },
				{ "data": "inf_Name" },
				{ "data": "inf_Alias" },
				{ "data": "inf_Classify" },
				{ "data": "inf_Pinyincode" },
				{ "data": "inf_Mnemonniccode" },
				{ "data": "inf_Manufacture" },
				{ "data": "inf_Commodityprice" },
				{ "data": null, "title":"操作","defaultContent": "<button  class='btn-delete btn btn-warning btn-sm' type='button' data-toggle='modal' data-target='#modal-edit'>修改</button>&nbsp;<button  class='btn-delete btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete'>删除</button>"}
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
		$('#modal-createCat').on('hidden.bs.modal', function (e) {
			$('#modal-createCat-body').children(".form-group").attr("class","form-group");
			$('#modal-createCat-body').find(".form-control").val("");
			$('#modal-createCat-body').find(".help-block").text("");
		});		
		$('#modal-edit').on('show.bs.modal', function (e) {
			$("#edit-goodID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#edit-goodName").val($(e.relatedTarget).parent().siblings()[1].innerText);
			$("#edit-goodAlias").val($(e.relatedTarget).parent().siblings()[2].innerText);
			$("#edit-goodClassify").val($(e.relatedTarget).parent().siblings()[3].innerText);
			$("#edit-goodPinyin").val($(e.relatedTarget).parent().siblings()[4].innerText);
			$("#edit-goodMnemonniccode").val($(e.relatedTarget).parent().siblings()[5].innerText);
			$("#edit-goodManufacture").val($(e.relatedTarget).parent().siblings()[6].innerText);
			$("#edit-inf_Commodityprice").val($(e.relatedTarget).parent().siblings()[7].innerText);
		});
		$('#modal-edit').on('hidden.bs.modal', function (e) {
			$("#edit-goodID").val("");
			$("#edit-goodName").val("");
			$("#edit-goodAlias").val("");
			$("#edit-goodClassify").val("");
			$("#edit-goodPinyin").val("");
			$("#edit-goodMnemonniccode").val("");
			$("#edit-goodManufacture").val("");
			$('#modal-password-body').children(".form-group").attr("class","form-group");
			$('#modal-password-body').find(".form-control").val("");
			$('#modal-password-body').find(".help-block").text("");
		});
		$('#modal-delete').on('show.bs.modal', function (e) {
			$("#dele-Barcode").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#dele-inf_Name").val($(e.relatedTarget).parent().siblings()[1].innerText);
		});
		$('#modal-delete').on('hidden.bs.modal', function (e) {
			$("#dele-Barcode").val("");
			$("#dele-inf_Name").val("");
		});
	}
	function getClassify() {
		$.ajax( {  
        url:'/c_goods/checkAllGoodCat',// 跳转到 action  
        data:{},
        type:'get',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
        	console.log(data.data);
        	for(var i=0;i<data.data.length;i++) {
        		$('#create-goodClassify').append("<option>"+data.data[i]["catInf_Name"]+"</option>");
        		$('#edit-goodClassify').append("<option>"+data.data[i]["catInf_Name"]+"</option>");
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
	function retable() {
		dt.ajax.reload();
	}

	$(document).ready(function() {
		dt = table();
		bind();
		getClassify();
	});
	function createsubmit() {

		if(!(verifylength("create-goodName",1,20)&&verifylength("create-goodAlias",1,20)&&verifylength("create-goodMnemonniccode",1,20)&&verifylength("create-goodPinyin",1,20)&&verifylength("create-goodManufacture",1,20)&&verifylength("create-goodPrice",1,20))) { 
			return false;
		}

		var goodClassify = $("#create-goodClassify").val();
		var goodName = $("#create-goodName").val();
		var goodAlias = $("#create-goodAlias").val();
		var goodMnemonniccode = $("#create-goodMnemonniccode").val();
		var goodPinyin = $("#create-goodPinyin").val();
		var goodManufacture = $("#create-goodManufacture").val();
		var goodPrice = $("#create-goodPrice").val();
		$.ajax( {  
	        url:'/c_goods/addGood',// 跳转到 action  
	        data:{  
	        	'goodClassify': goodClassify,
	        	'goodName': goodName,
	        	'goodAlias': goodAlias,
	        	'goodMnemonniccode': goodMnemonniccode,
	        	'goodPinyin': goodPinyin,
	        	'goodManufacture': goodManufacture,
	        	'goodPrice': goodPrice
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-create').modal("hide");
	        		$('#modal-prompt-content').text("新增商品成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("create-goodName-p").innerHTML="商品已存在";
	        		document.getElementById("create-goodName-div").className="has-error form-group";
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
	function createCatsubmit() {



		if(!(verifylength("createCat-goodCatIndex",1,20)&&verifylength("createCat-goodCatName",1,20)&&verifylength("createCat-goodCatDes",1,20))) { 
			return false;
		}

		var goodCatIndex = $("#createCat-goodCatIndex").val();
		var goodCatName = $("#createCat-goodCatName").val();
		var goodCatDes = $("#createCat-goodCatDes").val();
		$.ajax( {  
	        url:'/c_goods/addGoodCat',// 跳转到 action  
	        data:{  
	        	'goodCatIndex': goodCatIndex,
	        	'goodCatName': goodCatName,
	        	'goodCatDes': goodCatDes
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-createCat').modal("hide");
	        		$('#modal-prompt-content').text("新增商品分类成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("createCat-goodName-p").innerHTML="商品分类已存在";
	        		document.getElementById("createCat-goodName-div").className="has-error form-group";
	        	}
	        },
	        error : function() {
	        	$('#modal-createCat').modal("hide");
	        	$('#modal-prompt-content').text("创建出现错误，请联系管理员或尝试重新登录");
	        	document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
	        	$('#modal-prompt').modal('show');
	        }  
    	});
	}	
	function editsubmit() {

		if(!(verifylength("edit-goodName",1,20)&&verifylength("edit-goodAlias",1,20)&&verifylength("edit-goodMnemonniccode",1,20)&&verifylength("edit-goodPinyin",1,20)&&verifylength("edit-goodManufacture",1,20))) { 
			return false;
		}

		var goodID = $("#edit-goodID").val();
		var goodName = $("#edit-goodName").val();
		var goodClassify = $("#edit-goodClassify").val();
		var goodAlias = $("#edit-goodAlias").val();
		var goodMnemonniccode = $("#edit-goodMnemonniccode").val();
		var goodPinyin = $("#edit-goodPinyin").val();
		var goodManufacture = $("#edit-goodManufacture").val();
		$.ajax( {  
	        url:'/c_goods/changeGoods',// 跳转到 action  
	        data:{  
	        	'goodID': goodID,
	        	'goodClassify': goodClassify,
	        	'goodName': goodName,
	        	'goodAlias': goodAlias,
	        	'goodMnemonniccode': goodMnemonniccode,
	        	'goodPinyin': goodPinyin,
	        	'goodManufacture': goodManufacture,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-edit').modal("hide");
	        		$('#modal-prompt-content').text("修改商品成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("edit-goodName-p").innerHTML="修改失败";
	        		document.getElementById("edit-goodName-div").className="has-error form-group";
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
		var Barcode = $("#dele-Barcode").val();
		$.ajax( {  
        url:'/c_goods/delGood',// 跳转到 action  
        data:{  
        	'goodID': Barcode,
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
        	if(data.msg =="true") {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除商品成功");
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