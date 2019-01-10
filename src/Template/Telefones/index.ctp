<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Telefones
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs btn-flat']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Telefones</h3>
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
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($telefones as $telefone): ?>
              <tr>
                <td><?= $this->Number->format($telefone->id) ?></td>
                <td><?= h($telefone->status) ?></td>
                <td><?= h($telefone->numero) ?></td>
                <td><?= $telefone->has('user') ? $this->Html->link($telefone->user->id, ['controller' => 'Users', 'action' => 'view', $telefone->user->id]) : '' ?></td>
                <td><?= $telefone->has('cliente') ? $this->Html->link($telefone->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $telefone->cliente->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $telefone->id], ['class'=>'btn btn-info btn-xs btn-flat']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefone->id], ['class'=>'btn btn-warning btn-xs btn-flat']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefone->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs btn-flat']) ?>
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
