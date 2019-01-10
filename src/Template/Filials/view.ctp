<section class="content-header">
    <h1>
        <?php echo __('Filial'); ?>
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
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('Filial Name') ?></dt>
                        <dd><?= h($filial->filial_name) ?></dd>
                        <dt><?= __('Filial Matriz') ?></dt>
                        <dd><?= empty($filial->matriz) ? h(__('No')) : h(__('Yes')) ?></dd>
                        <dt><?= __('Company') ?></dt>
                        <dd><?= $this->Html->link($filial->company->company_name, ['controller' => 'Companys', 'action' => 'view', $filial->company->id]); ?></dd>
                        <dt><?= __('Description') ?></dt>
                        <dd><?= $this->Text->autoParagraph(h($filial->description)); ?></dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->
</section>
