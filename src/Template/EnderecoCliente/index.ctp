<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Endereco Cliente
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> Endereco Cliente</h3>
                    <div class="box-tools">
                        <form action="<?php echo $this->Url->build(); ?>" method="POST">
                            <div class="input-group input-group-sm"  style="width: 180px;">
                                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('cep') ?></th>
                                <th><?= $this->Paginator->sort('endereco') ?></th>
                                <th><?= $this->Paginator->sort('numero') ?></th>
                                <th><?= $this->Paginator->sort('estado') ?></th>
                                <th><?= $this->Paginator->sort('tipo') ?></th>
                                <th><?= $this->Paginator->sort('cidade') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($enderecoCliente as $enderecoCliente): ?>
                                <tr>
                                    <td><?= $this->Number->format($enderecoCliente->id) ?></td>
                                    <td><?= h($enderecoCliente->cep) ?></td>
                                    <td><?= h($enderecoCliente->endereco) ?></td>
                                    <td><?= h($enderecoCliente->numero) ?></td>
                                    <td><?= h($enderecoCliente->estado) ?></td>
                                    <td><?= h($enderecoCliente->tipo) ?></td>
                                    <td><?= h($enderecoCliente->cidade) ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $enderecoCliente->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enderecoCliente->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enderecoCliente->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-xs btn-flat']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?php echo $this->Paginator->numbers(); ?>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
