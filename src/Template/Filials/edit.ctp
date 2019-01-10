<section class="content-header">
    <h1>
        <?= __('Filial') ?>
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
                <?= $this->Form->create($filial, ['role' => 'form']) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('filial_name');
                    echo $this->Form->input('description');
                    echo $this->Form->control('matriz');
                    echo $this->Form->input('company_id', ['options' => $companys]);
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


