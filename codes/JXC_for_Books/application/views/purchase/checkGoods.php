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
                <div class="panel-heading">进货验收管理</div>
                <!-- /.panel-heading -->    
                <div class="panel-body">
                    <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                <!-- <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加进货单</button>
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
                                          <th>进货单明细</th>
                                          <th>验收操作</th>
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
    <div class="modal-dialog" role="document">
      <div class="modal-content panel panel-info">
        <form class="form-horizontal">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">查看进货单</h4>
          </div>
          <div class="modal-body panel-body" id="modal-see-body">



            <div class="form-group" id="see-sup_Name-div">
              <label for="see-sup_Name" class="col-sm-3 control-label">供货商</label>
              <div class="col-sm-7">
                <input id="see-sup_Name" class="form-control" placeholder="供货商名称" type="text" disabled>
                <p id="see-sup_Name-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Qinggouyuan-div">
              <label for="see-Qinggouyuan" class="col-sm-3 control-label">请购员</label>
              <div class="col-sm-7">
                <input id="see-Qinggouyuan" class="form-control" placeholder="请购员标识" type="text" disabled>
                <p id="see-Qinggouyuan-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Dinggouyuan-div">
              <label for="see-Dinggouyuan" class="col-sm-3 control-label">订购员</label>
              <div class="col-sm-7">
                <input id="see-Dinggouyuan" class="form-control" placeholder="订购员标识" type="text" disabled>
                <p id="see-Dinggouyuan-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Yanshouyuan-div">
              <label for="see-Yanshouyuan" class="col-sm-3 control-label">验收员</label>
              <div class="col-sm-7">
                <input id="see-Yanshouyuan" class="form-control" placeholder="验收员标识" type="text" disabled>
                <p id="see-Yanshouyuan-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Crashguanliyuan-div">
              <label for="see-Crashguanliyuan" class="col-sm-3 control-label">现金管理员</label>
              <div class="col-sm-7">
                <input id="see-Crashguanliyuan" class="form-control" placeholder="现金管理员标识" type="text" disabled>
                <p id="see-Crashguanliyuan-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Shouhuoaddress-div">
              <label for="see-Shouhuoaddress" class="col-sm-3 control-label">收货地址</label>
              <div class="col-sm-7">
                <input id="see-Shouhuoaddress" class="form-control" placeholder="收货地址" type="text" disabled>
                <p id="see-Shouhuoaddress-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-warehouse_Name-div">
              <label for="see-warehouse_Name" class="col-sm-3 control-label">仓库名</label>
              <div class="col-sm-7">
                <input id="see-warehouse_Name" class="form-control" placeholder="仓库名" type="text" disabled>
                <p id="see-warehouse_Name-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Dingdandate-div">
              <label for="see-Dingdandate" class="col-sm-3 control-label">订单日期</label>
              <div class="col-sm-7">
                <input id="see-Dingdandate" class="form-control" placeholder="订单日期" type="text" disabled>
                <p id="see-Dingdandate-p" class="help-block"></p>
              </div>
            </div>

            <div class="form-group" id="see-Daohuodate-div">
              <label for="see-Daohuodate" class="col-sm-3 control-label">到货日期</label>
              <div class="col-sm-7">
                <input id="see-Daohuodate" class="form-control" placeholder="到货日期" type="text" disabled>
                <p id="see-Daohuodate-p" class="help-block"></p>
              </div>
            </div>


            <div class="form-group" id="see-Note-div">
              <label for="see-Note" class="col-sm-3 control-label">备注</label>
              <div class="col-sm-7">
                <input id="see-Note" class="form-control" placeholder="备注" type="text" disabled>
                <p id="see-Note-p" class="help-block"></p>
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

  <div class="modal fade model" id="modal-look" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content panel panel-info">
      <form class="form-horizontal">
        <div class="panel-heading">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">查看进货明细</h4>
        </div>


        <div class="modal-body panel-body" id="modal-look-body">
          <div class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
              <div class="col-sm-12">
                <table id="tabledetail" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
                  <thead>
                    <tr role="row">   
                      <th>明细编号</th>
                      <th>进货单据编号</th>
                      <th>商品条形码</th>
                      <th>进货价</th>
                      <th>数量</th>
                      <th>金额</th>
                      <th>有效期</th>
                      <th>总价</th>
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
        ajax: "/c_purchase/CheckPurchase3",
        columns: [
        { "data": "purchase_ID" },
        { "data": "sup_Name" },
        { "data": null, "title":"进货单操作","defaultContent": "<button  class='btn-password btn btn-warning btn-sm' type='button' onclick='password(this)' data-toggle='modal' data-target='#modal-see'>查看</button> <button  class='btn-password btn btn-danger btn-sm' type='button' onclick='password(this)' data-toggle='modal' data-target='#modal-delete'>删除</button>" },
        { "data": null, "title":"进货单明细","defaultContent": "<button  class='btn-permission btn btn-info btn-sm' type='button' data-toggle='modal' data-target='#modal-look'>查看</button>" },
        { "data": null, "title":"验收操作","defaultContent": "<button  class='btn-permission btn btn-info btn-sm' type='button' data-toggle='modal' data-target='#modal-sign'>电子签名</button>" },
        //{ "data": null, "title":"操作","defaultContent": "<button  class='btn-delete btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete'>删除</button>"}
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
      ajax: "/c_purchase/checkSaleDetailBySaleID",
      columns: [  
      { "data": "calinf_ID" },
      { "data": "purchase_ID" },
      { "data": "inf_Barcode" },
      { "data": "calinf_Purprice" },
      { "data": "calinf_Number" },
      { "data": "calinf_JinE" },
      { "data": "calinf_Time" },
      { "data": "calinf_TotalPrice" }
      
      ],
      select: false
    });
    }


