<!-- Content Header (Page header) -->
<?php $aux = 0; ?>
<section class="content-header">
    <h1>
        <?= __('Login Tab') ?>
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?= __('Login Tab') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="no-sort">order</th>
                                <th><?= __('Authorization code') ?></th>
                                <th><?= __('Authorizing name') ?></th>
                                <th><?= __('Online') ?></th>
                                <th><?= __('User') ?></th>
                                <th><?= __('Situation') ?></th>
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($loginTab as $loginTab) : ?>
                                <tr>
                                    <td>
                                        <?php
                                        $aux++;
                                        echo $aux;
                                        ?>
                                    </td>
                                    <td><?= h($loginTab->cod_autorizador) ?></td>
                                    <td><?= h($loginTab->nome_autorizador) ?></td>
                                    <td><?= empty($loginTab->online) ? __('No') : __('Yes') ?></td>
                                    <td><?= empty($loginTab->Usuários) ? __('No') : __('Yes') ?></td>
                                    <td><?= h($loginTab->Situacao) ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $loginTab->cod_autorizador], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $loginTab->cod_autorizador], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $loginTab->cod_autorizador], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-xs btn-flat']) ?>
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