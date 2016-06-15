<div id="page-wrapper" style="min-height: 368px;">
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
                <div class="panel-heading">审核管理</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <!-- <div class="col-sm-6">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加进货单</button>
                            </div> -->
                            <div class="col-sm-6">
                                <!-- <button class="btn btn-danger" data-toggle="modal" data-target="#modal-deleteall">删除选中用户</button> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                          <th>编号</th>
                                          <th>供货商</th>
                                          <th>进货单操作</th>
                                          <th>审核操作</th>
                                          
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
  <div class="modal fade model" id="modal-sign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content panel panel-danger">
        <div class="panel-heading">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">签名确认</h4>
        </div>
        <div class="modal-body panel-body">
          <p>你真的要审核通过以下记录并完成电签么？</p>
          <div class="form-group">
            <label for="sign-userid" class="col-sm-3 control-label">进货单编号</label>
            <div class="col-sm-7">
              <input id="sign-userid" class="form-control" value="" type="text" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="sign-username" class="col-sm-3 control-label">供货商</label>
            <div class="col-sm-7">
              <input id="sign-username" class="form-control" value="" type="text" disabled>
            </div>
          </div>          
        </div>
        <div class="modal-footer panel-footer">
          <span id="sign-prompt" style="color: red; opacity: 0"></span>
          <button class='btn btn-warning' type='button' onclick="signsubmit()">确定</button>
          <button class='btn btn-info' type='button'  data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div>
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
          <p>你真的要删除以下记录么？</p>
          <div class="form-group">
            <label for="dele-userid" class="col-sm-3 control-label">进货单编号</label>
            <div class="col-sm-7">
              <input id="dele-userid" class="form-control" value="" type="text" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="dele-username" class="col-sm-3 control-label">供货商</label>
            <div class="col-sm-7">
              <input id="dele-username" class="form-control" value="" type="text" disabled>
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
        ajax: "/c_purchase/CheckPurchase2",
        columns: [
        { "data": "purchase_ID" },
        { "data": "sup_Name" },
        { "data": null, "title":"进货单操作","defaultContent": "<button  class='btn-password btn btn-warning btn-sm' type='button' onclick='password(this)' data-toggle='modal' data-target='#modal-see'>查看</button> <button  class='btn-password btn btn-danger btn-sm' type='button' onclick='password(this)' data-toggle='modal' data-target='#modal-delete'>删除</button>" },
        { "data": null, "title":"审核操作","defaultContent": "<button  class=' btn btn-info btn-sm' type='button' onclick='permission(this)' data-toggle='modal' data-target='#modal-sign'>电子签名</button>" },
        //{ "data": null, "title":"操作","defaultContent": "<button  class='btn-delete btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete'>删除</button>"}
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
  $('#modal-see').on('show.bs.modal', function (e) {
    var userid = $(e.relatedTarget).parent().siblings()[0].innerText;
    $.ajax( {  
          url:'/c_purchase/seePurchase',// 跳转到 action  
          data:{  
            'purchase_ID': userid
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
            if(data.msg =="true") {
              $('#see-sup_Name').val(data.data[0].sup_Name);
              $('#see-Qinggouyuan').val(data.data[0].purchase_Qinggouyuan);
              $('#see-Dinggouyuan').val(data.data[0].purchase_Dinggouyuan);
              $('#see-Yanshouyuan').val(data.data[0].purchase_Yanshouyuan);
              $('#see-Crashguanliyuan').val(data.data[0].purchase_Crashguanliyuan);
              $('#see-Shouhuoaddress').val(data.data[0].purchase_Shouhuoaddress);
              $('#see-warehouse_Name').val(data.data[0].warehouse_Name);
              $('#see-Dingdandate').val(data.data[0].purchase_Dingdandate);
              $('#see-Daohuodate').val(data.data[0].purchase_Daohuodate);
              $('#see-Note').val(data.data[0].purhase_Note);


          }
          else {
              $('#modal-delete').modal("hide");
              $('#modal-prompt-content').text("查看出现错误，请联系管理员或尝试重新登录");
              document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
              $('#modal-prompt').modal('show');
                }
      },
      error : function() {
        $('#modal-delete').modal("hide");
        $('#modal-prompt-content').text("查看出现错误，请联系管理员或尝试重新登录");
        document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
        $('#modal-prompt').modal('show');
    }  
    });
  });
  $('#modal-password').on('hidden.bs.modal', function (e) {
    $("#password-userid").val("");
    $("#password-username").val("");
    $("#password-verify").val("");
    $("#password-password").val("");
    $('#modal-password-body').children(".form-group").attr("class","form-group");
    $('#modal-password-body').find(".form-control").val("");
    $('#modal-password-body').find(".help-block").text("");
  });
  $('#modal-sign').on('show.bs.modal', function (e) {
    $("#sign-userid").val($(e.relatedTarget).parent().siblings()[0].innerText);
    $("#sign-username").val($(e.relatedTarget).parent().siblings()[1].innerText);
  });
  $('#modal-sign').on('hidden.bs.modal', function (e) {
    $("#sign-userid").val("");
    $("#sign-username").val("");
  });  
  $('#modal-delete').on('show.bs.modal', function (e) {
    $("#dele-userid").val($(e.relatedTarget).parent().siblings()[0].innerText);
    $("#dele-username").val($(e.relatedTarget).parent().siblings()[1].innerText);
  });
  $('#modal-delete').on('hidden.bs.modal', function (e) {
    $("#dele-userid").val("");
    $("#dele-username").val("");
  });
}

function retable() {
  dt.ajax.reload();
}

$(document).ready(function() {
  dt = table();
  bind();
});

function deletesubmit() {
  var userid = $("#dele-userid").val();
  $.ajax( {  
        url:'/c_purchase/DeletePurchase',// 跳转到 action  
        data:{  
          'purchase_ID': userid
      },
      type:'post',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {  
          if(data.msg =="true") {
            $('#modal-delete').modal("hide");
            $('#modal-prompt-content').text("删除进货单成功");
            document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
            $('#modal-prompt').modal('show');
            retable();
        }
        else {
            document.getElementById("delete-username-p").innerHTML="删除失败，出现了一些错误⊙︿⊙";
            document.getElementById("delete-username-div").className="has-error form-group";
        }
    },
    error : function() {
      $('#modal-delete').modal("hide");
      $('#modal-prompt-content').text("删除出现错误，请联系管理员或尝试重新登录");
      document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
      $('#modal-prompt').modal('show');
  }  
});
}

function signsubmit() {
  var userid = $("#sign-userid").val();
  $.ajax( {  
        url:'/c_purchase/signPurchase1',// 跳转到 action  
        data:{  
          'purchase_ID': userid
      },
      type:'post',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {  
          if(data.msg =="true") {
            $('#modal-sign').modal("hide");
            $('#modal-prompt-content').text("电子签名成功");
            document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
            $('#modal-prompt').modal('show');
            retable();
        }
        else {
            document.getElementById("sign-username-p").innerHTML="签名失败，出现了一些错误⊙︿⊙";
            document.getElementById("sign-username-div").className="has-error form-group";
        }
    },
    error : function() {
      $('#modal-sign').modal("hide");
      $('#modal-prompt-content').text("电签出现错误，请联系管理员或尝试重新登录");
      document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
      $('#modal-prompt').modal('show');
  }  
});
}
</script>