function bind() {
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
  $('#modal-look').on('show.bs.modal', function (e) {
    dt2.ajax.url('/c_purchase/checkSaleDetailBySaleID?saleID='+$(e.relatedTarget).parent().siblings()[0].innerText).load();
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
  $('#modal-delete').on('show.bs.modal', function (e) {
    $("#dele-userid").val($(e.relatedTarget).parent().siblings()[0].innerText);
    $("#dele-username").val($(e.relatedTarget).parent().siblings()[1].innerText);
});
  $('#modal-delete').on('hidden.bs.modal', function (e) {
    $("#dele-userid").val("");
    $("#dele-username").val("");
});
    $('#modal-sign').on('show.bs.modal', function (e) {
    $("#sign-userid").val($(e.relatedTarget).parent().siblings()[0].innerText);
    $("#sign-username").val($(e.relatedTarget).parent().siblings()[1].innerText);
  });
  $('#modal-sign').on('hidden.bs.modal', function (e) {
    $("#sign-userid").val("");
    $("#sign-username").val("");
  });  
}

function retable() {
  dt.ajax.reload();
}

$(document).ready(function() {
  dt = table();
  dt2 = tabledetail();
  bind();
});
function createsubmit() {
  if(!(verifylength("create-sup_Name",1,999)&&verifylength("create-Qinggouyuan",1,999)&&verifylength("create-Dinggouyuan",1,999)&&verifylength("create-Crashguanliyuan",1,999)&&verifylength("create-Shouhuoaddress",1,999)&&verifylength("create-warehouse_Name",1,999)&&verifylength("create-Dingdandate",1,999)&&verifylength("create-Daohuodate",1,999)&&verifylength("create-Note",1,999)&&verifylength("create-Yanshouyuan",1,999))) {
      return false;
  }

  $.ajax( {  
          url:'/c_purchase/addPurchase',// 跳转到 action  
          data:{  
            
            'sup_Name': $("#create-sup_Name").val(),
            'Qinggouyuan': $("#create-Qinggouyuan").val(),
            'Dinggouyuan': $("#create-Dinggouyuan").val(),
            'Crashguanliyuan': $("#create-Crashguanliyuan").val(),
            'Shouhuoaddress': $("#create-Shouhuoaddress").val(),
            'warehouse_Name': $("#create-warehouse_Name").val(),
            'Dingdandate': $("#create-Dingdandate").val(),
            'Daohuodate': $("#create-Daohuodate").val(),
            'Note': $("#create-Note").val(),
            'Yanshouyuan': $("#create-Yanshouyuan").val()
            
          },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
            if(data.msg =="true") {
              retable(); 
              $('#modal-create').modal("hide");
              $('#modal-prompt-content').text("新增进货单成功");
              document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
              $('#modal-prompt').modal('show');
            }
          else {
              document.getElementById("create-username-p").innerHTML="新增进货单失败";
              document.getElementById("create-username-div").className="has-error form-group";
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

function verifyPassword4password() {
  var userid = $("#password-userid").val();
  var password = $("#password-verify").val();
  $.ajax( {  
        url:'/c_users/checkCurrentUser',// 跳转到 action  
        data:{  
          'userid': userid,
          'currentUserPassword': password
      },
      type:'post',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {  
          if(data.msg =="true") {
            $('#password-password').val(data.password[0].user_Password);
            $('#password-changepassword').css("display","block");
            $('#password-submit').css("display","inline-block");
        }
        else {
            $('#password-password').val("密码输入错误");
        }
    },
    error : function() {
      $('#password-password').val("未知错误");
  }  
});
}

function changepasswordsubmit() {
  if(!(verifylength("password-newpassword",4,16)&&verifylength("password-password4sure",4,16)&&verify4sure("password-newpassword","password-password4sure"))) {
    return false;
}
var userid = $("#password-userid").val();
var password = $("#password-newpassword").val();
$.ajax( {  
        url:'/c_users/changePassword',// 跳转到 action  
        data:{  
          'userID': userid,
          'newPassword': password
      },
      type:'post',
      cache:false,
      async:true,
      dataType:'json',
      success:function(data) {  
          if(data.msg =="true") {
            $('#modal-password').modal("hide");
            $('#modal-prompt-content').text("修改用户密码成功");
            document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
            $('#modal-prompt').modal('show');
        }
        else {
            $('#modal-password').modal("hide");
            $('#modal-prompt-content').text("修改出现错误，请联系管理员或尝试重新登录");
            document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
            $('#modal-prompt').modal('show');
        }
    },
    error : function() {
      $('#modal-password').modal("hide");
      $('#modal-prompt-content').text("修改出现错误，请联系管理员或尝试重新登录");
      document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
      $('#modal-prompt').modal('show');
  }  
});      
}

function signsubmit() {
  var userid = $("#sign-userid").val();
  $.ajax( {  
        url:'/c_purchase/signPurchase2',// 跳转到 action  
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