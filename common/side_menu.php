<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="images/user.png" class="img-circle" style="max-width: 100%;" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_COOKIE['user_name']; ?></p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="index.php">
                    <span>用户中心</span>
                </a>
            </li>

            <li>
                <a href="add_site.php">
                    <span>添加网站</span>
                </a>
            </li>

            <li>
                <a href="query_orders.php">
                    <span>订单查询</span>
                </a>
            </li>	
			<li>
                <a href="query_customers.php">
                    <span>客户查询</span>
                </a>
            </li>
			<li>
                <a href="products_update.php">
                    <span>商品更新</span>
                </a>
            </li>
		
        </ul>
    </section>
        
</aside>