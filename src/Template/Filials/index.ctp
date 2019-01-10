<!-- Content Header (Page header) -->
<?php $aux = 0; ?>
<section class="content-header">
    <h1>
        <?= __('Filials') ?>
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?= __('Filials') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table style="width:100%;" id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="no-sort">order</th>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Filial Name') ?></th>
                                <th><?= __('Matriz') ?></th>
                                <th><?= __('Companys') ?></th>
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filials as $filial) : ?>
                                <tr>
                                    <td>
                                        <?php
                                        $aux++;
                                        echo $aux;
                                        ?>
                                    </td>
                                    <td><?= $this->Number->format($filial->id) ?></td>
                                    <td><?= h($filial->filial_name) ?></td>
                                    <td><?= empty($filial->matriz) ? h('') : h(__('Matriz')); ?></td>
                                    <td><?= $this->Html->link($filial->company->company_name, ['controller' => 'Companys', 'action' => 'view', $filial->company->id]); ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $filial->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filial->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filial->id], ['class' => 'btn btn-danger btn-xs btn-flat delete_old', 'style' => 'display:none;', 'id' => 'delete' . $filial->id, 'value' => $filial->id]) ?>
                                        <?= $this->Form->button(__('Delete'), ['action' => 'delete', 'data-id' => $filial->id, 'type' => 'button', 'class' => 'btn btn-danger btn-xs btn-flat deleteBNT', 'data-toggle' => 'modal', 'data-target' => '#modal-delete', 'onClick' => "deleteModal($filial->id)"]); ?> 
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<?= $this->element('dataTable') ?>
<?= $this->element('modal') ?>