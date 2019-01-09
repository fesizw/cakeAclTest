<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
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
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->control('nome_cliente');
            echo $this->Form->control('filiacao_materna');
            echo $this->Form->control('nacionalidade');
            echo $this->Form->control('naturalidade');
            echo $this->Form->control('rg');
            echo $this->Form->control('orgao_exp_rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('cnpj');
            echo $this->Form->control('ctps');
            echo $this->Form->control('pis_pasep');
            echo $this->Form->control('data_nascimento', ['empty' => true]);
            echo $this->Form->control('origem');
            echo $this->Form->control('observacao');
            echo $this->Form->control('cad_senha');
            echo $this->Form->control('tipo_cliente_id', ['options' => $tipoClientes]);
            echo $this->Form->control('capacidade_civil_id', ['options' => $capacidadeCivils]);
            echo $this->Form->control('estado_civil_id', ['options' => $estadoCivils]);
            echo $this->Form->control('usuario_id', ['options' => $usuarios]);
            echo $this->Form->control('profissão_id');
            echo $this->Form->control('sexo_id', ['options' => $sexos]);
            echo $this->Form->control('unidade_id', ['options' => $unidades]);
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
