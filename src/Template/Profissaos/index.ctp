<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissao[]|\Cake\Collection\CollectionInterface $profissaos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profissao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profissaos index large-9 medium-8 columns content">
    <h3><?= __('Profissaos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profissaos as $profissao): ?>
            <tr>
                <td><?= $this->Number->format($profissao->id) ?></td>
                <td><?= h($profissao->nome) ?></td>
                <td><?= h($profissao->created) ?></td>
                <td><?= h($profissao->modified) ?></td>
                <td><?= $profissao->has('empresa') ? $this->Html->link($profissao->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $profissao->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profissao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profissao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissao->id)]) ?>
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
