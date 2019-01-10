<!-- Content Header (Page header) -->
<?php $aux = 0; ?>
<section class="content-header">
    <h1>
        <?= __('Roles') ?>
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>

<?php require_once(WWW_ROOT . 'include/mask.php'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?= __('Roles') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table style="width:100%;" id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="no-sort">order</th>
                                <th><?= __('id') ?></th>
                                <th><?= __('Role name') ?></th>
                                <th><?= __('Filial') ?></th>
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($roles as $role) : ?>
                                <tr>
                                    <td>
                                        <?php
                                        $aux++;
                                        echo $aux;
                                        ?>
                                    </td>
                                    <td><?= h($role->id) ?></td>
                                            <td><?= h($role->role_name) ?></td>
                                    <td><?= $this->Html->link($role->filial->filial_name, ['controller' =>  'Filials', 'action' => 'view', $role->filial->id]); ?></td>
                                            <td class="actions" style="white-space:nowrap">
                                                <?= $this->Html->link(__('View'), [ 'action' => 'view', $role ->id], ['class' =>  'btn btn-info btn-xs btn-flat']) ?>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role ->id], ['class' =>  'btn btn-warning btn-xs btn-flat']) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete',  $role->id], ['class' =>  'btn btn-danger btn-xs btn-flat delete_old', 'style' => 'display:none;', 'id' => 'delete' . $role->id, 'value' => $role->id]) ?>
                                                <?= $this->Form->button(__('Delete'), [ 'action' => 'delete',  'data-id' => $role->id, 'type' => 'button', 'class' => 'btn btn-danger btn-xs btn-flat deleteBNT', 'data-toggle' => 'modal', 'data-target' => '#modal-delete', 'onClick' => "deleteModal($role->id)"]); ?> 
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