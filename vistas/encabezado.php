<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>JURISDICCION</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a style="background-color: #483d8b;" class="logo" href="index.php">CIS</a>
        <nav style="background-color: #483d8b;" class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="?logout=true"><i class="fa fa-sign-out fa-lg"></i>Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div  class="pull-left image"><img class="img-circle" src="https://www.gob.mx/cms/uploads/structure/main_image/3990/salud-verde-03.jpg" alt="User Image"></div>
            <div style="justify-content: center;" class="pull-left info">
              <p>JURISDICCION</p>
              <p class="center-text">10</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class='fas fa-chart-pie'></i><span> Estadisticas</span></a></li>
            <li class="treeview"><a href="#"><i class='fas fa-file-alt' style='font-size:17px'></i><span> ACTAS DE DEFUNCION</span><i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="index.php?c=registro&a=mostrar"><i class='fas fa-address-book'></i> Registro</a></li>
                <li><a href="?c=producto"><i class='fas fa-calendar-alt'></i> Prestamos</a></li>
            </ul>
            </li>
            <li class="treeview"><a href="#"><i class='fas fa-file-alt' style='font-size:17px'></i><span> ACTAS DE NACIMIENTO</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class='fas fa-address-book'></i> Registro</a></li>
                <li><a href="?c=adnp"><i class='fas fa-calendar-alt'></i> Prestamos</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>