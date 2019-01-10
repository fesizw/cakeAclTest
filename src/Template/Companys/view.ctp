<section class="content-header">
    <h1>
        <?php echo __('Company'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a style="cursor: pointer;" onClick="window.history.back()"><i class="fa fa-dashboard"></i> <?= __('Back') ?></a>
        </li>
    </ol>
</section>
<?php require_once(WWW_ROOT . 'include/mask.php'); ?>
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
                        <dt><?= __('Company Name') ?></dt>                    
                        <dd><?= h($company->company_name) ?></dd>                    
                        <dt><?= __('Cnpj') ?></dt>
                        <dd><?= empty($company->cnpj) ? h(' - ') : h(mask($company->cnpj, '##.###.###/####-##')); ?></dd>
                        <dt><?= __('Cpf') ?></dt>
                        <dd><?= empty($company->cpf) ? h(' - ') : h(mask($company->cpf, '###.###.###-##')); ?></dd>
                        <dt><?= __('Description') ?></dt>
                        <dd><?= $this->Text->autoParagraph(h($company->description)); ?></dd>
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
