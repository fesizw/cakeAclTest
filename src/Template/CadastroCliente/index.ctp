
<?= $this->Html->css('dt-btn') ?>
<?php

//debug($clientes);
empty($_GET['page']) ? $page = 0 : $page = (int)$_GET['page'];
$next_page = '?page='.($page + 1);
$page < 2 ? $previous_page = '#' : $previous_page = '?page='.($page - 1);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Cadastro Cliente
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> Cadastro Cliente</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table style="width:100%;" id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="no-sort"><?php $aux = 0; ?>order</th>
                                <th><?= __('CÓDIGO') ?></th>
                                <th><?= __('NomeCliente') ?></th>
                                <th><?= __('Nacionalidade') ?></th>
                                <th><?= __('Estadocivil') ?></th>
                                <th><?= __('Profissão') ?></th>
                                <th><?= __('RG') ?></th>
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientes as $cliente) : ?>
                            <tr>
                                <td>
                                    <?php
                                    $aux++;
                                    echo $aux;
                                    ?>
                                </td>
                                <td> <?= $this->Number->format($cliente->CÓDIGO) ?></td>
                                <td style="cursor: grabbing;"><?= h($cliente->NomeCliente) ?></td>
                                <td style="cursor: grabbing;"><?= h($cliente->Nacionalidade) ?></td>
                                <td><?= h($cliente->Estadocivil) ?></td>
                                <td><?= h($cliente->Profissão) ?></td>
                                <td><?= h($cliente->RG) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->CÓDIGO], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->CÓDIGO], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->CÓDIGO], ['class' => 'btn btn-danger btn-xs btn-flat delete_old', 'style' => 'display:none;', 'id' => 'delete' . $cliente->CÓDIGO, 'value' => $cliente->CÓDIGO]) ?>
                                    <?= $this->Form->button(__('Delete'), ['action' => 'delete', 'data-id' => $cliente->CÓDIGO, 'type' => 'button', 'class' => 'btn btn-danger btn-xs btn-flat deleteBNT', 'data-toggle' => 'modal', 'data-target' => '#modal-delete', 'onClick' => "deleteModal($cliente->CÓDIGO)"]); ?> 
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
        <div class="pull-left"><a href="<?= $aux < 999 ? '#' : $previous_page ?>" class="btn btn-info btn-flat"<?= $aux < 999 ? 'disabled' : ''?>><?= __('Previous Page')?></a></div>
        <div class="pull-right"><a href="<?= $aux < 999 ? '#' : $next_page ?>" class="btn btn-info btn-flat" <?= $aux < 999 ? 'disabled' : ''?>><?= __('Next Page')?></a></div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<?= $this->element('dataTable') ?>
<?= $this->element('modal') ?>