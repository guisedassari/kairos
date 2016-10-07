<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sistema Kairos</h1>
        <form action="contas"class="form-inline" method="post">
            <div class="form-group">
                <input type="date" name="data" class="form-control" placeholder="Data">
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
        <br>
    </div>
</div>
<?php
if (($this->session->flashdata('success'))) {
    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
} elseif ($this->session->flashdata('danger')) {
    echo '<div class="alert alert-danger">' . $this->session->flashdata('danger') . '</div>';
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Contas a receber</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <?php echo anchor('adicionar_conta_receber', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-primary')); ?>
                    </div>
                </div>
                <br>
                <div style="overflow-x:auto;">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Data</th>
                                <th>OBS</th>
                                <th>Dizimo</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total_receber = 0;
                            $dinheiro = 0;
                            $conta = 0;
                            $dizimo = 0;
                            foreach ($dados_receber as $value) :

                                $total_receber += (float) $value['valor'];
                                if ($value['forma_recebimento'] == 'Dinheiro') {
                                    $dinheiro += (float) $value['valor'];
                                } elseif ($value['forma_recebimento'] == 'Conta') {
                                    $conta += (float) $value['valor'];
                                }
                                if ($value['dizimo'] == 'Sim') {
                                    $dizimo += (float) $value['valor'];
                                }
                                ?>
                                <tr class="odd gradeX">
                                    <td><?= $value['nome']; ?></td>
                                    <td class="valor2 text-justify">R$ <?= real($value['valor']); ?></td>
                                    <td><?= inverteData($value['data']); ?></td>
                                    <td><?= substr($value['obs'], 0, 20); ?></td>
                                    <td class="text-center"><?= $value['dizimo']; ?></td>
                                    <td class="text-center">

                                        <?= anchor("atualizar_conta_receber/{$value['id_conta_receber']}", '<i class="fa fa-pencil-square" aria-hidden="true"></i>', ['class' => 'text-success']); ?>
                                        &nbsp;&nbsp;
                                        <?= anchor("deletar_conta_receber/{$value['id_conta_receber']}", '<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'text-danger']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="valor-total">
                                <td colspan="3">Valor Total</td>
                                <td colspan="3" class="text-center">R$ <?= real($total_receber); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!--Contas a Pagar-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Contas a pagar</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <?php echo anchor('adicionar_conta_pagar', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-primary')); ?>
                    </div>
                </div>
                <br>
                <div style="overflow-x:auto;">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Parcela</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th>OBS</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total_pagar = 0;
                            $pagar_dinheiro = 0;
                            $pagar_cartao = 0;
                            foreach ($dados_pagar as $value) :
                                $total_pagar += (float) $value['valor'];
                                if ($value['forma_pagamento'] == 'Dinheiro') {
                                    $pagar_dinheiro += (float) $value['valor'];
                                } elseif ($value['forma_pagamento'] == 'Cartão') {
                                    $pagar_cartao += (float) $value['valor'];
                                }
                                ?>
                                <tr class="odd gradeX">
                                    <td><?= $value['nome']; ?></td>
                                    <td class="valor text-justify">R$ <?= real($value['valor']); ?></td>
                                    <td class="text-center"><?= $value['parcela']; ?></td>
                                    <td><?= inverteData($value['data']); ?></td>
                                    <td><?= $value['status']; ?></td>
                                    <td><?= substr($value['obs'], 0, 20); ?></td>
                                    <td class="text-center">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                        &nbsp;&nbsp;
                                        <?= anchor("deletar_conta_pagar/{$value['id_conta_pagar']}", '<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'text-danger']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="valor-total">
                                <td colspan="3">Valor Total</td>
                                <td colspan="4" class="text-center">R$ <?= real($total_pagar); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Total Disponivel
            </div>
            <div class="panel-body">
                <?php $total = $total_receber - $total_pagar ?>
                <h3 class="valor-disponivel text-center">R$ <?= real($total); ?></h3>
            </div>
        </div>
    </div>

    <div class="col-lg-3 text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Dinheiro
            </div>
            <div class="panel-body">
                <?php $dinheiro = $dinheiro - $pagar_dinheiro ?>
                <h3 class="valor-disponivel text-center">R$ <?= real($dinheiro); ?></h3>
            </div>
        </div>
    </div>

    <div class="col-lg-3 text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Conta Caixa
            </div>
            <div class="panel-body">
                <?php $conta = $conta - $pagar_cartao ?>
                <h3 class="valor-disponivel text-center">R$ <?= real($conta); ?></h3>
            </div>
        </div>
    </div>

    <div class="col-lg-3 text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Dizimo
            </div>
            <div class="panel-body">
                <?php $dizimo = calcDizimo($dizimo) ?>
                <h3 class="valor-disponivel text-center">R$ <?= real($dizimo); ?></h3>
            </div>
        </div>
    </div>
</div>

