<section class="content-header">
    <h1>
        Login Tab
        <small><?= __('Edit') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false]) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Form') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                // debug($loginTab);
                foreach ($loginTab as $loginTab) {
                    $login = $loginTab;
                }
                // debug($login);
                ?>
                <?= $this->Form->create($login, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('nome_autorizador');
                    echo $this->Form->input('senha_autorizador');
                    echo $this->Form->input('online');
                    echo $this->Form->input('Usuários');
                    echo $this->Form->input('formulario');
                    echo $this->Form->input('Alterar');
                    echo $this->Form->input('Relatorio');
                    echo $this->Form->input('Setor');
                    echo $this->Form->input('Apagar');
                    echo $this->Form->input('Funcionario');
                    echo $this->Form->input('Honorario');
                    echo $this->Form->input('ContatoInicial');
                    echo $this->Form->input('Supervisao');
                    echo $this->Form->input('ContaCorrente');
                    echo $this->Form->input('Situacao');
                    echo $this->Form->input('unidade');
                    echo $this->Form->input('ConfCOnt');
                    echo $this->Form->input('Unid');
                    echo $this->Form->input('Distrib');
                    echo $this->Form->input('GestJur');
                    echo $this->Form->input('Recep');
                    echo $this->Form->input('GerencFinanc');
                    echo $this->Form->input('GerenciaJur');
                    echo $this->Form->input('GerencAdm');
                    echo $this->Form->input('GerencRecep');
                    echo $this->Form->input('GT');
                    echo $this->Form->input('Autoriza');
                    echo $this->Form->input('PedirValor');
                    echo $this->Form->input('Profissao');
                    echo $this->Form->input('SupervSetor');
                    echo $this->Form->input('Prazos');
                    echo $this->Form->input('JPA');
                    echo $this->Form->input('ADV');
                    echo $this->Form->input('DCC');
                    echo $this->Form->input('JPJEstag');
                    echo $this->Form->input('codquadpessoal');
                    echo $this->Form->input('homolog');
                    echo $this->Form->input('isAtSimultaneo');
                    ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Save')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

