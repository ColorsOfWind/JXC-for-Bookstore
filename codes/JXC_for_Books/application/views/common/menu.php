            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/setting"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
				        <li>
				            <a id="base" href="/base"><i class="fa fa-tachometer fa-fw"></i> 基础信息管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="base_users" href="/c_users/users">用户管理</a>
				                </li>
				                <li>
				                    <a id="base_goods" href="/b_goods">商品管理</a>
				                </li>
				                <li>
				                    <a id="base_suppliers" href="/b_suppliers">供应商管理</a>
				                </li>
				            </ul>
				        </li>     
				        <li>
				            <a id="purchase" href="/purchase"><i class="fa fa-tachometer fa-fw"></i> 进货管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="purchase_typelists" href="/c_purchase/index">填写进货单</a>
				                </li>
				                <li>
				                    <a id="purchase_typelists" href="/purchase_typelists">审核进货单</a>
				                </li>
				            </ul>
				        </li>				                       
				        <li>
				            <a id="stock" href="/stock"><i class="fa fa-tachometer fa-fw"></i> 库存管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="stock_users" href="/s_querys">商品查询</a>
				                </li>
				                <li>
				                    <a id="stock_users" href="/s_querys">库存盘点</a>
				                </li>
				            </ul>
				        </li>    
				        <li>
				            <a id="sales" href="/sales"><i class="fa fa-tachometer fa-fw"></i> 销售管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="sales_users" href="/s_querys">前台销售</a>
				                </li>
				                <li>
				                    <a id="sales_users" href="/s_querys">库存盘点</a>
				                </li>
				            </ul>
				        </li> 
                    </ul>                                                
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>