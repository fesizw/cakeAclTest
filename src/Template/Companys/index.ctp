<!-- Content Header (Page header) -->
<?php $aux = 0; ?>
<section class="content-header">
    <h1>
        <?= __('Company'); ?>
        <div class="pull-right">
            <?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?>
        </div>
    </h1>
</section>
<?php require_once(WWW_ROOT . 'include/mask.php'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?php echo __('Companys'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table style="width:100%;" id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="no-sort">order</th>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Company Name') ?></th>
                                <th><?= __('CNPJ') ?></th>
                                <th><?= __('CPF') ?></th>
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($companys as $company) : ?>
                                <tr>
                                    <td>
                                        <?php
                                        $aux++;
                                        echo $aux;
                                        ?>
                                    </td>
                                    <td><?= $this->Number->format($company->id) ?></td>
                                    <td><?= h($company->company_name) ?></td>
                                    <td><?= empty($company->cnpj) ? h(' - ') : h(mask($company->cnpj, '##.###.###/####-##')); ?></td>
                                    <td><?= empty($company->cpf) ? h(' - ') : h(mask($company->cpf, '###.###.###-##')); ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $company->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['class' => 'btn btn-danger btn-xs btn-flat delete_old', 'style' => 'display:none;', 'id' => 'delete' . $company->id, 'value' => $company->id]) ?>
                                        <?= $this->Form->button(__('Delete'), ['action' => 'delete', 'data-id' => $company->id, 'type' => 'button', 'class' => 'btn btn-danger btn-xs btn-flat deleteBNT', 'data-toggle' => 'modal', 'data-target' => '#modal-delete', 'onClick' => "deleteModal($company->id)"]); ?> 
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