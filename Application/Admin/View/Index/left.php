<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center"> <span>
                        <img alt="image" class="img-circle" src="__PUBLIC__/admin/img/profile_small.jpg"  />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{:session("admin_name")}</strong>

                        </span></span>  </a>
                 
                </div>
                <div class="logo-element">
                   {:session("admin_name")}
                </div>


            </li>
            <li <if condition="CONTROLLER_NAME eq 'Order'" >class="active"</if>>
                <a><i class="fa fa-newspaper-o"></i> <span class="nav-label">订单管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{:U('Admin/Order/index')}">订单展示</a>
                    </li>
                        
                </ul>
            </li>
            <li <if condition="CONTROLLER_NAME eq 'Productcatalog'" >class="active"</if>>
                <a><i class="fa fa-align-justify"></i> <span class="nav-label">分类管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php U('Productcatalog/index')?>">分类展示</a></li>
                     <li><a href="<?php U('Productcatalog/add')?>">分类添加</a></li>
                    
                </ul>
            </li >
            <li <if condition="CONTROLLER_NAME eq 'Product'" >class="active"</if>>
                <a><i class="fa fa-apple"></i> <span class="nav-label">商品管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php U('Product/index')?>">商品展示</a></li>
                    <li><a href="<?php U('Product/add')?>">商品添加</a></li>
                  
                    
                </ul>
            </li>
            <li <if condition="CONTROLLER_NAME eq 'User'" >class="active"</if>>
                <a><i class="fa fa-group"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php U('User/index')?>">用户列表</a></li>
                    
                </ul>
            </li>
            <li <if condition="CONTROLLER_NAME eq 'web'" >class="active"</if>>
                <a href="<?php U('Product/index')?>"> <i class="fa fa-wrench"></i> <span class="nav-label">网站设置</span> </a>
            </li>
         
        </ul>

    </div>
</nav>