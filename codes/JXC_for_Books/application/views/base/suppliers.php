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
				<div class="panel-heading">供应商信息查询</div>
				<!-- /.panel-heading -->    
				<div class="panel-body">
					<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row" style="margin-bottom: 20px">
							<div class="col-sm-6">
								<button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加供应商</button>
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
											<th>供应商ID</th>
											<th>供应商名</th>
											<th>供应商拼音码</th>
											<th>供应商电话</th>
											<th>供应商Contact</th>
											<th>供应商传真</th>
											<th>供应商邮编</th>
											<th>供应商地址</th>
											<th>供应商银行</th>
											<th>供应商银行账户</th>
											<th>供应商Email</th>
											<th>供应商Note</th>
											<th>供应商Internet</th>
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


<!-- 新增供应商 -->
<div class="modal fade model" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增供应商</h4>
				</div>

				<div class="modal-body panel-body" id="modal-create-body">
					<div class="form-group" id="create-supName-div">
						<label for="create-supName" class="col-sm-3 control-label">供应商姓名</label>
						<div class="col-sm-7">
							<input id="create-supName" class="form-control" placeholder="请输入供应商名" value="" type="text">
							<p id="create-supName-p" class="help-block"></p>
						</div>
					</div>
					<!-- <div class="form-group" id="create-supArea-div">
						<label for="create-supArea" class="col-sm-3 control-label">supArea</label>
						<div class="col-sm-7">
							<input id="create-supArea" class="form-control" placeholder="请输入商品名" value="" type="text">
							<p id="create-supArea-p" class="help-block"></p>
						</div>
					</div> -->
					<div class="form-group" id="create-supPinyin-div">
						<label for="create-supPinyin" class="col-sm-3 control-label">supPinyin</label>
						<div class="col-sm-7">
							<input id="create-supPinyin" class="form-control" placeholder="请输入供应商拼音" value="" type="text">
							<p id="create-supPinyin-p" class="help-block"></p>
						</div>
					</div>	
					<!-- <div class="form-group" id="create-supBrief-div">
						<label for="create-supBrief" class="col-sm-3 control-label">supBrief</label>
						<div class="col-sm-7">
							<input id="create-supBrief" class="form-control" placeholder="请输入supBrief" value="" type="text">
							<p id="create-supBrief-p" class="help-block"></p>
						</div>
					</div>	 -->			
					<div class="form-group" id="create-supTel-div">
						<label for="create-supTel" class="col-sm-3 control-label">supTel</label>
						<div class="col-sm-7">
							<input id="create-supTel" class="form-control" placeholder="请输入goodPinyin" value="" type="text">
							<p id="create-supTel-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="create-supContact-div">
						<label for="create-supContact" class="col-sm-3 control-label">supContact</label>
						<div class="col-sm-7">
							<input id="create-supContact" class="form-control" placeholder="请输入goodManufacture" value="" type="text">
							<p id="create-supContact-p" class="help-block"></p>
						</div>
					</div>		
					<div class="form-group" id="create-supFax-div">
						<label for="create-supFax" class="col-sm-3 control-label">supFax</label>
						<div class="col-sm-7">
							<input id="create-supFax" class="form-control" placeholder="请输入supFax" value="" type="text">
							<p id="create-supFax-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-supPostcode-div">
						<label for="create-supPostcode" class="col-sm-3 control-label">supPostcode</label>
						<div class="col-sm-7">
							<input id="create-supPostcode" class="form-control" placeholder="请输入supPostcode" value="" type="text">
							<p id="create-supPostcode-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-supAddress-div">
						<label for="create-supAddress" class="col-sm-3 control-label">supAddress</label>
						<div class="col-sm-7">
							<input id="create-supAddress" class="form-control" placeholder="请输入supAddress" value="" type="text">
							<p id="create-supAddress-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-supBank-div">
						<label for="create-supBank" class="col-sm-3 control-label">supBank</label>
						<div class="col-sm-7">
							<input id="create-supBank" class="form-control" placeholder="请输入supBank" value="" type="text">
							<p id="create-supBank-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-supBankAccount-div">
						<label for="create-supBankAccount" class="col-sm-3 control-label">supBankAccount</label>
						<div class="col-sm-7">
							<input id="create-supBankAccount" class="form-control" placeholder="请输入supBankAccount" value="" type="text">
							<p id="create-supBankAccount-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-supEmail-div">
						<label for="create-supEmail" class="col-sm-3 control-label">supEmail</label>
						<div class="col-sm-7">
							<input id="create-supEmail" class="form-control" placeholder="请输入supEmail" value="" type="text">
							<p id="create-supEmail-p" class="help-block"></p>
						</div>
					</div>						
					<div class="form-group" id="create-supInternet-div">
						<label for="create-supInternet" class="col-sm-3 control-label">supInternet</label>
						<div class="col-sm-7">
							<input id="create-supInternet" class="form-control" placeholder="请输入supInternet" value="" type="text">
							<p id="create-supInternet-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-supNote-div">
						<label for="create-supNote" class="col-sm-3 control-label">supNote</label>
						<div class="col-sm-7">
							<input id="create-supNote" class="form-control" placeholder="请输入supNote" value="" type="text">
							<p id="create-supNote-p" class="help-block"></p>
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
<!-- 查看/修改供应商 -->
<div class="modal fade model" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增供应商</h4>
				</div>

				<div class="modal-body panel-body" id="modal-edit-body">
					<div class="form-group" id="edit-supID-div">
						<label for="edit-supID" class="col-sm-3 control-label">供应商ID</label>
						<div class="col-sm-7">
							<input id="edit-supID" class="form-control" value="" type="text" disabled>
							<p id="edit-supID-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-supName-div">
						<label for="edit-supName" class="col-sm-3 control-label">供应商姓名</label>
						<div class="col-sm-7">
							<input id="edit-supName" class="form-control" placeholder="请输入供应商名" value="" type="text">
							<p id="edit-supName-p" class="help-block"></p>
						</div>
					</div>
					<!-- <div class="form-group" id="edit-supArea-div">
						<label for="edit-supArea" class="col-sm-3 control-label">supArea</label>
						<div class="col-sm-7">
							<input id="edit-supArea" class="form-control" placeholder="请输入商品名" value="" type="text">
							<p id="edit-supArea-p" class="help-block"></p>
						</div>
					</div> -->
					<div class="form-group" id="edit-supPinyin-div">
						<label for="edit-supPinyin" class="col-sm-3 control-label">supPinyin</label>
						<div class="col-sm-7">
							<input id="edit-supPinyin" class="form-control" placeholder="请输入供应商拼音" value="" type="text">
							<p id="edit-supPinyin-p" class="help-block"></p>
						</div>
					</div>	
					<!-- <div class="form-group" id="edit-supBrief-div">
						<label for="edit-supBrief" class="col-sm-3 control-label">supBrief</label>
						<div class="col-sm-7">
							<input id="edit-supBrief" class="form-control" placeholder="请输入supBrief" value="" type="text">
							<p id="edit-supBrief-p" class="help-block"></p>
						</div>
					</div>	 -->			
					<div class="form-group" id="edit-supTel-div">
						<label for="edit-supTel" class="col-sm-3 control-label">supTel</label>
						<div class="col-sm-7">
							<input id="edit-supTel" class="form-control" placeholder="请输入goodPinyin" value="" type="text">
							<p id="edit-supTel-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="edit-supContact-div">
						<label for="edit-supContact" class="col-sm-3 control-label">supContact</label>
						<div class="col-sm-7">
							<input id="edit-supContact" class="form-control" placeholder="请输入goodManufacture" value="" type="text">
							<p id="edit-supContact-p" class="help-block"></p>
						</div>
					</div>		
					<div class="form-group" id="edit-supFax-div">
						<label for="edit-supFax" class="col-sm-3 control-label">supFax</label>
						<div class="col-sm-7">
							<input id="edit-supFax" class="form-control" placeholder="请输入supFax" value="" type="text">
							<p id="edit-supFax-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-supPostcode-div">
						<label for="edit-supPostcode" class="col-sm-3 control-label">supPostcode</label>
						<div class="col-sm-7">
							<input id="edit-supPostcode" class="form-control" placeholder="请输入supPostcode" value="" type="text">
							<p id="edit-supPostcode-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-supAddress-div">
						<label for="edit-supAddress" class="col-sm-3 control-label">supAddress</label>
						<div class="col-sm-7">
							<input id="edit-supAddress" class="form-control" placeholder="请输入supAddress" value="" type="text">
							<p id="edit-supAddress-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-supBank-div">
						<label for="edit-supBank" class="col-sm-3 control-label">supBank</label>
						<div class="col-sm-7">
							<input id="edit-supBank" class="form-control" placeholder="请输入supBank" value="" type="text">
							<p id="edit-supBank-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-supBankAccount-div">
						<label for="edit-supBankAccount" class="col-sm-3 control-label">supBankAccount</label>
						<div class="col-sm-7">
							<input id="edit-supBankAccount" class="form-control" placeholder="请输入supBankAccount" value="" type="text">
							<p id="edit-supBankAccount-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-supEmail-div">
						<label for="edit-supEmail" class="col-sm-3 control-label">supEmail</label>
						<div class="col-sm-7">
							<input id="edit-supEmail" class="form-control" placeholder="请输入supEmail" value="" type="text">
							<p id="edit-supEmail-p" class="help-block"></p>
						</div>
					</div>					
					<div class="form-group" id="edit-supInternet-div">
						<label for="edit-supInternet" class="col-sm-3 control-label">supInternet</label>
						<div class="col-sm-7">
							<input id="edit-supInternet" class="form-control" placeholder="请输入supInternet" value="" type="text">
							<p id="edit-supInternet-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-supNote-div">
						<label for="edit-supNote" class="col-sm-3 control-label">supNote</label>
						<div class="col-sm-7">
							<input id="edit-supNote" class="form-control" placeholder="请输入supNote" value="" type="text">
							<p id="edit-supNote-p" class="help-block"></p>
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
</div>
<!-- 删除供应商 -->
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
				<p>你真的要删除以下供应商么？</p>
				<div class="form-group">
					<label for="dele-supID" class="col-sm-3 control-label">供应商ID</label>
					<div class="col-sm-7">
						<input id="dele-supID" class="form-control" value="" type="text" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="dele-supName" class="col-sm-3 control-label">供应商名</label>
					<div class="col-sm-7">
						<input id="dele-supName" class="form-control" value="" type="text" disabled>
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
				ajax: "/c_suppliers/checkAllSuppliers",
				columns: [
				{ "data": "sup_ID" },
				{ "data": "sup_Name" },
				{ "data": "sup_Pinyincode" },
				{ "data": "sup_Tel" },
				{ "data": "sup_Contact" },
				{ "data": "sup_Fax" },
				{ "data": "sup_Postcode" },
				{ "data": "sup_Address" },
				{ "data": "sup_Bank" },
				{ "data": "sup_BankAccount" },
				{ "data": "sup_Email" },
				{ "data": "sup_Note" },
				{ "data": "sup_Internet" },
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
		$('#modal-edit').on('show.bs.modal', function (e) {
			$("#edit-supID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#edit-supName").val($(e.relatedTarget).parent().siblings()[1].innerText);
			$("#edit-supPinyin").val($(e.relatedTarget).parent().siblings()[2].innerText);
			$("#edit-supTel").val($(e.relatedTarget).parent().siblings()[3].innerText);
			$("#edit-supContact").val($(e.relatedTarget).parent().siblings()[4].innerText);
			$("#edit-supFax").val($(e.relatedTarget).parent().siblings()[5].innerText);
			$("#edit-supPostcode").val($(e.relatedTarget).parent().siblings()[6].innerText);
			$("#edit-supAddress").val($(e.relatedTarget).parent().siblings()[7].innerText);
			$("#edit-supBank").val($(e.relatedTarget).parent().siblings()[8].innerText);
			$("#edit-supBankAccount").val($(e.relatedTarget).parent().siblings()[9].innerText);
			$("#edit-supEmail").val($(e.relatedTarget).parent().siblings()[10].innerText);
			$("#edit-supInternet").val($(e.relatedTarget).parent().siblings()[11].innerText);
			$("#edit-supNote").val($(e.relatedTarget).parent().siblings()[12].innerText);
		});
		$('#modal-edit').on('hidden.bs.modal', function (e) {
			$("#edit-supID").val("");
			$("#edit-supName").val("");
			$("#edit-supPinyin").val("");
			$("#edit-supTel").val("");
			$("#edit-supContact").val("");
			$("#edit-supFax").val("");
			$("#edit-supPostcode").val("");
			$("#edit-supAddress").val("");
			$("#edit-supBank").val("");
			$("#edit-supBankAccount").val("");
			$("#edit-supEmail").val("");
			$("#edit-supInternet").val("");
			$("#edit-supNote").val("");
			$('#modal-edit-body').children(".form-group").attr("class","form-group");
			$('#modal-edit-body').find(".form-control").val("");
			$('#modal-edit-body').find(".help-block").text("");
		});
		$('#modal-delete').on('show.bs.modal', function (e) {
			$("#dele-supID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#dele-supName").val($(e.relatedTarget).parent().siblings()[1].innerText);
		});
		$('#modal-delete').on('hidden.bs.modal', function (e) {
			$("#dele-supID").val("");
			$("#dele-supName").val("");
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

		if(!(verifylength("create-supName",1,20)&&verifylength("create-supPinyin",1,20)&&verifylength("create-supTel",1,20)&&verifylength("create-supContact",1,20)&&verifylength("create-supFax",1,20)&&verifylength("create-supPostcode",1,20)&&verifylength("create-supAddress",1,20)&&verifylength("create-supBank",1,20)&&verifylength("create-supBankAccount",1,20)&&verifylength("create-supEmail",1,20)&&verifylength("create-supInternet",1,20)&&verifylength("create-supNote",1,20))) { 
			return false;
		}

		var supName = $("#create-supName").val();
		// var supArea = $("#create-supArea").val();
		var supPinyin = $("#create-supPinyin").val();
		// var supBrief = $("#create-supBrief").val();
		var supTel = $("#create-supTel").val();
		var supContact = $("#create-supContact").val();
		var supFax = $("#create-supFax").val();
		var supPostcode = $("#create-supPostcode").val();
		var supAddress = $("#create-supAddress").val();
		var supBank = $("#create-supBank").val();
		var supBankAccount = $("#create-supBankAccount").val();
		var supEmail = $("#create-supEmail").val();
		var supInternet = $("#create-supInternet").val();
		var supNote = $("#create-supNote").val();
		$.ajax( {  
	        url:'/c_suppliers/addSupplier',// 跳转到 action  
	        data:{  
	        	'supName': supName,
	        	// 'supArea': supArea,
	        	'supPinyin': supPinyin,
	        	// 'supBrief': supBrief,
	        	'supTel': supTel,
	        	'supContact': supContact,
	        	'supFax': supFax,
	        	'supPostcode': supPostcode,
	        	'supAddress': supAddress,
	        	'supBank': supBank,
	        	'supBankAccount': supBankAccount,
	        	'supEmail': supEmail,
	        	'supInternet': supInternet,
	        	'supNote': supNote,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-create').modal("hide");
	        		$('#modal-prompt-content').text("新增供应商成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("create-supName-p").innerHTML="供应商已存在";
	        		document.getElementById("create-supName-div").className="has-error form-group";
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

		if(!(verifylength("edit-supName",1,20)&&verifylength("edit-supPinyin",1,20)&&verifylength("edit-supTel",1,20)&&verifylength("edit-supContact",1,20)&&verifylength("edit-supFax",1,20)&&verifylength("edit-supPostcode",1,20)&&verifylength("edit-supAddress",1,20)&&verifylength("edit-supBank",1,20)&&verifylength("edit-supBankAccount",1,20)&&verifylength("edit-supEmail",1,20)&&verifylength("edit-supInternet",1,20)&&verifylength("edit-supNote",1,20))) { 
			return false;
		}
		var supID = $("#edit-supID").val();
		var supName = $("#edit-supName").val();
		// var supArea = $("#edit-supArea").val();
		var supPinyin = $("#edit-supPinyin").val();
		// var supBrief = $("#edit-supBrief").val();
		var supTel = $("#edit-supTel").val();
		var supContact = $("#edit-supContact").val();
		var supFax = $("#edit-supFax").val();
		var supPostcode = $("#edit-supPostcode").val();
		var supAddress = $("#edit-supAddress").val();
		var supBank = $("#edit-supBank").val();
		var supBankAccount = $("#edit-supBankAccount").val();
		var supEmail = $("#edit-supEmail").val();
		var supInternet = $("#edit-supInternet").val();
		var supNote = $("#edit-supNote").val();
		$.ajax( {  
	        url:'/c_suppliers/changeSupplier',// 跳转到 action  
	        data:{  
	        	'supID': supID,
	        	'supName': supName,
	        	// 'supArea': supArea,
	        	'supPinyin': supPinyin,
	        	// 'supBrief': supBrief,
	        	'supTel': supTel,
	        	'supContact': supContact,
	        	'supFax': supFax,
	        	'supPostcode': supPostcode,
	        	'supAddress': supAddress,
	        	'supBank': supBank,
	        	'supBankAccount': supBankAccount,
	        	'supEmail': supEmail,
	        	'supInternet': supInternet,
	        	'supNote': supNote,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-edit').modal("hide");
	        		$('#modal-prompt-content').text("修改供应商成功");
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
		var supID = $("#dele-supID").val();
		$.ajax( {  
        url:'/c_suppliers/delSupplier',// 跳转到 action  
        data:{  
        	'supID': supID,
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
        	if(data.msg =="true") {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除供应商成功");
        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
        		$('#modal-prompt').modal('show');
        		retable();
        	}
        	else {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除供应商失败，无此供应商");
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