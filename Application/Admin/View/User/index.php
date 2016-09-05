   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>用户列表</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Admin</a>
                        </li>
                        <li>
                            <a>User</a>
                        </li>
                        <li class="active">
                            <strong>index</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                <a href="index.html" class="btn  pull-right">User</a>
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
                                    <th>id</th>
                                    <th>用户</th>
                                    <th>邮箱地址</th>
                                    <th>创建时间</th>
                                    <th>是否激活</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                               <volist name="user" id="p">
                                	<tr>
                                	<td>{$p.id}</td>
                                	    <td><span class="pie">{$p.username}</span></td>
                                      
                                	   <td><span class="pie">{$p.email}</span></td>
                                	 
                                        <td><span class="pie"><?=date('Y-m-d H:i:s',$p['create_time'])?></span></td>
                                          <td><if condition="$p.actived eq 1"> <button class="btn btn-primary btn-xs">已激活 </button><else />未激活 </if></td>
                                	     <td > <a class="btn btn-success btn-sm" href="">禁用</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                	</tr>
                                </volist>                        
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
   </div>