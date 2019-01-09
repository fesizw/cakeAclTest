<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Clientes'), ['controller' => 'TipoClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Cliente'), ['controller' => 'TipoClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Capacidade Civils'), ['controller' => 'CapacidadeCivils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capacidade Civil'), ['controller' => 'CapacidadeCivils', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estado Civils'), ['controller' => 'EstadoCivils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado Civil'), ['controller' => 'EstadoCivils', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sexos'), ['controller' => 'Sexos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Cliente') ?></th>
            <td><?= h($cliente->nome_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filiacao Materna') ?></th>
            <td><?= h($cliente->filiacao_materna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidade') ?></th>
            <td><?= h($cliente->nacionalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Naturalidade') ?></th>
            <td><?= h($cliente->naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($cliente->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orgao Exp Rg') ?></th>
            <td><?= h($cliente->orgao_exp_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($cliente->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($cliente->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ctps') ?></th>
            <td><?= h($cliente->ctps) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pis Pasep') ?></th>
            <td><?= h($cliente->pis_pasep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origem') ?></th>
            <td><?= h($cliente->origem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cad Senha') ?></th>
            <td><?= h($cliente->cad_senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Cliente') ?></th>
            <td><?= $cliente->has('tipo_cliente') ? $this->Html->link($cliente->tipo_cliente->id, ['controller' => 'TipoClientes', 'action' => 'view', $cliente->tipo_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacidade Civil') ?></th>
            <td><?= $cliente->has('capacidade_civil') ? $this->Html->link($cliente->capacidade_civil->id, ['controller' => 'CapacidadeCivils', 'action' => 'view', $cliente->capacidade_civil->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Civil') ?></th>
            <td><?= $cliente->has('estado_civil') ? $this->Html->link($cliente->estado_civil->id, ['controller' => 'EstadoCivils', 'action' => 'view', $cliente->estado_civil->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $cliente->has('usuario') ? $this->Html->link($cliente->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $cliente->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= $cliente->has('sexo') ? $this->Html->link($cliente->sexo->id, ['controller' => 'Sexos', 'action' => 'view', $cliente->sexo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= $cliente->has('unidade') ? $this->Html->link($cliente->unidade->id, ['controller' => 'Unidades', 'action' => 'view', $cliente->unidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $cliente->has('empresa') ? $this->Html->link($cliente->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $cliente->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profissão Id') ?></th>
            <td><?= $this->Number->format($cliente->profissão_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($cliente->data_nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cliente->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->observacao)); ?>
    </div>
</div>
