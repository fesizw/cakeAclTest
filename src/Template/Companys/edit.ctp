<section class="content-header">
    <h1>
        <?php echo __('Company'); ?>
        <small><?= __('Edit') ?></small>
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
                <?= $this->Form->create($company, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('cnpj', ['id' => 'cnpj']);
                    echo $this->Form->control('cpf', ['id' => 'cpf']);
                    ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Save'), ['onclick' => 'unMask();', 'class' => 'btn btn-success btn-flat']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    <?= $this->Html->script('jquery.maskedinput.min'); ?>
    <?= $this->Html->script('cpjcnpj'); ?>
</section>
