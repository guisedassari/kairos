<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Adicionar uma nova conta</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Conta a Pagar</div>
            <div class="panel-body">
                <form action="adicionar_conta_pagar" method="post">
                    <?php
                    $date = date('Y-m-d');
                    ?>
                    <input type="date" class="hidden" name="created" placeholder="Nome" value="<?= $date;?>">
                    <div class="">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group col-lg-3">
                            <input type="text" class="form-control" name="valor" placeholder="Valor">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group col-lg-3">
                            <input type="text" class="form-control" name="parcela" placeholder="Parcela">
                        </div>
                    </div>
                     <div class="">
                        <div class="form-group col-lg-4">
                            <input type="date" class="form-control" name="data" placeholder="Data">
                        </div>
                    </div>
                    <div class="">
                        <div class="col-lg-4">
                            <select class="form-control" name="status">
                                <option>Pendente</option>
                                <option>Concluido</option>
                            </select>
                        </div>
                    </div>
                     <div class="">
                        <div class="col-lg-4">
                            <select class="form-control" name="forma_pagamento">
                                <option>Dinheiro</option>
                                <option>Cartão</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="form-group col-lg-12">
                            <textarea name="obs" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>