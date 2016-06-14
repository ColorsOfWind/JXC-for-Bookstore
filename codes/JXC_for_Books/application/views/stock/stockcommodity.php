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
        <div class="panel-heading">库存商品信息查询</div>
        <!-- /.panel-heading -->    
        <div class="panel-body">
          <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row" style="margin-bottom: 20px">
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                      <th>仓库</th>
                      <th>商品条形码</th>
                      <th>进货价</th>
                      <th>数量</th>
                      <th>金额</th>
                      <th>总价值</th>
                      <th>有效期</th>
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
        ajax: "/c_stock/checkAllstockcommodity",
        columns: [
        { "data": "warehouse_ID" },
        { "data": "inf_Barcode" },
        { "data": "calinf_Purprice" },
        { "data": "commodity_Number" },
        { "data": "commodity_Period" },
        { "data": "commodity_Totle" },
        { "data": "commodity_Valperiod" },
        ],
        select: false
      });
    }
  }

  function retable() {
    dt.ajax.reload();
    
  }

  $(document).ready(function() {
    dt = table();
  });
 
</script>