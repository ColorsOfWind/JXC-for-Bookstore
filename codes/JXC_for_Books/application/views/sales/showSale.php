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
				<div class="panel-heading">销售信息查询</div>
				<!-- /.panel-heading -->    
				<div class="panel-body">
					<div class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row" style="margin-bottom: 20px">
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
									<thead>
										<tr role="row">	
											<th>单据编号</th>
											<th>客户姓名</th>
											<th>前台销售用户编号</th>
											<th>柜台名字</th>
											<th>填写日期</th>
											<th>完成日期</th>
											<th>完成状态</th>
											<th>备注</th>
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

<div class="modal fade model" id="modal-see" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content panel panel-info">
			<form class="form-horizontal">
				<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">查看商品详情</h4>
				</div>

				<div class="modal-body panel-body" id="modal-see-body">
					<div class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-12">
								<table id="tabledetail" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
									<thead>
										<tr role="row">		
											<th>单据编号</th>
											<th>明细编号</th>
											<th>书籍条形码</th>
											<th>书籍名</th>
											<th>销售价</th>
											<th>折扣</th>
											<th>实际售价</th>
											<th>数量</th>
											<th>金额</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer panel-footer">
					<button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
				</div>
			</form>
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
				"destroy": true,
				ajax: "/c_sale/checkAllSale",
				columns: [	
				{ "data": "sale_ID" },
				{ "data": "cl_Name" },
				{ "data": "sale_userID" },
				{ "data": "sale_Counter" },
				{ "data": "sale_Filldate" },
				{ "data": "sale_Dealdate" },
				{ "data": "sale_State" },
				{ "data": "sale_Remarks" },
				{ "data": null, "title":"操作","defaultContent": "<button  class='btn-see btn btn-info btn-sm' type='button' data-toggle='modal' data-target='#modal-see'>查看详细</button>"}
				],
				select: false
			});
		}
	}
	function tabledetail(){
		return $('#tabledetail').DataTable( {
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
			"destroy": true,
			ajax: "/c_sale/checkSaleDetailBySaleID",
			columns: [	
			{ "data": "sale_ID" },
			{ "data": "saledetail_ID" },
			{ "data": "inf_Barcode" },
			{ "data": "inf_Name" },
			{ "data": "inf_Commodityprice" },
			{ "data": "saledetail_Discount" },
			{ "data": "saledetail_Price" },
			{ "data": "saledetail_Number" },
			{ "data": "saledetail_Amount" },
			{ "data": null, "title":"操作","defaultContent": ""}
			],
			select: false
		});
	}

	function bind() {
		$('#modal-see').on('hidden.bs.modal', function (e) {
		});
		$('#modal-see').on('show.bs.modal', function (e) {
			dt2.ajax.url('/c_sale/checkSaleDetailBySaleID?saleID='+$(e.relatedTarget).parent().siblings()[0].innerText).load();
		});
	}

	$(document).ready(function() {
		dt = table();
		dt2 = tabledetail();
		bind();
	});


</script>