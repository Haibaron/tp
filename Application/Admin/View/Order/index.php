   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>订单展示</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Order</a>
                        </li>
                        <li class="active">
                            <strong>index</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                <a href="index.html" class="btn  pull-right">Order</a>
                </div>
            </div>

   <div class="wrapper wrapper-content">
         
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-hover" width="800px">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>用户</th>
                                    <th>配送地址</th>
                                    <th>下单时间</th>
                                    <th>总金额</th>
                                    <th>状态</th>
                                 
                                    
                                </tr>
                                </thead>
                                <tbody>

                               <volist name="orders" id="p">
                                	<tr>
                                     <td>{$p.id}</td>
                            
                                	 <td><span class="pie">{$p.user_name}</span></td>
                                	     
                                     <td>{$p.address_address}</td>
                                     <td>{$p.create_time}</td>
                                     <td>{$p.num}</td>
                                	 <td>{$p.staut}</td>
                                	  
                                	
                                	</tr>
                                </volist>                        
                                </tbody>
                            </table>
                           {$page}
                        </div>
                    </div>
   </div>
    <script  src="__PUBLIC__/Admin/lightbox/js/lightbox.js"></script>