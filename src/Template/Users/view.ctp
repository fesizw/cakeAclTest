<section class="content-header">
    <h1>
        <?php echo __('User'); ?>
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
                        <dt><?= __('Nome') ?></dt>
                        <dd>
                            <?= h($user->nome) ?>
                        </dd>
                        <dt><?= __('Login') ?></dt>
                        <dd>
                            <?= h($user->login) ?>
                        </dd>
                        <dt><?= __('Foto') ?></dt>
                        <dd>
                            <?= h($user->foto) ?>
                        </dd>
                        <dt><?= __('Grupo') ?></dt>
                        <dd>
                            <?= $user->has('grupo') ? $user->grupo->id : '' ?>
                        </dd>
                        <dt><?= __('Unidade') ?></dt>
                        <dd>
                            <?= $user->has('unidade') ? $user->unidade->id : '' ?>
                        </dd>
                        <dt><?= __('Empresa') ?></dt>
                        <dd>
                            <?= $user->has('empresa') ? $user->empresa->id : '' ?>
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

                    <?php if (!empty($user->emails)): ?>

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

                                <?php foreach ($user->emails as $emails): ?>
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

                    <?php if (!empty($user->enderecos)): ?>

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

                                <?php foreach ($user->enderecos as $enderecos): ?>
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
</section>
