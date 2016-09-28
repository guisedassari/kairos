<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sistema Kairos</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-right">
        <?php echo anchor('adicionar_conta_pagar', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Contas a pagar
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Parcela</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>OBS</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $valorTotal = 0;
                        foreach ($dados as $value) :
                            $valorTotal += (float) $value['valor'];
                            ?>
                            <tr class="odd gradeX">
                                <td><?= $value['nome']; ?></td>
                                <td class="valor text-center">R$ <?= $value['valor']; ?></td>
                                <td><?= $value['parcela']; ?></td>
                                <td><?= $value['data']; ?></td>
                                <td><?= $value['status']; ?></td>
                                <td><?= $value['obs']; ?></td>
                                <td>
                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    &nbsp;&nbsp;
                                    <?= anchor("deletar_conta_pagar/{$value['id_conta_pagar']}", '<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'text-danger']);?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr class="valor-total">
                            <td colspan="3">Valor Total</td>
                            <td colspan="4" class="text-center">R$ <?= $valorTotal; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
