<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Adicionar uma nova conta</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Conta a Receber</div>
            <div class="panel-body">
                <form action="adicionar_conta_receber" method="post">
                    <?php
                    $date = date('Y-m-d');
                    ?>
                    <input type="date" class="hidden" name="data" placeholder="Nome" value="<?= $date;?>">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <input type="number" class="form-control" name="valor" placeholder="Valor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <select class="form-control" name="dizimo">
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <textarea name="obs" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>