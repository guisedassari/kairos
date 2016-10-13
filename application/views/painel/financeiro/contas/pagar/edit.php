<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Atualizar conta a pagar</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Conta a Pagar</div>
            <div class="panel-body">
                <form action="atualizar_conta_pagar" method="post">
                    <?php
                    $date = date('Y-m-d');
                    ?>
                    <input type="date" class="hidden" name="modifield" placeholder="Nome" value="<?= $date;?>">
                    <input type="text" class="hidden" name="id_conta_pagar" placeholder="id" value="<?= $dados->id_conta_pagar;?>">
                    <div class="">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?= $dados->nome;?>">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group col-lg-3">
                            <input type="text" class="form-control" name="valor" placeholder="Valor" value="<?= $dados->valor;?>">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group col-lg-3">
                            <input type="text" class="form-control" name="parcela" placeholder="Parcela" value="<?= $dados->parcela;?>">
                        </div>
                    </div>
                     <div class="">
                        <div class="form-group col-lg-4">
                            <input type="date" class="form-control" name="data" placeholder="Data" value="<?= $dados->data;?>">
                        </div>
                    </div>
                    <div class="">
                        <div class="col-lg-4">
                            <select class="form-control" name="status">
                                <option <?= ($dados->status == 'Pendente') ? ('selected') : ('');?>>Pendente</option>
                                <option <?= ($dados->status == 'Concluido') ? ('selected') : ('');?>>Concluido</option>
                            </select>
                        </div>
                    </div>
                     <div class="">
                        <div class="col-lg-4">
                            <select class="form-control" name="forma_pagamento">
                                <option <?= ($dados->forma_pagamento == 'Dinheiro') ? ('selected') : ('');?>>Dinheiro</option>
                                <option <?= ($dados->forma_pagamento == 'Cartão') ? ('selected') : ('');?>>Cartão</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="form-group col-lg-12">
                            <textarea name="obs" class="form-control" rows="3"><?= $dados->obs;?></textarea>
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