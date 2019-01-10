<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php
        ?>
        <?php echo __('Company'); ?>
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
    </h1>
</section>
<?php require_once(WWW_ROOT . 'include/mask.php'); ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?php echo __('Companys'); ?></h3>
                    <div class="box-tools">
                        <?= $this->Form->create() ?>
                        <div class="input-group input-group-sm"  style="width: 200px;">
                            <?=
                            $this->Form->control('search', [
                                'templates' => [
                                    'inputContainer' => '{{content}}'
                                ],
                                "aria-invalid" => "false",
                                "aria-required" => "true",
                                "autocomplete" => "on",
                                'class' => 'form-control',
                                'placeholder' => __('Fill in to start search'),
                                'default' => $this->request->getData('search'),
                                'label' => false
                            ]);
                            ?>							
                            <span class="input-group-btn">
                                <?= $this->Form->button(__('Filter'), ['type' => 'submit', 'class' => 'btn btn-info btn-flat']); ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id', ['label' => __('Id')]) ?></th>
                                <th><?= $this->Paginator->sort('company_name', ['label' => __('Company Name')]) ?></th>
                                <th><?= $this->Paginator->sort('cnpj', ['label' => __('CNPJ')]) ?></th>
                                <th><?= $this->Paginator->sort('cpf', ['label' => __('CPF')]) ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($companys as $company) : ?>
                                <tr>
                                    <td><?= $this->Number->format($company->id) ?></td>
                                    <td><?= h($company->company_name) ?></td>
                                    <td><?= empty($company->cnpj) ? h(' - ') : h(mask($company->cnpj, '##.###.###/####-##')); ?></td>
                                    <td><?= empty($company->cpf) ? h(' - ') : h(mask($company->cpf, '###.###.###-##')); ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $company->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
