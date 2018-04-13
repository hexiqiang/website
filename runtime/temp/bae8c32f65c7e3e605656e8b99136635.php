<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:61:"F:\web\WWW\website\public/../app/admin\view\Category\add.html";i:1523521338;s:50:"F:\web\WWW\website\app\admin\view\public\base.html";i:1523516906;s:52:"F:\web\WWW\website\app\admin\view\public\header.html";i:1523512865;s:50:"F:\web\WWW\website\app\admin\view\public\left.html";i:1523521774;s:52:"F:\web\WWW\website\app\admin\view\public\footer.html";i:1523516901;}*/ ?>
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
                <a href="#"><i class="glyphicon glyphicon-list-alt"></i>文章管理 <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo url('Article/index'); ?>"><i class="glyphicon glyphicon-list"></i>文章列表</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Article/create'); ?>"><i class="glyphicon glyphicon-plus-sign"></i>添加文章</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-th-large"></i>分类管理 <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo url('Category/index'); ?>"><i class="glyphicon glyphicon-list"></i>分类列表</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Category/create'); ?>"><i class="glyphicon glyphicon-plus-sign "></i>添加分类</a>
                    </li>

                </ul>
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
                <h1 class="page-head-line"><a href="<?php echo url('Index/index'); ?>" style="text-decoration: none;">首页</a> > <a href="<?php echo url('Article/index'); ?>">文章列表</a> > 添加文章</h1>
                <!--<h1 class="page-subhead-line"><a href="<?php echo url('Article/create'); ?>" class="btn btn-info btn-lg"><i class="fa fa-edit "></i>添加文章</a></h1>-->

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        添加文章
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>文章分类</label>
                                <select class="form-control" name="cat_id">
                                    <option value="1">分类1</option>
                                    <option value="2">分类1</option>
                                    <option value="3">分类1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>文章标题</label>
                                <input class="form-control" type="text" name="art_title" placeholder="文章标题">
                            </div>
                            <div class="form-group">
                                <label>作者</label>
                                <input class="form-control" type="text" name="art_author" placeholder="作者">
                            </div>
                            <div class="form-group" style="overflow: hidden">
                                <label >封面图</label>
                                <div class="">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div style="float: left;">
                                            <span class="btn btn-file btn-success">
                                                <span class="fileupload-new">选择图片</span>
                                                <span class="fileupload-exists">重选</span>
                                                <input type="file" name="art_thumb">
                                            </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">删除</a>
                                        </div>
                                        &nbsp;
                                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;float: left;margin-left: 8px"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>文章描述</label>
                                <textarea class="form-control" rows="3" name="art_desc"></textarea>
                            </div>
                            <script type="text/javascript" charset="utf-8" src="/static/org/ueditor/ueditor.config.js"></script>
                            <script type="text/javascript" charset="utf-8" src="/static/org/ueditor/ueditor.all.min.js"> </script>
                            <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                            <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                            <script type="text/javascript" charset="utf-8" src="/static/org/ueditor/lang/zh-cn/zh-cn.js"></script>
                            <div class="form-group">
                                <label>文章详情</label>
                                <script id="editor" type="text/plain" style="width:100%;height:300px;" name="art_content"></script>

                                <script>
                                var ue = UE.getEditor('editor');
                                </script>
                            </div>
                            <div class="form-group">
                                <label>点击量</label>
                                <input class="form-control" type="number" value="0" name="art_clcik">
                            </div>


                            <button type="submit" class="btn btn-info">提交 </button>

                        </form>
                    </div>
                </div>
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
