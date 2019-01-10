<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Telefone Cliente
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs btn-flat']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Telefone Cliente</h3>
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
                <th><?= $this->Paginator->sort('Tipo') ?></th>
                <th><?= $this->Paginator->sort('DDD') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('responsavel_recado') ?></th>
                <th><?= $this->Paginator->sort('client_id') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($telefoneCliente as $telefoneCliente): ?>
              <tr>
                <td><?= $this->Number->format($telefoneCliente->id) ?></td>
                <td><?= h($telefoneCliente->Tipo) ?></td>
                <td><?= h($telefoneCliente->DDD) ?></td>
                <td><?= h($telefoneCliente->numero) ?></td>
                <td><?= h($telefoneCliente->responsavel_recado) ?></td>
                <td><?= $telefoneCliente->has('client') ? $this->Html->link($telefoneCliente->client->client_name, ['controller' => 'Clients', 'action' => 'view', $telefoneCliente->client->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $telefoneCliente->id], ['class'=>'btn btn-info btn-xs btn-flat']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefoneCliente->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefoneCliente->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs btn-flat']) ?>
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
