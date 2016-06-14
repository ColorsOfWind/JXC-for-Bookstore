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
				<div class="panel-heading">客户信息查询</div>
				<!-- /.panel-heading -->    
				<div class="panel-body">
					<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row" style="margin-bottom: 20px">
							<div class="col-sm-6">
								<button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加客户</button>
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
											<th>客户ID</th>
											<th>客户名</th>
											<th>地区</th>
											<th>客户拼音码</th>
											<th>客户电话</th>
											<th>客户联系人</th>
											<th>客户邮编</th>
											<th>客户开户银行</th>
											<th>客户银行账户</th>
											<th>客户电子邮件</th>
											<th>客户备注</th>
											<th>客户网址</th>
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


<!-- 新增客户 -->
<div class="modal fade model" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增客户</h4>
				</div>

				<div class="modal-body panel-body" id="modal-create-body">
					<div class="form-group" id="create-clName-div">
						<label for="create-clName" class="col-sm-3 control-label">客户姓名</label>
						<div class="col-sm-7">
							<input id="create-clName" class="form-control" placeholder="请输入客户名" value="" type="text">
							<p id="create-clName-p" class="help-block"></p>
						</div>
					</div>
					 <div class="form-group" id="create-clArea-div">
						<label for="create-clArea" class="col-sm-3 control-label">地址</label>
						<div class="col-sm-7">
							<input id="create-clArea" class="form-control" placeholder="请输入地址" value="" type="text">
							<p id="create-clArea-p" class="help-block"></p>
						</div>
					</div> 
					<div class="form-group" id="create-clPinyin-div">
						<label for="create-clPinyin" class="col-sm-3 control-label">客户拼音</label>
						<div class="col-sm-7">
							<input id="create-clPinyin" class="form-control" placeholder="请输入客户拼音" value="" type="text">
							<p id="create-clPinyin-p" class="help-block"></p>
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
						<label for="create-clTel" class="col-sm-3 control-label">客户电话</label>
						<div class="col-sm-7">
							<input id="create-clTel" class="form-control" placeholder="请输入电话" value="" type="text">
							<p id="create-clTel-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="create-clContact-div">
						<label for="create-clContact" class="col-sm-3 control-label">联系人</label>
						<div class="col-sm-7">
							<input id="create-clContact" class="form-control" placeholder="请输入联系人" value="" type="text">
							<p id="create-clContact-p" class="help-block"></p>
						</div>
					</div>  	
					<!--<div class="form-group" id="create-supFax-div">
						<label for="create-supFax" class="col-sm-3 control-label">supFax</label>
						<div class="col-sm-7">
							<input id="create-supFax" class="form-control" placeholder="请输入supFax" value="" type="text">
							<p id="create-supFax-p" class="help-block"></p>
						</div>
					</div>   -->			
					<div class="form-group" id="create-clPostcode-div">
						<label for="create-clPostcode" class="col-sm-3 control-label">邮编</label>
						<div class="col-sm-7">
							<input id="create-clPostcode" class="form-control" placeholder="请输入邮编" value="" type="text">
							<p id="create-clPostcode-p" class="help-block"></p>
						</div>
					</div>			
					<!--<div class="form-group" id="create-supAddress-div">
						<label for="create-supAddress" class="col-sm-3 control-label">supAddress</label>
						<div class="col-sm-7">
							<input id="create-supAddress" class="form-control" placeholder="请输入supAddress" value="" type="text">
							<p id="create-supAddress-p" class="help-block"></p>
						</div>
					</div>  -->			
					<div class="form-group" id="create-clBank-div">
						<label for="create-clBank" class="col-sm-3 control-label">开户银行</label>
						<div class="col-sm-7">
							<input id="create-clBank" class="form-control" placeholder="请输入银行名称" value="" type="text">
							<p id="create-clBank-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-clBankAccount-div">
						<label for="create-clBankAccount" class="col-sm-3 control-label">银行账号</label>
						<div class="col-sm-7">
							<input id="create-clBankAccount" class="form-control" placeholder="请输入银行账号" value="" type="text">
							<p id="create-clBankAccount-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-clEmail-div">
						<label for="create-clEmail" class="col-sm-3 control-label">电子邮件</label>
						<div class="col-sm-7">
							<input id="create-clEmail" class="form-control" placeholder="请输入电子邮件帐号" value="" type="text">
							<p id="create-clEmail-p" class="help-block"></p>
						</div>
					</div>						
					<div class="form-group" id="create-clInternet-div">
						<label for="create-clInternet" class="col-sm-3 control-label">客户网址</label>
						<div class="col-sm-7">
							<input id="create-clInternet" class="form-control" placeholder="请输入网址" value="" type="text">
							<p id="create-clInternet-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="create-clNote-div">
						<label for="create-clNote" class="col-sm-3 control-label">备注</label>
						<div class="col-sm-7">
							<input id="create-clNote" class="form-control" placeholder="请输入网址" value="" type="text">
							<p id="create-clNote-p" class="help-block"></p>
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
<!-- 查看/修改客户 -->
<div class="modal fade model" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">新增客户</h4>
				</div>

				<div class="modal-body panel-body" id="modal-edit-body">
					<div class="form-group" id="edit-clID-div">
						<label for="edit-clID" class="col-sm-3 control-label">客户ID</label>
						<div class="col-sm-7">
							<input id="edit-clID" class="form-control" value="" type="text" disabled>
							<p id="edit-clID-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-clName-div">
						<label for="edit-clName" class="col-sm-3 control-label">客户姓名</label>
						<div class="col-sm-7">
							<input id="edit-clName" class="form-control" placeholder="请输入客户姓名" value="" type="text">
							<p id="edit-clName-p" class="help-block"></p>
						</div>
					</div>
					<div class="form-group" id="edit-clArea-div">
						<label for="edit-clArea" class="col-sm-3 control-label">地址</label>
						<div class="col-sm-7">
							<input id="edit-clArea" class="form-control" placeholder="请输入地址" value="" type="text">
							<p id="edit-clArea-p" class="help-block"></p>
						</div>
					</div> 
					<div class="form-group" id="edit-clPinyin-div">
						<label for="edit-clPinyin" class="col-sm-3 control-label">客户拼音</label>
						<div class="col-sm-7">
							<input id="edit-clPinyin" class="form-control" placeholder="请输入客户拼音" value="" type="text">
							<p id="edit-clPinyin-p" class="help-block"></p>
						</div>
					</div>	
					<!-- <div class="form-group" id="edit-supBrief-div">
						<label for="edit-supBrief" class="col-sm-3 control-label">supBrief</label>
						<div class="col-sm-7">
							<input id="edit-supBrief" class="form-control" placeholder="请输入supBrief" value="" type="text">
							<p id="edit-supBrief-p" class="help-block"></p>
						</div>
					</div>	 -->			
					<div class="form-group" id="edit-clTel-div">
						<label for="edit-clTel" class="col-sm-3 control-label">客户电话</label>
						<div class="col-sm-7">
							<input id="edit-clTel" class="form-control" placeholder="请输入客户电话" value="" type="text">
							<p id="edit-clTel-p" class="help-block"></p>
						</div>
					</div>	
					<div class="form-group" id="edit-clContact-div">
						<label for="edit-clContact" class="col-sm-3 control-label">联系人</label>
						<div class="col-sm-7">
							<input id="edit-clContact" class="form-control" placeholder="请输入联系人" value="" type="text">
							<p id="edit-clContact-p" class="help-block"></p>
						</div>
					</div>		
					<!--<div class="form-group" id="edit-supFax-div">
						<label for="edit-supFax" class="col-sm-3 control-label">supFax</label>
						<div class="col-sm-7">
							<input id="edit-supFax" class="form-control" placeholder="请输入supFax" value="" type="text">
							<p id="edit-supFax-p" class="help-block"></p>
						</div>
					</div>	 -->		
					<div class="form-group" id="edit-clPostcode-div">
						<label for="edit-clPostcode" class="col-sm-3 control-label">邮编</label>
						<div class="col-sm-7">
							<input id="edit-clPostcode" class="form-control" placeholder="请输入邮编" value="" type="text">
							<p id="edit-clPostcode-p" class="help-block"></p>
						</div>
					</div>			
					<!--<div class="form-group" id="edit-supAddress-div">
						<label for="edit-supAddress" class="col-sm-3 control-label">supAddress</label>
						<div class="col-sm-7">
							<input id="edit-supAddress" class="form-control" placeholder="请输入supAddress" value="" type="text">
							<p id="edit-supAddress-p" class="help-block"></p>
						</div>
					</div>	-->		
					<div class="form-group" id="edit-clBank-div">
						<label for="edit-clBank" class="col-sm-3 control-label">开户银行</label>
						<div class="col-sm-7">
							<input id="edit-clBank" class="form-control" placeholder="请输入银行名称" value="" type="text">
							<p id="edit-clBank-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-clBankAccount-div">
						<label for="edit-clBankAccount" class="col-sm-3 control-label">银行账号</label>
						<div class="col-sm-7">
							<input id="edit-clBankAccount" class="form-control" placeholder="请输入银行账号" value="" type="text">
							<p id="edit-clBankAccount-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-clEmail-div">
						<label for="edit-clEmail" class="col-sm-3 control-label">电子邮件</label>
						<div class="col-sm-7">
							<input id="edit-clEmail" class="form-control" placeholder="请输入电子邮件账号" value="" type="text">
							<p id="edit-clEmail-p" class="help-block"></p>
						</div>
					</div>					
					<div class="form-group" id="edit-clInternet-div">
						<label for="edit-clInternet" class="col-sm-3 control-label">客户网址</label>
						<div class="col-sm-7">
							<input id="edit-clInternet" class="form-control" placeholder="请输入网址" value="" type="text">
							<p id="edit-clInternet-p" class="help-block"></p>
						</div>
					</div>			
					<div class="form-group" id="edit-clNote-div">
						<label for="edit-clNote" class="col-sm-3 control-label">备注</label>
						<div class="col-sm-7">
							<input id="edit-clNote" class="form-control" placeholder="请输入备注" value="" type="text">
							<p id="edit-clNote-p" class="help-block"></p>
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
<!-- 删除客户 -->
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
				<p>你真的要删除以下客户么？</p>
				<div class="form-group">
					<label for="dele-clID" class="col-sm-3 control-label">客户ID</label>
					<div class="col-sm-7">
						<input id="dele-clID" class="form-control" value="" type="text" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="dele-clName" class="col-sm-3 control-label">客户名</label>
					<div class="col-sm-7">
						<input id="dele-clName" class="form-control" value="" type="text" disabled>
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
				ajax: "/c_clients/checkAllClients",
				columns: [
				{ "data": "client_ID" },
				{ "data": "cl_Name" },
				{ "data": "cl_Area" },
				{ "data": "cl_Pinyincode" },
				{ "data": "cl_Tel" },
				{ "data": "cl_Contacts" },
				{ "data": "cl_Postcode" },
				{ "data": "cl_Bank" },
				{ "data": "cl_BankAccount" },
				{ "data": "cl_Email" },
				{ "data": "cl_Internet" },
				{ "data": "cl_Note" },
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
			$("#edit-clID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#edit-clName").val($(e.relatedTarget).parent().siblings()[1].innerText);
			$("#edit-clArea").val($(e.relatedTarget).parent().siblings()[2].innerText);
			$("#edit-clPinyin").val($(e.relatedTarget).parent().siblings()[3].innerText);
			$("#edit-clTel").val($(e.relatedTarget).parent().siblings()[4].innerText);
			$("#edit-clContact").val($(e.relatedTarget).parent().siblings()[5].innerText);
			$("#edit-clPostcode").val($(e.relatedTarget).parent().siblings()[6].innerText);
			$("#edit-clBank").val($(e.relatedTarget).parent().siblings()[7].innerText);
			$("#edit-clBankAccount").val($(e.relatedTarget).parent().siblings()[8].innerText);
			$("#edit-clEmail").val($(e.relatedTarget).parent().siblings()[9].innerText);
			$("#edit-clInternet").val($(e.relatedTarget).parent().siblings()[10].innerText);
			$("#edit-clNote").val($(e.relatedTarget).parent().siblings()[11].innerText);
		});
		$('#modal-edit').on('hidden.bs.modal', function (e) {
			$("#edit-clID").val("");
			$("#edit-clName").val("");
			$("#edit-clArea").val("");
			$("#edit-clPinyin").val("");
			$("#edit-clTel").val("");
			$("#edit-clContact").val("");
			$("#edit-clPostcode").val("");
			$("#edit-clBank").val("");
			$("#edit-clBankAccount").val("");
			$("#edit-clEmail").val("");
			$("#edit-clInternet").val("");
			$("#edit-clNote").val("");
			$('#modal-edit-body').children(".form-group").attr("class","form-group");
			$('#modal-edit-body').find(".form-control").val("");
			$('#modal-edit-body').find(".help-block").text("");
		});
		$('#modal-delete').on('show.bs.modal', function (e) {
			$("#dele-clID").val($(e.relatedTarget).parent().siblings()[0].innerText);
			$("#dele-clName").val($(e.relatedTarget).parent().siblings()[1].innerText);
		});
		$('#modal-delete').on('hidden.bs.modal', function (e) {
			$("#dele-clID").val("");
			$("#dele-clName").val("");
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

		if(!(verifylength("create-clName",1,20)&&verifylength("create-clArea",1,20)&&verifylength("create-clPinyin",1,20)&&verifylength("create-clTel",1,20)&&verifylength("create-clContact",1,20)&&verifylength("create-clPostcode",1,20)&&verifylength("create-clBank",1,20)&&verifylength("create-clBankAccount",1,20)&&verifylength("create-clEmail",1,20)&&verifylength("create-clInternet",1,20)&&verifylength("create-clNote",1,20))) { 
			return false;
		}

		var clName = $("#create-clName").val();
		var clArea = $("#create-clArea").val();
		var clPinyin = $("#create-clPinyin").val();
		// var supBrief = $("#create-supBrief").val();
		var clTel = $("#create-clTel").val();
		var clContacts = $("#create-clContact").val();
		//var supFax = $("#create-supFax").val();
		var clPostcode = $("#create-clPostcode").val();
		//var supAddress = $("#create-supAddress").val();
		var clBank = $("#create-clBank").val();
		var clBankAccount = $("#create-clBankAccount").val();
		var clEmail = $("#create-clEmail").val();
		var clInternet = $("#create-clInternet").val();
		var clNote = $("#create-clNote").val();
		$.ajax( {  
	        url:'/c_clients/addClient',// 跳转到 action  
	        data:{  
	        	'clientName': clName,
	        	'clientArea': clArea,
	        	'clientPinyin': clPinyin,
	        	// 'supBrief': supBrief,
	        	'clientTel': clTel,
	        	'clientContacts': clContacts,
	        	//'supFax': supFax,
	        	'clientPostcode': clPostcode,
	        	//'supAddress': supAddress,
	        	'clientBank': clBank,
	        	'clientBankAccount': clBankAccount,
	        	'clientEmail': clEmail,
	        	'clientInternet': clInternet,
	        	'clientNote': clNote,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-create').modal("hide");
	        		$('#modal-prompt-content').text("新增客户成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("create-clName-p").innerHTML="客户已存在";
	        		document.getElementById("create-clName-div").className="has-error form-group";
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

		if(!(verifylength("edit-clName",1,20)&&verifylength("edit-clArea",1,20)&&verifylength("edit-clPinyin",1,20)&&verifylength("edit-clTel",1,20)&&verifylength("edit-clContact",1,20)&&verifylength("edit-clPostcode",1,20)&&verifylength("edit-clBank",1,20)&&verifylength("edit-clBankAccount",1,20)&&verifylength("edit-clEmail",1,20)&&verifylength("edit-clInternet",1,20)&&verifylength("edit-clNote",1,20))) { 
			return false;
		}
		var clID = $("#edit-clID").val();
		var clName = $("#edit-clName").val();
		var clArea = $("#edit-clArea").val();
		var clPinyin = $("#edit-clPinyin").val();
		// var supBrief = $("#edit-supBrief").val();
		var clTel = $("#edit-clTel").val();
		var clContact = $("#edit-clContact").val();
		//var supFax = $("#edit-supFax").val();
		var clPostcode = $("#edit-clPostcode").val();
		//var supAddress = $("#edit-supAddress").val();
		var clBank = $("#edit-clBank").val();
		var clBankAccount = $("#edit-clBankAccount").val();
		var clEmail = $("#edit-clEmail").val();
		var clInternet = $("#edit-clInternet").val();
		var clNote = $("#edit-clNote").val();
		$.ajax( {  
	        url:'/c_clients/changeClient',// 跳转到 action  
	        data:{  
	        	'clientID': clID,
	        	'clientName': clName,
	        	'clientArea': clArea,
	        	'clientPinyin': clPinyin,
	        	// 'supBrief': supBrief,
	        	'clientTel': clTel,
	        	'clientContact': clContact,
	        	//'supFax': supFax,
	        	'clientPostcode': clPostcode,
	        	//'supAddress': supAddress,
	        	'clientBank': clBank,
	        	'clientBankAccount': clBankAccount,
	        	'clientEmail': clEmail,
	        	'clientInternet': clInternet,
	        	'clientNote': clNote,
	        },
	        type:'post',
	        cache:false,
	        async:true,
	        dataType:'json',
	        success:function(data) {  
	        	if(data.msg =="true") {
	        		retable();
	        		$('#modal-edit').modal("hide");
	        		$('#modal-prompt-content').text("修改客户成功");
	        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
	        		$('#modal-prompt').modal('show');
	        	}
	        	else {
	        		document.getElementById("edit-clName-p").innerHTML="修改失败";
	        		document.getElementById("edit-clName-div").className="has-error form-group";
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
		var clID = $("#dele-clID").val();
		$.ajax( {  
        url:'/c_clients/delClient',// 跳转到 action  
        data:{  
        	'clientID': clID,
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
        	if(data.msg =="true") {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除客户成功");
        		document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
        		$('#modal-prompt').modal('show');
        		retable();
        	}
        	else {
        		$('#modal-delete').modal("hide");
        		$('#modal-prompt-content').text("删除客户失败，无此客户");
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