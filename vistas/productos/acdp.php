<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1>Prestamos</h1>
            <ul class="breadcrumb side">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Tables</li>
                <li class="active"><a href="#">Prestamos</a></li>
            </ul>
        </div>
        <div><a class="btn btn-primary btn-flat" href="?c=producto&a=FormCrear"><i class="fa fa-lg fa-plus"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CÓDIGO</th>
                                <th>Fecha de préstamo</th>
                                <th>Persona que recibe</th>
                                <th>Persona que devuelve</th>
                                <th>Días en préstamo</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->modelo->Listar() as $r) : ?>
                                <tr>
                                    <td><?= $r->pro_id ?></td>
                                    <td><?= $r->pro_nom ?></td>
                                    <td><?= $r->pro_fecha ?></td>
                                    <td><?= $r->pro_mar ?></td>
                                    <td><?= $r->pro_img ?></td>
                                    <td>
                                        <?php
                                        $loanDate = new DateTime($r->pro_fecha);
                                        $currentDate = new DateTime();
                                        $difference = $currentDate->diff($loanDate);
                                        $daysInLoan = $difference->days;
                                        echo $daysInLoan;
                                        ?>
                                    </td>
                                    <td style="background-color: 
        <?php 
            // Determine background color based on number of days in loan
            if ($daysInLoan >= 1 && $daysInLoan <= 7) {
                echo 'gray';
            } elseif ($daysInLoan >= 8 && $daysInLoan <= 15) {
                echo 'yellow';
            } elseif ($daysInLoan > 16) {
                echo 'red';
            } else {
                echo 'white'; // Default background color
            }
        ?>;">
        <?= $r->pro_pre ?>
    </td>
                                    <td>
                                        <a class="btn btn-info btn-flat" href="?c=producto&a=FormCrear&id=<?= $r->pro_id ?>">
                                            <i class="fa fa-lg fa-refresh"></i>
                                        </a>
                                        <a class="btn btn-warning btn-flat" href="?c=producto&a=Borrar&id=<?= $r->pro_id ?>">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                        <a class="btn btn-success btn-flat" href="?c=producto&a=Check&id=<?= $r->pro_id ?>">
                                            <i class="fa fa-lg fa-check"></i>
                                        </a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>