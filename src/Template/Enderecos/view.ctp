<section class="content-header">
  <h1>
    <?php echo __('Endereco'); ?>
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
                                                                                                                <dt><?= __('Logradouro') ?></dt>
                                        <dd>
                                            <?= h($endereco->logradouro) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Numero') ?></dt>
                                        <dd>
                                            <?= h($endereco->numero) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Bairro') ?></dt>
                                        <dd>
                                            <?= h($endereco->bairro) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cidade') ?></dt>
                                        <dd>
                                            <?= h($endereco->cidade) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Estado') ?></dt>
                                        <dd>
                                            <?= h($endereco->estado) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Complemento') ?></dt>
                                        <dd>
                                            <?= h($endereco->complemento) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Tipo Endereco') ?></dt>
                                <dd>
                                    <?= $endereco->has('tipo_endereco') ? $endereco->tipo_endereco->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Cliente') ?></dt>
                                <dd>
                                    <?= $endereco->has('cliente') ? $endereco->cliente->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $endereco->has('user') ? $endereco->user->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Empresa') ?></dt>
                                <dd>
                                    <?= $endereco->has('empresa') ? $endereco->empresa->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Cep') ?></dt>
                                <dd>
                                    <?= $this->Number->format($endereco->cep) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                                                        <dt><?= __('Comprovante Residencia') ?></dt>
                            <dd>
                            <?= $endereco->comprovante_residencia ? __('Yes') : __('No'); ?>
                            </dd>
                                                    <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $endereco->status ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Observacao') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($endereco->observacao)); ?>
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
