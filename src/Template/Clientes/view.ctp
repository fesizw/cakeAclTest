<section class="content-header">
    <h1>
        <?php echo __('Cliente'); ?>
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
                        <dt><?= __('Name') ?></dt>
                        <dd>
                            <?= h($cliente->name) ?>
                        </dd>
                        <dt><?= __('Filiacao Materna') ?></dt>
                        <dd>
                            <?= h($cliente->filiacao_materna) ?>
                        </dd>
                        <dt><?= __('Nacionalidade') ?></dt>
                        <dd>
                            <?= h($cliente->nacionalidade) ?>
                        </dd>
                        <dt><?= __('Naturalidade') ?></dt>
                        <dd>
                            <?= h($cliente->naturalidade) ?>
                        </dd>
                        <dt><?= __('Rg') ?></dt>
                        <dd>
                            <?= h($cliente->rg) ?>
                        </dd>
                        <dt><?= __('Orgao Exp Rg') ?></dt>
                        <dd>
                            <?= h($cliente->orgao_exp_rg) ?>
                        </dd>
                        <dt><?= __('Cpf') ?></dt>
                        <dd>
                            <?= h($cliente->cpf) ?>
                        </dd>
                        <dt><?= __('Cnpj') ?></dt>
                        <dd>
                            <?= h($cliente->cnpj) ?>
                        </dd>
                        <dt><?= __('Ctps') ?></dt>
                        <dd>
                            <?= h($cliente->ctps) ?>
                        </dd>
                        <dt><?= __('Pis Pasep') ?></dt>
                        <dd>
                            <?= h($cliente->pis_pasep) ?>
                        </dd>
                        <dt><?= __('Origem') ?></dt>
                        <dd>
                            <?= h($cliente->origem) ?>
                        </dd>
                        <dt><?= __('Cad Senha') ?></dt>
                        <dd>
                            <?= h($cliente->cad_senha) ?>
                        </dd>
                        <dt><?= __('Foto') ?></dt>
                        <dd>
                            <?= h($cliente->foto) ?>
                        </dd>
                        <dt><?= __('Tipo Cliente') ?></dt>
                        <dd>
                            <?= $cliente->has('tipo_cliente') ? $cliente->tipo_cliente->name : '' ?>
                        </dd>
                        <dt><?= __('Capacidade Civil') ?></dt>
                        <dd>
                            <?= $cliente->has('capacidade_civil') ? $cliente->capacidade_civil->tipo_capacidade : '' ?>
                        </dd>
                        <dt><?= __('Estado Civil') ?></dt>
                        <dd>
                            <?= $cliente->has('estado_civil') ? $cliente->estado_civil->tipo_estado_civil : '' ?>
                        </dd>
                        <dt><?= __('User') ?></dt>
                        <dd>
                            <?= $cliente->has('user') ? $cliente->user->id : '' ?>
                        </dd>
                        <dt><?= __('Profissao') ?></dt>
                        <dd>
                            <?= $cliente->has('profissao') ? $cliente->profissao->nome : '' ?>
                        </dd>
                        <dt><?= __('Sexo') ?></dt>
                        <dd>
                            <?= $cliente->has('sexo') ? $cliente->sexo->name : '' ?>
                        </dd>
                        <dt><?= __('Unidade') ?></dt>
                        <dd>
                            <?= $cliente->has('unidade') ? $cliente->unidade->nome : '' ?>
                        </dd>
                        <dt><?= __('Empresa') ?></dt>
                        <dd>
                            <?= $cliente->has('empresa') ? $cliente->empresa->nome : '' ?>
                        </dd>
                        <dt><?= __('Data Nascimento') ?></dt>
                        <dd>
                            <?= h($cliente->data_nascimento) ?>
                        </dd>
                        <dt><?= __('Observacao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($cliente->observacao)); ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Emails']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($cliente->emails)): ?>

                        <table class="table table-hover">
                            <tbody>
                                <tr>

                                    <th>
                                        Id
                                    </th>


                                    <th>
                                        Email
                                    </th>


                                    <th>
                                        Descricao
                                    </th>


                                    <th>
                                        Status
                                    </th>


                                    <th>
                                        Cliente Id
                                    </th>


                                    <th>
                                        User Id
                                    </th>


                                    <th>
                                        Empresa Id
                                    </th>


                                    <th>
                                        <?php echo __('Actions'); ?>
                                    </th>
                                </tr>

                                <?php foreach ($cliente->emails as $emails): ?>
                                    <tr>

                                        <td>
                                            <?= h($emails->id) ?>
                                        </td>

                                        <td>
                                            <?= h($emails->email) ?>
                                        </td>

                                        <td>
                                            <?= h($emails->descricao) ?>
                                        </td>

                                        <td>
                                            <?= h($emails->status) ?>
                                        </td>

                                        <td>
                                            <?= h($emails->cliente_id) ?>
                                        </td>

                                        <td>
                                            <?= h($emails->user_id) ?>
                                        </td>

                                        <td>
                                            <?= h($emails->empresa_id) ?>
                                        </td>

                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>

                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>

                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id), 'class' => 'btn btn-danger btn-xs btn-flat']) ?>    
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Enderecos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($cliente->enderecos)): ?>

                        <table class="table table-hover">
                            <tbody>
                                <tr>

                                    <th>
                                        Id
                                    </th>


                                    <th>
                                        Logradouro
                                    </th>


                                    <th>
                                        Numero
                                    </th>


                                    <th>
                                        Bairro
                                    </th>


                                    <th>
                                        Cidade
                                    </th>


                                    <th>
                                        Estado
                                    </th>


                                    <th>
                                        Cep
                                    </th>


                                    <th>
                                        Complemento
                                    </th>


                                    <th>
                                        Observacao
                                    </th>


                                    <th>
                                        Comprovante Residencia
                                    </th>


                                    <th>
                                        Status
                                    </th>


                                    <th>
                                        Tipo Endereco Id
                                    </th>


                                    <th>
                                        Cliente Id
                                    </th>


                                    <th>
                                        User Id
                                    </th>


                                    <th>
                                        Empresa Id
                                    </th>


                                    <th>
                                        <?php echo __('Actions'); ?>
                                    </th>
                                </tr>

                                <?php foreach ($cliente->enderecos as $enderecos): ?>
                                    <tr>

                                        <td>
                                            <?= h($enderecos->id) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->logradouro) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->numero) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->bairro) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->cidade) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->estado) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->cep) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->complemento) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->observacao) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->comprovante_residencia) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->status) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->tipo_endereco_id) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->cliente_id) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->user_id) ?>
                                        </td>

                                        <td>
                                            <?= h($enderecos->empresa_id) ?>
                                        </td>

                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>

                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>

                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecos->id), 'class' => 'btn btn-danger btn-xs btn-flat']) ?>    
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Representantes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($cliente->representantes)): ?>

                        <table class="table table-hover">
                            <tbody>
                                <tr>

                                    <th>
                                        Id
                                    </th>


                                    <th>
                                        Tipo
                                    </th>


                                    <th>
                                        Representante Id
                                    </th>


                                    <th>
                                        Cliente Id
                                    </th>


                                    <th>
                                        <?php echo __('Actions'); ?>
                                    </th>
                                </tr>

                                <?php foreach ($cliente->representantes as $representantes): ?>
                                    <tr>

                                        <td>
                                            <?= h($representantes->id) ?>
                                        </td>

                                        <td>
                                            <?= h($representantes->tipo) ?>
                                        </td>

                                        <td>
                                            <?= h($representantes->representante_id) ?>
                                        </td>

                                        <td>
                                            <?= h($representantes->cliente_id) ?>
                                        </td>

                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Representantes', 'action' => 'view', $representantes->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>

                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Representantes', 'action' => 'edit', $representantes->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>

                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Representantes', 'action' => 'delete', $representantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $representantes->id), 'class' => 'btn btn-danger btn-xs btn-flat']) ?>    
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Telefones']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($cliente->telefones)): ?>

                        <table class="table table-hover">
                            <tbody>
                                <tr>

                                    <th>
                                        Id
                                    </th>


                                    <th>
                                        Status
                                    </th>


                                    <th>
                                        Numero
                                    </th>


                                    <th>
                                        Observacao
                                    </th>


                                    <th>
                                        User Id
                                    </th>


                                    <th>
                                        Cliente Id
                                    </th>


                                    <th>
                                        Unidade Id
                                    </th>


                                    <th>
                                        Empresa Id
                                    </th>


                                    <th>
                                        <?php echo __('Actions'); ?>
                                    </th>
                                </tr>

                                <?php foreach ($cliente->telefones as $telefones): ?>
                                    <tr>

                                        <td>
                                            <?= h($telefones->id) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->status) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->numero) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->observacao) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->user_id) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->cliente_id) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->unidade_id) ?>
                                        </td>

                                        <td>
                                            <?= h($telefones->empresa_id) ?>
                                        </td>

                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>

                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>

                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefones->id), 'class' => 'btn btn-danger btn-xs btn-flat']) ?>    
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
