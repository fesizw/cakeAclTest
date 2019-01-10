<section class="content-header">
    <h1>
        Cliente
        <small><?= __('Add') ?></small>
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
                <?= $this->Form->create($cliente, ['role' => 'form']) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('filiacao_materna');
                    echo $this->Form->input('nacionalidade');
                    echo $this->Form->input('naturalidade');
                    echo $this->Form->input('rg');
                    echo $this->Form->input('orgao_exp_rg');
                    echo $this->Form->input('cpf');
                    echo $this->Form->input('cnpj');
                    echo $this->Form->input('ctps');
                    echo $this->Form->input('pis_pasep');
                    echo $this->Form->input('data_nascimento', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
                    echo $this->Form->input('origem');
                    echo $this->Form->input('observacao');
                    echo $this->Form->input('cad_senha');
                    echo $this->Form->input('foto');
                    echo $this->Form->input('tipo_cliente_id', ['options' => $tipoClientes]);
                    echo $this->Form->input('capacidade_civil_id', ['options' => $capacidadeCivils]);
                    echo $this->Form->input('estado_civil_id', ['options' => $estadoCivils]);
                    echo $this->Form->input('user_id', ['options' => $users]);
                    echo $this->Form->input('profissao_id', ['options' => $profissaos]);
                    echo $this->Form->input('sexo_id', ['options' => $sexos]);
                    echo $this->Form->input('unidade_id', ['options' => $unidades]);
                    echo $this->Form->input('empresa_id', ['options' => $empresas]);
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

<?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
        ], ['block' => 'css']);

$this->Html->script([
    'AdminLTE./plugins/input-mask/jquery.inputmask',
    'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
    'AdminLTE./plugins/datepicker/bootstrap-datepicker',
    'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
        ], ['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        //Datemask mm/dd/yyyy
        $(".datepicker")
                .inputmask("mm-dd-yyyy", {"placeholder": "mm-dd-yyyy"})
                .datepicker({
                    language: 'en',
                    format: 'mm-dd-yyyy'
                });
    });
</script>
<?php $this->end(); ?>
        