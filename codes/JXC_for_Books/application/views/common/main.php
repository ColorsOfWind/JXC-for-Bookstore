<div id="page-wrapper" style="min-height: 368px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">主页</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    &#9756;请在左侧选择功能
                </div>
            </div>
        </div>
        <div class=" col-sm-offset-3 col-sm-3">
        	<div id="normal-panel" class="panel">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-tasks fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div id="normal-huges" class="huge">--</div>
                          <div id="normal-pmts" >库存预警书籍数量加载中</div>
                      </div>
                  </div>
              </div>
              <a href="/c_stock/stockwarning">
                  <div class="panel-footer">
                      <span class="pull-left">点击查看详细信息</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
        </div>
    </div>

</div>
<script type="text/javascript">
function checkWaringNumbers() {
    $.ajax( {  
        url:'/c_stock/checkWaringNumbers',// 跳转到 action  
        data:{
        },
        type:'get',
        cache:false,
        async:true,
        dataType:'json',
        success:function(data) {
          if(data.num == 0) {
            $("#normal-panel").addClass("panel-green")
            $("#normal-huges").text(data.num);
            $("#normal-pmts").text("无库存预警书籍");
          }
          else {
            $("#normal-panel").addClass("panel-yellow")
            $("#normal-huges").text(data.num);
            $("#normal-pmts").text("有库存预警书籍");            
          }
        },
        error : function() {
            $("#normal-panel").addClass("panel-red")
            $("#normal-huges").text(data.num);
            $("#normal-pmts").text("库存预警书籍加载失败");  
        }  
    });
}
  $(document).ready(function() {
    checkWaringNumbers();
  });
</script>

