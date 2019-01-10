<section class="content-header">
    <h1>    
        <?= __('Client') ?>
        <small><?= __('Add') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a style="cursor: pointer;" onClick="window.history.back()"><i class="fa fa-dashboard"></i> <?= __('Back') ?></a>
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
                <?= $this->Form->create($client, ['role' => 'form']) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('client_name');
                    echo $this->Form->input('razao_social');
                    echo $this->Form->control('cnpj', ['id' => 'cnpj']);
                    echo $this->Form->control('cpf', ['id' => 'cpf']);
                    echo $this->Form->input('users_id', ['options' => $users]);
                    echo $this->Form->input('filial_id', ['options' => $filials]);
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
    <?= $this->Html->script('jquery.maskedinput.min'); ?>
    <?= $this->Html->script('cpjcnpj'); ?>
</section>

