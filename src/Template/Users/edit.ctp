<section class="content-header">
    <h1>
        User
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
                <?= $this->Form->create($user, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('login');
                    echo $this->Form->control('senha', ['type' => 'password', 'value' => '']);
                    echo $this->Form->control('foto');
                    echo $this->Form->control('grupo_id', ['options' => $grupos]);
                    echo $this->Form->control('unidade_id', ['options' => $unidades]);
                    echo $this->Form->control('empresa_id', ['options' => $empresas]);
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

