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
        <div class="panel-heading">用户信息管理</div>
        <!-- /.panel-heading -->    
        <div class="panel-body">
          <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row" style="margin-bottom: 20px">
              <div class="col-sm-6">
                <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加用户</button>
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
                      <th>ID</th>
                      <th>用户名</th>
                      <th>密码</th>
                      <th>查看权限</th>
                      <th>编辑</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>admin</td>
                      <td><button  class='btn-password btn btn-warning btn-sm' type='button' data-toggle='modal' data-target='#modal-password'>查看/修改密码</button>
                      </td>
                      <td><button  class='btn-permision btn btn-info btn-sm' type='button' data-toggle='modal' data-target='#modal-permision'>查看/修改权限</button></td>
                      <td><button  class='btn-delete btn btn-danger btn-sm' type='button' onclick='delete(this)' data-toggle='modal' data-target='#modal-delete'>删除</button></td>
                    </tr></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 新增用户 -->
  <div class="modal fade model" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content panel panel-info">
        <form class="form-horizontal">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">新增用户</h4>
          </div>
          <div class="modal-body panel-body" id="modal-create-body">
            <div class="form-group" id="create-username-div">
              <label for="create-username" class="col-sm-3 control-label">用户名</label>
              <div class="col-sm-7">
                <input id="create-username" class="form-control" placeholder="请输入4-11位用户名" type="text">
                <p id="create-username-p" class="help-block"></p>
              </div>
            </div>
            <div class="form-group" id="create-password-div">
              <label for="create-password" class="col-sm-3 control-label">密码</label>
              <div class="col-sm-7">
                <input id="create-password" class="form-control" placeholder="请输入4-16位密码" value="" type="password">
                <p id="create-password-p" class="help-block"></p>
              </div>
            </div>
            <div class="form-group" id="create-div-password4sure">
              <label for="create-password4sure" class="col-sm-3 control-label">确认密码</label>
              <div class="col-sm-7">
                <input id="create-password4sure" class="form-control" placeholder="请重新输入刚才的密码" value="" type="password">
                <p id="create-password4sure-p" class="help-block"></p>
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
  <!-- 查看/修改密码 -->
  <div class="modal fade model" id="modal-password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content panel panel-info">
        <form class="form-horizontal">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">查看/修改密码</h4>
          </div>
          <div class="modal-body panel-body" id="modal-password-body">
            <div class="panel">
              <p>你正要查看这名用户的密码</p>
              <div class="form-group">
                <label for="password-userid" class="col-sm-3 control-label">用户ID</label>
                <div class="col-sm-7">
                  <input id="password-userid" class="form-control" value="" type="text" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="password-username" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-7">
                  <input id="password-username" class="form-control" value="" type="text" disabled>
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group input-group" id="password-verify-div">
                  <input id="password-verify" class="form-control" placeholder="请输入当前账号密码以验证权限" type="password">
                  <span class="input-group-btn">
                    <button id="password-verify-submit" class="btn btn-warning" type="button" onclick="verifyPassword4password()"><i class="fa fa-unlock"> 验证</i>
                    </button>
                  </span>
                </div>
                <div class="form-group" id="password-password-div">
                  <input id="password-password" class="form-control" placeholder="输入正确密码后，密码将显示在这里" value="" type="text" disabled>
                </div>
              </div>

            </div>
            <div id="password-changepassword" style="display: none">
              <div class="form-group" id="password-password-div">
                <label for="password-newpassword" class="col-sm-3 control-label">修改密码</label>
                <div class="col-sm-7">
                  <input id="password-newpassword" class="form-control" placeholder="请输入4-16位密码" value="" type="password">
                  <p id="password-password-p" class="help-block"></p>
                </div>
              </div>
              <div class="form-group" id="password-div-password4sure">
                <label for="password-password4sure" class="col-sm-3 control-label">确认修改密码</label>
                <div class="col-sm-7">
                  <input id="password-password4sure" class="form-control" placeholder="请重新输入刚才的密码" value="" type="password">
                  <p id="password-password4sure-p" class="help-block"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer panel-footer">
            <button id="password-submit" class='btn btn-warning' type='button' onclick="changepasswordsubmit()" style="display:none">确定修改密码</button>
            <button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- 查看/修改权限 -->
  <div class="modal fade model" id="modal-permission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content panel panel-info">
        <form class="form-horizontal">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">查看/修改权限</h4>
          </div>
          <div class="modal-body panel-body" id="modal-permision-body">
              <p>你正要查看这名用户的权限</p>
              <div class="form-group">
                <label for="permission-userid" class="col-sm-3 control-label">用户ID</label>
                <div class="col-sm-7">
                  <input id="permission-userid" class="form-control" value="" type="text" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="permission-username" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-7">
                  <input id="permission-username" class="form-control" value="" type="text" disabled>
                </div>
              </div>          
            <div class="col-sm-8 col-sm-offset-2">
              <div class="form-group input-group" id="permission-verify-div">
                <input id="permission-verify" class="form-control" placeholder="请输入当前账号密码以验证权限" type="password">
                <span class="input-group-btn">
                  <button id="permission-verify-submit" class="btn btn-warning" type="button" onclick="verifyPassword4permision()"><i class="fa fa-unlock"> 验证</i>
                  </button>
                </span>
                <p id="permission-verify-p" class="help-block"></p>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2 hide" id="permission-div">
              <div class="checkbox" id="user_BasicInformationPermission-div">
                <label>
                  <input type="checkbox" value="" id="user_BasicInformationPermission">基础管理权限
                </label>
              </div>
              <div class="checkboxs" id="user_BasicInformationPermission-divs">
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_B_User" value="1">用户管理
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_B_Good" value="1">商品管理
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_B_Supplier" value="1">供应商管理
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_B_Client" value="1">客户管理
                </label>
              </div>
              <div class="checkbox" id="user_PurchasePermission-div">
                <label>
                  <input type="checkbox" value="" id="user_PurchasePermission">进货管理权限
                </label>
              </div>
              <div class="checkboxs" id="user_PurchasePermission-divs">
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_P_QingGouyuan" value="1">请购员
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_P_DingGouyuan" value="1">订购员
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_P_YanShouyuan" value="1">验收员
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_P_ChuNayuan" value="1">出纳员
                </label>
              </div>          
              <div class="checkbox" id="user_StockPermission-div">
                <label>
                  <input type="checkbox" value="" id="user_StockPermission">库存管理权限
                </label>
              </div>
              <div class="checkboxs" id="user_StockPermission-divs">
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_St_GoodFinder" value="1">库存商品查询
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_St_BillFinder" value="1">库存单据查询
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_St_WarningFinder" value="1">库存预警查询
                </label>
              </div>          
              <div class="checkbox" id="user_SellPermission-div">
                <label>
                  <input type="checkbox" value="" id="user_SellPermission">库存管理权限
                </label>
              </div>
              <div class="checkboxs" id="user_SellPermission-divs">
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_Se_Discount" value="1">特价商品查询
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_Se_SaleEdit" value="1">销售单管理
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="user_Se_SaleShow" value="1">销售单查询
                </label>
              </div>                           
            </div>            
          </div>
          <div class="modal-footer panel-footer">
            <button id="permision-submit" class='btn btn-warning' type='button' onclick="permisionsubmit()">确定</button>
            <button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- 删除用户 -->
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
          <p>你真的要删除以下用户么？</p>
          <div class="form-group">
            <label for="dele-userid" class="col-sm-3 control-label">用户ID</label>
            <div class="col-sm-7">
              <input id="dele-userid" class="form-control" value="" type="text" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="dele-username" class="col-sm-3 control-label">用户名</label>
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
    // function verifylength(min,max,submit) {
    //   var that = window.event.target;
    //   if(that.value.length < min || that.value.length > max) {
    //     console.log("er: "+ that.value);
    //     that.nextElementSibling.innerHTML = "请输入正确长度";
    //     that.parentNode.parentNode.className = "has-error form-group";
    //     document.getElementById(submit).disabled = true;
    //   } else {
    //     console.log(that.value);
    //     that.nextElementSibling.innerHTML = "";
    //     that.parentNode.parentNode.className = "has-success form-group";
    //     document.getElementById(submit).disabled = false;
    //   }
    // }
    function verifylength(id,min,max) {
      var that = document.getElementById(id);
      if(that.value.length < min || that.value.length > max) {
        that.nextElementSibling.innerHTML = "请输入正确长度";
        that.parentNode.parentNode.className = "has-error form-group";
        return false;
      } else {
        that.nextElementSibling.innerHTML = "";
        that.parentNode.parentNode.className = "has-success form-group";
        return true;
      }
    }
    // function verify4sure(element,submit) {
    //   var ele = document.getElementById(element);
    //   var that = window.event.target;
    //   console.log(ele);
    //   if(ele.value === that.value) {
    //     that.nextElementSibling.innerHTML = "";
    //     that.parentNode.parentNode.className = "has-success form-group";
    //     // document.getElementById(submit).disabled = false;
    //   } else {
    //     that.nextElementSibling.innerHTML = "两次密码输入不一致";
    //     that.parentNode.parentNode.className = "has-error form-group";
    //     document.getElementById(submit).disabled = true;
    //   }
    // }
    function verify4sure(element1,element2) {
      var ele = document.getElementById(element1);
      var that = document.getElementById(element2);
      if(ele.value === that.value) {
        that.nextElementSibling.innerHTML = "";
        that.parentNode.parentNode.className = "has-success form-group";
        return true;
      } else {
        that.nextElementSibling.innerHTML = "两次输入不一致";
        that.parentNode.parentNode.className = "has-error form-group";
        return false;
      }
    }    
  </script>
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
          ajax: "/c_users/checkAllUsers",
          columns: [
          { "data": "user_ID" },
          { "data": "user_Name" },
          { "data": null, "title":"操作","defaultContent": "<button  class='btn-password btn btn-warning btn-sm' type='button' data-toggle='modal' data-target='#modal-password'>查看/修改密码</button>" },
          { "data": null, "title":"操作","defaultContent": "<button  class='btn-permission btn btn-info btn-sm' type='button' data-toggle='modal' data-target='#modal-permission'>查看/修改权限</button>" },
          { "data": null, "title":"操作","defaultContent": "<button  class='btn-delete btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete'>删除</button>"}
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
      $('#modal-password').on('show.bs.modal', function (e) {
        $("#password-userid").val($(e.relatedTarget).parent().siblings()[0].innerText);
        $("#password-username").val($(e.relatedTarget).parent().siblings()[1].innerText);
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
      $('#modal-permission').on('show.bs.modal', function (e) {
        $("#permission-userid").val($(e.relatedTarget).parent().siblings()[0].innerText);
        $("#permission-username").val($(e.relatedTarget).parent().siblings()[1].innerText);
      });
      $('#modal-permission').on('hidden.bs.modal', function (e) {
        $("#permission-userid").val("");
        $("#permission-username").val("");
        $("#permission-verify").val("");
        $("#permission-password").val("");
        $('#permission-div').addClass("hide");
        $('#modal-permission-body').children(".form-group").attr("class","form-group");
        $('#modal-permission-body').find(".form-control").val("");
        $('#modal-permission-body').find(".help-block").text("");
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
    function createsubmit() {
      if(!(verifylength("create-username",4,11)&&verifylength("create-password",4,16)&&verifylength("create-password4sure",4,16)&&verify4sure("create-password","create-password4sure"))) {
        return false;
      }
      var username = $("#create-username").val();
      var password = $("#create-password").val();

      $.ajax( {  
        url:'/c_users/addUser',// 跳转到 action  
        data:{  
          'userName': username,
          'userPassword': password
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
          if(data.msg =="true") {
            retable();
            $('#modal-create').modal("hide");
            $('#modal-prompt-content').text("新增用户成功");
            document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
            $('#modal-prompt').modal('show');
          }
          else {
            document.getElementById("create-username-p").innerHTML="用户名已存在";
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
        url:'/c_users/delUser',// 跳转到 action  
        data:{  
          'userID': userid
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
          if(data.msg =="true") {
            $('#modal-delete').modal("hide");
            $('#modal-prompt-content').text("删除用户成功");
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
    function verifyPassword4permision() {
      var userid = $("#permission-userid").val();
      var password = $("#permission-verify").val();
      $.ajax( {  
        url:'/c_users/checkCurrentUserforPermission',// 跳转到 action  
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
            $('#permission-div').removeClass("hide");
            document.getElementById("user_BasicInformationPermission").checked = parseInt(data.data.user_BasicInformationPermission);
            document.getElementById("user_B_User").checked = parseInt(data.data.user_B_User);
            document.getElementById("user_B_Good").checked = parseInt(data.data.user_B_Good);
            document.getElementById("user_B_Supplier").checked = parseInt(data.data.user_B_Supplier);
            document.getElementById("user_B_Client").checked = parseInt(data.data.user_B_Client);
            document.getElementById("user_PurchasePermission").checked = parseInt(data.data.user_PurchasePermission);
            document.getElementById("user_P_QingGouyuan").checked = parseInt(data.data.user_P_QingGouyuan);
            document.getElementById("user_P_DingGouyuan").checked = parseInt(data.data.user_P_DingGouyuan);
            document.getElementById("user_P_YanShouyuan").checked = parseInt(data.data.user_P_YanShouyuan);
            document.getElementById("user_P_ChuNayuan").checked = parseInt(data.data.user_P_ChuNayuan);
            document.getElementById("user_StockPermission").checked = parseInt(data.data.user_StockPermission);
            document.getElementById("user_St_GoodFinder").checked = parseInt(data.data.user_St_GoodFinder);
            document.getElementById("user_St_BillFinder").checked = parseInt(data.data.user_St_BillFinder);
            document.getElementById("user_St_WarningFinder").checked = parseInt(data.data.user_St_WarningFinder);
            document.getElementById("user_SellPermission").checked = parseInt(data.data.user_SellPermission);
            document.getElementById("user_Se_Discount").checked = parseInt(data.data.user_Se_Discount);
            document.getElementById("user_Se_SaleEdit").checked = parseInt(data.data.user_Se_SaleEdit);
            document.getElementById("user_Se_SaleShow").checked = parseInt(data.data.user_Se_SaleShow);
          }
          else {
            $('#permission-password').val("密码输入错误");
          }
        },
        error : function() {
          $('#permission-password').val("未知错误");
        }  
      });
    }

    function permisionsubmit() {
      var userid = $("#permission-userid").val();
      var user_BasicInformationPermission = Number(document.getElementById("user_BasicInformationPermission").checked);
      var user_B_User = Number(document.getElementById("user_B_User").checked);
      var user_B_Good = Number(document.getElementById("user_B_Good").checked);
      var user_B_Supplier = Number(document.getElementById("user_B_Supplier").checked);
      var user_B_Client = Number(document.getElementById("user_B_Client").checked);
      var user_PurchasePermission = Number(document.getElementById("user_PurchasePermission").checked);
      var user_P_QingGouyuan = Number(document.getElementById("user_P_QingGouyuan").checked);
      var user_P_DingGouyuan = Number(document.getElementById("user_P_DingGouyuan").checked);
      var user_P_YanShouyuan = Number(document.getElementById("user_P_YanShouyuan").checked);
      var user_P_ChuNayuan = Number(document.getElementById("user_P_ChuNayuan").checked);
      var user_StockPermission = Number(document.getElementById("user_StockPermission").checked);
      var user_St_GoodFinder = Number(document.getElementById("user_St_GoodFinder").checked);
      var user_St_BillFinder = Number(document.getElementById("user_St_BillFinder").checked);
      var user_St_WarningFinder = Number(document.getElementById("user_St_WarningFinder").checked);
      var user_SellPermission = Number(document.getElementById("user_SellPermission").checked);
      var user_Se_Discount = Number(document.getElementById("user_Se_Discount").checked);
      var user_Se_SaleEdit = Number(document.getElementById("user_Se_SaleEdit").checked);
      var user_Se_SaleShow = Number(document.getElementById("user_Se_SaleShow").checked);
      $.ajax( {  
        url:'/c_users/changePermission',// 跳转到 action  
        data:{  
          'userID': userid,
          'user_BasicInformationPermission':user_BasicInformationPermission,
          'user_B_User':user_B_User,
          'user_B_Good':user_B_Good,
          'user_B_Supplier':user_B_Supplier,
          'user_B_Client':user_B_Client,
          'user_PurchasePermission':user_PurchasePermission,
          'user_P_QingGouyuan':user_P_QingGouyuan,
          'user_P_DingGouyuan':user_P_DingGouyuan,
          'user_P_YanShouyuan':user_P_YanShouyuan,
          'user_P_ChuNayuan':user_P_ChuNayuan,
          'user_StockPermission':user_StockPermission,
          'user_St_GoodFinder':user_St_GoodFinder,
          'user_St_BillFinder':user_St_BillFinder,
          'user_St_WarningFinder':user_St_WarningFinder,
          'user_SellPermission':user_SellPermission,
          'user_Se_Discount':user_Se_Discount,
          'user_Se_SaleEdit':user_Se_SaleEdit,
          'user_Se_SaleShow':user_Se_SaleShow
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
          if(data.msg =="true") {
            $('#modal-permission').modal("hide");
            $('#modal-prompt-content').text("修改用户权限用户成功");
            document.getElementById('modal-prompt-panel').className = "modal-content panel panel-success";
            $('#modal-prompt').modal('show');
            retable();
          }
          else {
            document.getElementById("permission-username-p").innerHTML="删除失败，出现了一些错误⊙︿⊙";
            document.getElementById("permission-username-div").className="has-error form-group";
          }
        },
        error : function() {
          $('#modal-permission').modal("hide");
          $('#modal-prompt-content').text("删除出现错误，请联系管理员或尝试重新登录");
          document.getElementById('modal-prompt-panel').className = "modal-content panel panel-danger";
          $('#modal-prompt').modal('show');
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
  </script>