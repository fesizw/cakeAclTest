<!-- Content Header (Page header) -->
<?php $aux = 0; ?>
<section class="content-header">
    <h1>
        <?= __('Clients') ?>
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>
<?php require_once(WWW_ROOT . 'include/mask.php'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?= __('Clients') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table style="width:100%;" id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="no-sort">order</th>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Razao Social') ?></th>
                                <th><?= __('CNPJ') ?></th>
                                <th><?= __('CPF') ?></th>
                                <th><?= __('User') ?></th>
                                <th><?= __('Filial') ?></th>
                                <!-- <th><?= '' #__('Company')       ?></th> -->
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clients as $client) : ?>
                                <tr>
                                    <td>
                                        <?php
                                        $aux++;
                                        echo $aux;
                                        ?>
                                    </td>
                                    <td><?= $this->Number->format($client->id) ?></td>
                                    <td><?= h($client->client_name) ?></td>
                                    <td><?= h($client->razao_social) ?></td>
                                    <td><?= h($client->cnpj) ?></td>
                                    <td><?= h($client->cpf) ?></td>
                                    <td><?= $client->has('user') ? $this->Html->link($client->user->user_name, ['controller' => 'Users', 'action' => 'view', $client->user->id]) : ' - ' ?></td>
                                    <td><?= $client->has('filial') ? $this->Html->link($client->filial->filial_name, ['controller' => 'Filials', 'action' => 'view', $client->filial->id]) : ' - ' ?></td>
                                    <!-- <td><?= '' #$this->Html->link($client->company->company_name, ['controller' => 'Company', 'action' => 'view', $client->Company->id])       ?></td> -->
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['class' => 'btn btn-danger btn-xs btn-flat delete_old', 'style' => 'display:none;', 'id' => 'delete' . $client->id, 'value' => $client->id]) ?>
                                        <?= $this->Form->button(__('Delete'), ['action' => 'delete', 'data-id' => $client->id, 'type' => 'button', 'class' => 'btn btn-danger btn-xs btn-flat deleteBNT', 'data-toggle' => 'modal', 'data-target' => '#modal-delete', 'onClick' => "deleteModal($client->id)"]); ?> 
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