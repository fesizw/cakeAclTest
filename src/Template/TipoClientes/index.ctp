<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoCliente[]|\Cake\Collection\CollectionInterface $tipoClientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoClientes index large-9 medium-8 columns content">
    <h3><?= __('Tipo Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoClientes as $tipoCliente): ?>
            <tr>
                <td><?= $this->Number->format($tipoCliente->id) ?></td>
                <td><?= h($tipoCliente->tipo_cliente) ?></td>
                <td><?= h($tipoCliente->created) ?></td>
                <td><?= h($tipoCliente->modified) ?></td>
                <td><?= $tipoCliente->has('empresa') ? $this->Html->link($tipoCliente->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $tipoCliente->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoCliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
