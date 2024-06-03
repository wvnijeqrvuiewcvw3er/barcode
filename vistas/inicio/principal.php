
<div class="content-wrapper">
  <div class="page-title">
    <div>
      <h1><i class='fas fa-chart-pie'></i> Estadisticas</h1>
    </div>
    <div>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
        <li><a href="#">Estadisticas</a></li>
      </ul>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <h3 class="card-title">TOTAL DE ACTAS CAPTURADAS</h3>
        <p><?php $p = $this->modelo->Cantidad() ?>
          <?= $p->Cantidad ?>
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <h3 class="card-title">TOTAL DE ACTAS EN PRESTAMO</h3>
        <p><?php $p = $this->modelo->Cantidad() ?>
          <?= $p->Cantidad ?>
        </p>
      </div>
    </div>
  </div>
</div>
</div>