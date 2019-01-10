<section class="content-header">
  <h1>
    <?php echo __('Email'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
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
                                                                                                                <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($email->email) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Cliente') ?></dt>
                                <dd>
                                    <?= $email->has('cliente') ? $email->cliente->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $email->has('user') ? $email->user->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Empresa') ?></dt>
                                <dd>
                                    <?= $email->has('empresa') ? $email->empresa->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                                                        <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $email->status ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Descricao') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($email->descricao)); ?>
                            </dd>
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
