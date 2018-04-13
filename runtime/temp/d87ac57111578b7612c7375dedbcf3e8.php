<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:61:"F:\web\WWW\website\public/../app/admin\view\article\list.html";i:1523514957;s:50:"F:\web\WWW\website\app\admin\view\public\base.html";i:1523516906;s:52:"F:\web\WWW\website\app\admin\view\public\header.html";i:1523512865;s:50:"F:\web\WWW\website\app\admin\view\public\left.html";i:1523513287;s:52:"F:\web\WWW\website\app\admin\view\public\footer.html";i:1523516901;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>中金管理系统后台</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="/static/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/static/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="/static/admin/assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />

    <link href="/static/admin/assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="/static/admin/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">登录成功！！！</a>
    </div>

    <div class="header-right">

        <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
        <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
        <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

    </div>
</nav>
    <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="/static/admin/assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        管理员
                        <br />
                        <small>登录时间 : <?php echo date('m-d H:s',$logintime ); ?></small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="<?php echo url('Index/index'); ?>"><i class="fa fa-dashboard "></i>首页</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>常用操作 <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo url('Article/index'); ?>"><i class="glyphicon glyphicon-list"></i>文章列表</a>
                    </li>
                    <li>
                        <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="notification.html"><i class="fa fa-bell "></i>Notifications</a>
                    </li>
                    <li>
                        <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                    </li>
                    <li>
                        <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                    </li>
                    <li>
                        <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                    </li>
                    <li>
                        <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                    </li>
                    <li>
                        <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                    </li>
                    <li>
                        <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                    </li>
                    <li>
                        <a href="component.html"><i class="fa fa-key "></i>Components</a>
                    </li>
                    <li>
                        <a href="social.html"><i class="fa fa-send "></i>Social</a>
                    </li>

                    <li>
                        <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="table.html"><i class="fa fa-flash "></i>Data Tables </a>

            </li>
            <li>
                <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                    </li>
                    <li>
                        <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
            </li>
            <li>
                <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
            </li>
            <li>
                <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>

            <li>
                <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
            </li>
        </ul>

    </div>

</nav>
        
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"><a href="<?php echo url('Index/index'); ?>" style="text-decoration: none;">首页</a> > 文章列表</h1>
                <h1 class="page-subhead-line"><a href="<?php echo url('Article/create'); ?>" class="btn btn-info btn-lg"><i class="fa fa-edit "></i>添加文章</a></h1>

            </div>
        </div>
        <!-- /. ROW  -->

        <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        列表
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th width="20">ID</th>
                                    <th>标题</th>
                                    <th>描述</th>
                                    <th>作者</th>
                                    <th>点击量</th>
                                    <th>发布时间</th>
                                    <th width="12%">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>这是文章</td>
                                    <td>这是描述</td>
                                    <td>文章作者</td>
                                    <td>22</td>
                                    <td>2018/05/12</td>
                                    <td><a href="#" class="btn btn-info"><i class="fa fa-edit "></i> 修改</a> &nbsp; <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-trash"></i> 删除</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>
        </div>
    </div>
</div>

    </div>
    <div id="footer-sec">
    &copy; 2014 YourCompany | More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
</div>



    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="/static/admin/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="/static/admin/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/static/admin/assets/js/bootstrap-fileupload.js"></script>
    <script src="/static/admin/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="/static/admin/assets/js/custom.js"></script>
</body>
</html>
