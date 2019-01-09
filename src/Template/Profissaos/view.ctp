<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissao $profissao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profissao'), ['action' => 'edit', $profissao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profissao'), ['action' => 'delete', $profissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profissaos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profissao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profissaos view large-9 medium-8 columns content">
    <h3><?= h($profissao->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($profissao->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $profissao->has('empresa') ? $this->Html->link($profissao->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $profissao->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profissao->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($profissao->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($profissao->modified) ?></td>
        </tr>
    </table>
</div>
