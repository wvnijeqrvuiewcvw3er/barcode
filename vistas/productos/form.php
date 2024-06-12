<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-edit"></i> Productos</h1>
            <p>Ingresa los datos para registrar un producto nuevo</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Productos</li>
                <li><a href="#"><?=$titulo?> Producto</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="well bs-component">
                            <form class="form-horizontal" method="POST" action="?c=producto&a=Guardar">
                                <fieldset>
                                    <legend><?=$titulo?> Producto</legend>
                                    <div class="form-group">
                                        <input class="form-control" name="ID" type="hidden" value="<?=$p->getPro_id()?>">

                                        <label class="col-lg-2 control-label" for="Nombre">Codigo</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Nombre" type="text" placeholder="Codigo" value="<?=$p->getPro_nom()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Marca">Persona que recibe</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Marca" type="text" placeholder="Persona que recibe" value="<?=$p->getPro_mar()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Costo">Costo</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Costo" type="number" placeholder="Costo" value="<?=$p->getPro_cos()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Precio">Precio</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Precio" type="text" placeholder="Precio" value="<?=$p->getPro_pre()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Cantidad">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Cantidad" type="number" placeholder="Cantidad" value="<?=$p->getPro_can()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Imagen">Persona que devuelve</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="Imagen" type="text" placeholder="Persona que devuelve" value="<?=$p->getPro_img()?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Fecha">Fecha</label>
                                        <div class="col-lg-10">
                                            <input required class="form-control" name="Fecha" type="date" placeholder="Fecha" value="<?=$p->getPro_fecha()?>">
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
