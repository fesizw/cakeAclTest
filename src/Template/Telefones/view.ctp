<section class="content-header">
  <h1>
    <?php echo __('Telefone'); ?>
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
                                                                                                                <dt><?= __('Numero') ?></dt>
                                        <dd>
                                            <?= h($telefone->numero) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $telefone->has('user') ? $telefone->user->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Cliente') ?></dt>
                                <dd>
                                    <?= $telefone->has('cliente') ? $telefone->cliente->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Unidade') ?></dt>
                                <dd>
                                    <?= $telefone->has('unidade') ? $telefone->unidade->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Empresa') ?></dt>
                                <dd>
                                    <?= $telefone->has('empresa') ? $telefone->empresa->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                                                        <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $telefone->status ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Observacao') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($telefone->observacao)); ?>
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
