<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sistema Kairos</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-right">
        <?php echo anchor('adicionar_conta_receber', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Contas a receber
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Data</th>
                            <th>OBS</th>
                            <th>Dizimo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>Data System</td>
                            <td>R$ 120,00</td>
                            <td>09/09/2016</td>
                            <td>Teste</td>
                            <td>Sim</td>
                            <td>Editar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
