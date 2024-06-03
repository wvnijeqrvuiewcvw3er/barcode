<div class="content-wrapper">
  <div class="page-title">
    <div>
      <h1><i class="fa fa-edit"></i> Prestamos</h1>
    </div>
    <div>
      <ul class="breadcrumb">
        <li><i class="fa fa-home fa-lg"></i></li>
        <li>Actas</li>
        <li><a href="#"><?= $titulo ?> Prestamo</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="row">
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal">
                <fieldset>
                  <legend>Registro</legend>
                  <div class="form-group">
                    <input class="form-control" name="ID" type="hidden">

                    <label class="col-lg-2 control-label" for="Nombre">Codigo</label>
                    <div class="col-lg-10">
                      <input required class="form-control" name="Nombre" type="text" placeholder="Codigo" value="<?= $p->getPro_nom() ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="Fecha">Fecha de prestamo</label>
                    <div class="col-lg-10">
                      <div class="input-group date">
                        <input required class="form-control" name="Fecha" id="Fecha" type="text" placeholder="Fecha">
                        <span class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default" type="reset">Cancelar</button>
                      <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


