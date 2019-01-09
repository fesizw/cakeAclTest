<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstadoCivil $estadoCivil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estadoCivil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estadoCivil->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estado Civils'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadoCivils form large-9 medium-8 columns content">
    <?= $this->Form->create($estadoCivil) ?>
    <fieldset>
        <legend><?= __('Edit Estado Civil') ?></legend>
        <?php
            echo $this->Form->control('tipo_estado_civil');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
