<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Clientes'), ['controller' => 'TipoClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Cliente'), ['controller' => 'TipoClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Capacidade Civils'), ['controller' => 'CapacidadeCivils', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capacidade Civil'), ['controller' => 'CapacidadeCivils', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estado Civils'), ['controller' => 'EstadoCivils', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado Civil'), ['controller' => 'EstadoCivils', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sexos'), ['controller' => 'Sexos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filiacao_materna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacionalidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('naturalidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orgao_exp_rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ctps') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pis_pasep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cad_senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacidade_civil_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_civil_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profissão_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nome_cliente) ?></td>
                <td><?= h($cliente->filiacao_materna) ?></td>
                <td><?= h($cliente->nacionalidade) ?></td>
                <td><?= h($cliente->naturalidade) ?></td>
                <td><?= h($cliente->rg) ?></td>
                <td><?= h($cliente->orgao_exp_rg) ?></td>
                <td><?= h($cliente->cpf) ?></td>
                <td><?= h($cliente->cnpj) ?></td>
                <td><?= h($cliente->ctps) ?></td>
                <td><?= h($cliente->pis_pasep) ?></td>
                <td><?= h($cliente->data_nascimento) ?></td>
                <td><?= h($cliente->origem) ?></td>
                <td><?= h($cliente->cad_senha) ?></td>
                <td><?= h($cliente->created) ?></td>
                <td><?= h($cliente->modified) ?></td>
                <td><?= $cliente->has('tipo_cliente') ? $this->Html->link($cliente->tipo_cliente->id, ['controller' => 'TipoClientes', 'action' => 'view', $cliente->tipo_cliente->id]) : '' ?></td>
                <td><?= $cliente->has('capacidade_civil') ? $this->Html->link($cliente->capacidade_civil->id, ['controller' => 'CapacidadeCivils', 'action' => 'view', $cliente->capacidade_civil->id]) : '' ?></td>
                <td><?= $cliente->has('estado_civil') ? $this->Html->link($cliente->estado_civil->id, ['controller' => 'EstadoCivils', 'action' => 'view', $cliente->estado_civil->id]) : '' ?></td>
                <td><?= $cliente->has('usuario') ? $this->Html->link($cliente->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $cliente->usuario->id]) : '' ?></td>
                <td><?= $this->Number->format($cliente->profissão_id) ?></td>
                <td><?= $cliente->has('sexo') ? $this->Html->link($cliente->sexo->id, ['controller' => 'Sexos', 'action' => 'view', $cliente->sexo->id]) : '' ?></td>
                <td><?= $cliente->has('unidade') ? $this->Html->link($cliente->unidade->id, ['controller' => 'Unidades', 'action' => 'view', $cliente->unidade->id]) : '' ?></td>
                <td><?= $cliente->has('empresa') ? $this->Html->link($cliente->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $cliente->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
