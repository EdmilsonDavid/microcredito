<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            <hr style="color: white; width:100%">
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />





    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>Menu</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Dashboard </a>

            </li>
            <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('cliente.create')}}">General Form</a></li>

              </ul>
            </li>
            <li><a><i class="fa fa-credit-card"></i> Emprestimos <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">


              </ul>
            </li>
            <li><a><i class="fa fa-money"></i> Pagamentos <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="tables.html">Tables</a></li>
                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
              </ul>
            </li>


            <li><a><i class="fa fa-bank"></i> Bancos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                </ul>
              </li>

              <li><a><i class="fa fa-tasks"></i> Gestor <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <
                </ul>
              </li>

            <li><a><i class="fa fa-bar-chart-o"></i> Relatorios<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">

              </ul>
            </li>




              <li><a><i class="fa fa-unlock-alt"></i> Controlo de acesso <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="tables.html">Permissoes</a></li>

                </ul>
              </li>

              <li><a><i class="fa fa-cogs"></i> Configuracoes <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="tables.html">Tables</a></li>
                  <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                </ul>
              </li>
          </ul>
        </div>


      </div>
      <!-- /sidebar menu -->




         <!-- /menu footer buttons -->
         <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>

     </div>


</body>
</html>
