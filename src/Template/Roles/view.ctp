<section class="content-header">
    <h1>
        <?php echo __('Role'); ?>
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
                        <dt><?= __('Role Name') ?></dt>
                        <dd><?= h($role->role_name) ?></dd>
                        <dt><?= __('Filial Name') ?></dt>
                        <dd><?= $role->has('filial_id') ? $this->Html->link($role->filial->filial_name, ['controller' => 'Filials', 'action' => 'view', $role->filial->id]) : '' ?></dd>
                        <dt><?= __('Description') ?></dt>
                        <dd><?= $this->Text->autoParagraph(h($role->description)); ?></dd>                    
                        <dt><?= __('Roles') ?></dt>
                        <dd><?= $this->Text->autoParagraph(h($role->roles)); ?></dd>
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
