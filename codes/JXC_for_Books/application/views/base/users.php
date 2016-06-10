<div id="page-wrapper" style="min-height: 368px;">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">主页</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">考试信息查询</div>
        <!-- /.panel-heading -->    
        <div class="panel-body">
          <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row" style="margin-bottom: 20px">
              <div class="col-sm-6">
                <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">添加用户</button>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-danger" data-toggle="modal" data-target="#modal-deleteall">删除选中用户</button>
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
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>用户名</th>
                      <th>密码</th>
                      <th>查看权限</th>
                      <th>编辑</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>admin</td>
                      <td><button  class='btn-password btn btn-warning btn-sm' type='button' onclick='password(this)' data-toggle='modal' data-target='#modal-password'>查看/修改密码</button>
                      </td>
                      <td><button  class='btn-permision btn btn-info btn-sm' type='button' onclick='permission(this)' data-toggle='modal' data-target='#modal-permision'>查看/修改权限</button></td>
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
                <input id="create-username" class="form-control" placeholder="请输入4-11位用户名" type="text" onblur="verifylength(4,11,'create-submit')">
                <p id="create-username-p" class="help-block"></p>
              </div>
            </div>
            <div class="form-group" id="create-password-div">
              <label for="create-password" class="col-sm-3 control-label">密码</label>
              <div class="col-sm-7">
                <input id="create-password" class="form-control" placeholder="请输入4-16位密码" value="" type="password" onblur="verifylength(4,16,'create-submit')">
                <p id="create-password-p" class="help-block"></p>
              </div>
            </div>
            <div class="form-group" id="create-div-password4sure">
              <label for="create-password4sure" class="col-sm-3 control-label">确认密码</label>
              <div class="col-sm-7">
                <input id="create-password4sure" class="form-control" placeholder="请重新输入刚才的密码" value="" type="password" onblur="verify4sure('create-password','create-submit')">
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
              <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group input-group" id="password-verify-div">
                  <input id="password-verify" class="form-control" placeholder="请输入当前账号密码以验证权限" type="password">
                  <span class="input-group-btn">
                      <button id="password-verify-submit" class="btn btn-warning" type="button" onclick="verifyPassword4password()"><i class="fa fa-unlock"> 验证</i>
                      </button>
                  </span>
                </div>
              </div>
              <div class="form-group" id="password-password-div">
                <label for="password-password" class="col-sm-3 control-label">密码</label>
                <div class="col-sm-7">
                  <input id="password-password" class="form-control" value="" type="text" disabled>
                </div>
              </div>
            </div>
            <div class="form-group" id="password-password-div">
              <label for="password-password" class="col-sm-3 control-label">修改密码</label>
              <div class="col-sm-7">
                <input id="password-password" class="form-control" placeholder="请输入4-16位密码" value="" type="password" onblur="verifylength(4,16,'password-submit')">
                <p id="password-password-p" class="help-block"></p>
              </div>
            </div>
            <div class="form-group" id="password-div-password4sure">
              <label for="password-password4sure" class="col-sm-3 control-label">确认修改密码</label>
              <div class="col-sm-7">
                <input id="password-password4sure" class="form-control" placeholder="请重新输入刚才的密码" value="" type="password" onblur="verify4sure('password-password','password-submit')">
                <p id="password-password4sure-p" class="help-block"></p>
              </div>
            </div>
          </div>
          <div class="modal-footer panel-footer">
            <button id="password-submit" class='btn btn-warning' type='button' onclick="createsubmit()">确定</button>
            <button class='btn btn-default' type='button'  data-dismiss="modal">关闭</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- 查看/修改权限 -->
  <div class="modal fade model" id="modal-permision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content panel panel-info">
        <form class="form-horizontal">
          <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">查看/修改权限</h4>
          </div>
          <div class="modal-body panel-body" id="modal-permision-body">
            这块应该是个表格
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
          你真的要删除以下用户么？
          <div class="form-group">
            <label for="dele-username" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-7">
              <input id="dele-username" class="form-control" placeholder="" value="" type="text" disabled>
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
    function verifylength(min,max,submit) {
      var that = window.event.target;
      if(that.value.length < min || that.value.length > max) {
        console.log("er: "+ that.value);
        that.nextElementSibling.innerHTML = "请输入正确长度";
        that.parentNode.parentNode.className = "has-error form-group";
        document.getElementById(submit).disabled = true;
      } else {
        console.log(that.value);
        that.nextElementSibling.innerHTML = "";
        that.parentNode.parentNode.className = "has-success form-group";
        document.getElementById(submit).disabled = false;
      }
    }
    function verify4sure(element,submit) {
      var ele = document.getElementById(element);
      var that = window.event.target;
      console.log(ele);
      if(ele.value === that.value) {
        that.nextElementSibling.innerHTML = "";
        that.parentNode.parentNode.className = "has-success form-group";
        document.getElementById(submit).disabled = false;
      } else {
        that.nextElementSibling.innerHTML = "两次密码输入不一致";
        that.parentNode.parentNode.className = "has-error form-group";
        document.getElementById(submit).disabled = true;
      }
    }
  </script>
  <script type="text/javascript">
    var table = function (){
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
          ajax: "/Baseuser/getAllUsers",
          columns: [
          { "data": "id" },
          { "data": "username" },
          { "data": null, "title":"操作","defaultContent": "<button  class='btn-password btn btn-warning btn-sm' type='button' onclick='password(this)' data-toggle='modal' data-target='#panel-password'>查看/修改密码</button>" },
          { "data": null, "title":"操作","defaultContent": "<button  class='btn-permission btn btn-info btn-sm' type='button' onclick='permission(this)' data-toggle='modal' data-target='#panel-permission'>查看/修改权限</button>" },
          { "data": null, "title":"操作","defaultContent": "<button  class='btn-delete btn btn-danger btn-sm' type='button' onclick='delete(this)' data-toggle='modal' data-target='#panel-delete'>删除</button>"}
          ],
          select: true
        });
      }
    }

    $(document).ready(function() {
    // table();
    });
    function createsubmit() {
      var username = $("#create-username").val();
      var password = $("#create-password").val();

      $.ajax( {  
        url:'/Baseuser/createuser',// 跳转到 action  
        data:{  
          'username': username,
          'password': password
        },
        type:'post',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {  
          if(data.msg =="true") {
            $('#modal-create').modal("hide");
            $('#modal-create-body').children(".form-group").attr("class","form-group");
            $('#modal-create-body').find(".form-control").val("");
            document.getElementById('create-submit').disabled = false;
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
          $('#modal-create-body').children(".form-group").attr("class","form-group");
          $('#modal-create-body').find(".form-control").val("");
          document.getElementById('create-submit').disabled = false;
          alert("创建出现错误，请联系管理员或尝试重新登录");
        }  
      });
    }

    function deletesubmit() {
      changing("#dele-prompt");
      var e_date = $("#dele-e_date").val();
      var e_stime = $("#dele-e_stime").val();
      var e_etime = $("#dele-e_etime").val();
      var e_name = $("#dele-e_name").val();
      var e_room = $("#dele-e_room").val();
      $.ajax( { 
            url:'/Baseuser/deleteexam',// 跳转到 action  
            data:{  
              'date': e_date,
              'stime': e_stime,
              'etime': e_etime,
              'name': e_name,
              'room': e_room
            },
            type:'post',  
            cache:false,
            async:false,
            dataType:'json',  
            success:function(data) {  
              if(data.msg == true){
                $("#dele-prompt").animate({opacity:1},1000,function() {
                  $("#dele-prompt").text("成功删除考试"+e_name);
                  changed("#dele-prompt");
                });
              }else{
                $("#dele-prompt").text("");
                alert(data.msg);
              }
            },
            error : function() {
              $("#dele-prompt").text(""); 
              alert("删除出现错误，请联系管理员或尝试重新登录");
            }  
          });
    }
  </script>