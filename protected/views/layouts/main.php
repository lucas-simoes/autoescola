<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/select2/dist/css/select2.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo Yii::app()->baseUrl; ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>ESC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b> Escola</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo Yii::app()->baseUrl; ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo !Yii::app()->user->isGuest?Yii::app()->user->Nome:'Visitante'; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo Yii::app()->baseUrl; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo !Yii::app()->user->isGuest?Yii::app()->user->Nome:'Visitante'; ?>                  
                </p>
              </li>
              <!-- Menu Body -->              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                    <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
    <div class="col-lg-12 col-md-12" style="background-color: red">
        <?php 
            $data1 = new DateTime( '2018-06-7' );
            $data2 = new DateTime(date('y-m-d', time()));

            $intervalo = $data1->diff( $data2 );
        ?>
        <p style="text-align: center; color: white">
            <strong>
                Atenção! O prazo de validade da licença do sistema expira em <?php echo $intervalo->d; ?> dias!
                Por favor entre em contato com o suporte.
            </strong></p>
    </div>   
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo Yii::app()->baseUrl; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p><?php echo !Yii::app()->user->isGuest?Yii::app()->user->Nome:'Visitante'; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Clientes</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('clientes/create') ?>"><i class="fa fa-plus-circle"></i> Novo Cliente</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('clientes/admin') ?>"><i class="fa fa fa-list"></i> Lista de Clientes</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Orçamentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo Yii::app()->createUrl('orcamentos/create') ?>"><i class="fa fa-plus-circle"></i> Novo Orçamento</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('orcamentos/admin') ?>"><i class="fa fa fa-list"></i> Lista de Orçamentos</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-product-hunt"></i>
            <span>Produtos/Serviços</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('produto_servico/create') ?>"><i class="fa fa-plus-circle"></i> Novo Produto/Serviço</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('produto_servico/admin') ?>"><i class="fa fa fa-list"></i> Lista de Produtos/Serviço</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i> <span>Categorias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo Yii::app()->createUrl('categorias/create') ?>"><i class="fa fa-plus-circle"></i> Nova Categoria</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('categorias/admin') ?>"><i class="fa fa fa-list"></i> Lista de Categorias</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Modalidades</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('modalidades/create') ?>"><i class="fa fa-plus-circle"></i> Nova Modalidade</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('modalidades/admin') ?>"><i class="fa fa fa-list"></i> Lista de Modalidades</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Cidades</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('cidades/create') ?>"><i class="fa fa-plus-circle"></i> Nova Cidade</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('cidades/admin') ?>"><i class="fa fa fa-list"></i> Lista de Cidades</a></li>
          </ul>
        </li>
                  
        <?php if (Yii::app()->user->isAdmin){  ?>
        <li class="treeview">        
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Usuários</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('usuarios/create') ?>"><i class="fa fa-plus-circle"></i> Novo Usuário</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('usuarios/admin') ?>"><i class="fa fa fa-list"></i> Lista de Usuários</a></li>
          </ul>
        </li>
        <?php }  ?> 
        
        <?php if (Yii::app()->user->isAdmin){  ?>
        <li class="treeview">        
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Empresas</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('empresas/create') ?>"><i class="fa fa-plus-circle"></i> Nova Empresa</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('empresas/admin') ?>"><i class="fa fa fa-list"></i> Lista de Empresas</a></li>
          </ul>
        </li>
        <?php }  ?>
        
        <?php if (Yii::app()->user->isAdmin){  ?>
        <li class="treeview">        
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Configurações</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('cofiguracoes/create') ?>"><i class="fa fa-plus-circle"></i> Configurações</a></li>
          </ul>
        </li>
        <?php }  ?> 
        
        <?php if (Yii::app()->user->isAdmin){  ?>
        <li class="treeview">        
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Contratos</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->createUrl('contratos/create') ?>"><i class="fa fa-plus-circle"></i> Novo Contrato</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('contratos/admin') ?>"><i class="fa fa fa-list"></i> Lista de Contratos</a></li>
          </ul>
        </li>
        <?php }  ?> 
        
   
        <li hidden="true" class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo $content; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/raphael/raphael.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/dist/js/demo.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/dist/js/autoescola.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/dist/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.mask.min.js"></script>
</body>
</html>
