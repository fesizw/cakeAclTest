<section class="content-header">
    <h1>
        <?php echo __('Endereco Cliente'); ?>
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
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('Cep') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->cep) ?>
                        </dd>
                        <dt><?= __('Endereco') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->endereco) ?>
                        </dd>
                        <dt><?= __('Numero') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->numero) ?>
                        </dd>
                        <dt><?= __('Estado') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->estado) ?>
                        </dd>
                        <dt><?= __('Tipo') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->tipo) ?>
                        </dd>
                        <dt><?= __('Cidade') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->cidade) ?>
                        </dd>
                        <dt><?= __('Bairro') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->bairro) ?>
                        </dd>
                        <dt><?= __('Complemento') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->complemento) ?>
                        </dd>
                        <dt><?= __('Comprovante Cliente') ?></dt>
                        <dd>
                            <?= h($enderecoCliente->comprovante_cliente) ?>
                        </dd>
                        <dt><?= __('Client') ?></dt>
                        <dd>
                            <?= $enderecoCliente->has('client') ? $enderecoCliente->client->client_name : '' ?>
                        </dd>
                        <dt><?= __('Observacao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($enderecoCliente->observacao)); ?>
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
