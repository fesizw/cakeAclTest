<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CapacidadeCivil $capacidadeCivil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Capacidade Civil'), ['action' => 'edit', $capacidadeCivil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Capacidade Civil'), ['action' => 'delete', $capacidadeCivil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capacidadeCivil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Capacidade Civils'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capacidade Civil'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="capacidadeCivils view large-9 medium-8 columns content">
    <h3><?= h($capacidadeCivil->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Capacidade') ?></th>
            <td><?= h($capacidadeCivil->tipo_capacidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $capacidadeCivil->has('empresa') ? $this->Html->link($capacidadeCivil->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $capacidadeCivil->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($capacidadeCivil->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($capacidadeCivil->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($capacidadeCivil->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clientes') ?></h4>
        <?php if (!empty($capacidadeCivil->clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome Cliente') ?></th>
                <th scope="col"><?= __('Filiacao Materna') ?></th>
                <th scope="col"><?= __('Nacionalidade') ?></th>
                <th scope="col"><?= __('Naturalidade') ?></th>
                <th scope="col"><?= __('Rg') ?></th>
                <th scope="col"><?= __('Orgao Exp Rg') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Cnpj') ?></th>
                <th scope="col"><?= __('Ctps') ?></th>
                <th scope="col"><?= __('Pis Pasep') ?></th>
                <th scope="col"><?= __('Data Nascimento') ?></th>
                <th scope="col"><?= __('Origem') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Cad Senha') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Tipo Cliente Id') ?></th>
                <th scope="col"><?= __('Capacidade Civil Id') ?></th>
                <th scope="col"><?= __('Estado Civil Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Profissão Id') ?></th>
                <th scope="col"><?= __('Sexo Id') ?></th>
                <th scope="col"><?= __('Unidade Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($capacidadeCivil->clientes as $clientes): ?>
            <tr>
                <td><?= h($clientes->id) ?></td>
                <td><?= h($clientes->nome_cliente) ?></td>
                <td><?= h($clientes->filiacao_materna) ?></td>
                <td><?= h($clientes->nacionalidade) ?></td>
                <td><?= h($clientes->naturalidade) ?></td>
                <td><?= h($clientes->rg) ?></td>
                <td><?= h($clientes->orgao_exp_rg) ?></td>
                <td><?= h($clientes->cpf) ?></td>
                <td><?= h($clientes->cnpj) ?></td>
                <td><?= h($clientes->ctps) ?></td>
                <td><?= h($clientes->pis_pasep) ?></td>
                <td><?= h($clientes->data_nascimento) ?></td>
                <td><?= h($clientes->origem) ?></td>
                <td><?= h($clientes->observacao) ?></td>
                <td><?= h($clientes->cad_senha) ?></td>
                <td><?= h($clientes->created) ?></td>
                <td><?= h($clientes->modified) ?></td>
                <td><?= h($clientes->tipo_cliente_id) ?></td>
                <td><?= h($clientes->capacidade_civil_id) ?></td>
                <td><?= h($clientes->estado_civil_id) ?></td>
                <td><?= h($clientes->usuario_id) ?></td>
                <td><?= h($clientes->profissão_id) ?></td>
                <td><?= h($clientes->sexo_id) ?></td>
                <td><?= h($clientes->unidade_id) ?></td>
                <td><?= h($clientes->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
