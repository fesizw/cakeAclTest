<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Capacidade Civils'), ['controller' => 'CapacidadeCivils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capacidade Civil'), ['controller' => 'CapacidadeCivils', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estado Civils'), ['controller' => 'EstadoCivils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado Civil'), ['controller' => 'EstadoCivils', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profissaos'), ['controller' => 'Profissaos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profissao'), ['controller' => 'Profissaos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sexos'), ['controller' => 'Sexos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Clientes'), ['controller' => 'TipoClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Cliente'), ['controller' => 'TipoClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($empresa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($empresa->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Capacidade Civils') ?></h4>
        <?php if (!empty($empresa->capacidade_civils)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo Capacidade') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->capacidade_civils as $capacidadeCivils): ?>
            <tr>
                <td><?= h($capacidadeCivils->id) ?></td>
                <td><?= h($capacidadeCivils->tipo_capacidade) ?></td>
                <td><?= h($capacidadeCivils->created) ?></td>
                <td><?= h($capacidadeCivils->modified) ?></td>
                <td><?= h($capacidadeCivils->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CapacidadeCivils', 'action' => 'view', $capacidadeCivils->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CapacidadeCivils', 'action' => 'edit', $capacidadeCivils->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CapacidadeCivils', 'action' => 'delete', $capacidadeCivils->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capacidadeCivils->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Clientes') ?></h4>
        <?php if (!empty($empresa->clientes)): ?>
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
            <?php foreach ($empresa->clientes as $clientes): ?>
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
    <div class="related">
        <h4><?= __('Related Emails') ?></h4>
        <?php if (!empty($empresa->emails)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Id User') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->emails as $emails): ?>
            <tr>
                <td><?= h($emails->id) ?></td>
                <td><?= h($emails->email) ?></td>
                <td><?= h($emails->descricao) ?></td>
                <td><?= h($emails->created) ?></td>
                <td><?= h($emails->modified) ?></td>
                <td><?= h($emails->id_user) ?></td>
                <td><?= h($emails->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Estado Civils') ?></h4>
        <?php if (!empty($empresa->estado_civils)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo Estado Civil') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->estado_civils as $estadoCivils): ?>
            <tr>
                <td><?= h($estadoCivils->id) ?></td>
                <td><?= h($estadoCivils->tipo_estado_civil) ?></td>
                <td><?= h($estadoCivils->created) ?></td>
                <td><?= h($estadoCivils->modified) ?></td>
                <td><?= h($estadoCivils->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EstadoCivils', 'action' => 'view', $estadoCivils->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstadoCivils', 'action' => 'edit', $estadoCivils->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstadoCivils', 'action' => 'delete', $estadoCivils->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadoCivils->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Profissaos') ?></h4>
        <?php if (!empty($empresa->profissaos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->profissaos as $profissaos): ?>
            <tr>
                <td><?= h($profissaos->id) ?></td>
                <td><?= h($profissaos->nome) ?></td>
                <td><?= h($profissaos->created) ?></td>
                <td><?= h($profissaos->modified) ?></td>
                <td><?= h($profissaos->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profissaos', 'action' => 'view', $profissaos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profissaos', 'action' => 'edit', $profissaos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profissaos', 'action' => 'delete', $profissaos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissaos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sexos') ?></h4>
        <?php if (!empty($empresa->sexos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sexo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->sexos as $sexos): ?>
            <tr>
                <td><?= h($sexos->id) ?></td>
                <td><?= h($sexos->sexo) ?></td>
                <td><?= h($sexos->created) ?></td>
                <td><?= h($sexos->modified) ?></td>
                <td><?= h($sexos->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sexos', 'action' => 'view', $sexos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sexos', 'action' => 'edit', $sexos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sexos', 'action' => 'delete', $sexos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sexos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tipo Clientes') ?></h4>
        <?php if (!empty($empresa->tipo_clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo Cliente') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->tipo_clientes as $tipoClientes): ?>
            <tr>
                <td><?= h($tipoClientes->id) ?></td>
                <td><?= h($tipoClientes->tipo_cliente) ?></td>
                <td><?= h($tipoClientes->created) ?></td>
                <td><?= h($tipoClientes->modified) ?></td>
                <td><?= h($tipoClientes->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TipoClientes', 'action' => 'view', $tipoClientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TipoClientes', 'action' => 'edit', $tipoClientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TipoClientes', 'action' => 'delete', $tipoClientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoClientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Unidades') ?></h4>
        <?php if (!empty($empresa->unidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->unidades as $unidades): ?>
            <tr>
                <td><?= h($unidades->id) ?></td>
                <td><?= h($unidades->nome) ?></td>
                <td><?= h($unidades->created) ?></td>
                <td><?= h($unidades->modified) ?></td>
                <td><?= h($unidades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Unidades', 'action' => 'view', $unidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Unidades', 'action' => 'edit', $unidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Unidades', 'action' => 'delete', $unidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($empresa->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Senha') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Grupo Id') ?></th>
                <th scope="col"><?= __('Unidade Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->nome) ?></td>
                <td><?= h($usuarios->login) ?></td>
                <td><?= h($usuarios->senha) ?></td>
                <td><?= h($usuarios->created) ?></td>
                <td><?= h($usuarios->modified) ?></td>
                <td><?= h($usuarios->grupo_id) ?></td>
                <td><?= h($usuarios->unidade_id) ?></td>
                <td><?= h($usuarios->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
