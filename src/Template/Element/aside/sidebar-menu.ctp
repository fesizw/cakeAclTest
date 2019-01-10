<?php
if (empty($loguser)) {
    //logout
}
//$DateCreatedFormated = $loguser['created']->i18nFormat();
// debug($loguser);
?>
<ul class="sidebar-menu">
    <li class="header"><?= __('MAIN NAVIGATION'); ?></li>

    <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i><span> Usuários</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li>
                <?= $this->Html->link('<i class="fa fa-users"></i><span>' . __('Users List'), ['controller' => 'users', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-gear"></i><span>' . __('Roles List'), ['controller' => 'roles', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-industry"></i><span>' . __('Clients List'), ['controller' => 'clients', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-balance-scale"></i><span>' . __('Companys List'), ['controller' => 'companys', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-black-tie"></i><span>' . __('Filials List'), ['controller' => 'filials', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>                    
            <li>
                <?= $this->Html->link('<i class="fa fa-users"></i><span>' . __('Old LoginTab'), ['controller' => 'loginTab', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-pencil-square-o"></i><span> Cadastros</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li><a href="#"><i class="fa fa-circle-o"></i> Cadastrar PF/PJ</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Localizar</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Em Atendimento</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Filtrar Processos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Atendimento Processual</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Monitorar Atendimento</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Chamada de Atendimento</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Atendimento DEJUR Sup.</a></li>

        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-pencil-square-o"></i><span> Modulo Cliente (DEV)</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Empresas'), ['controller' => 'empresas', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Unidades'), ['controller' => 'unidades', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Grupos'), ['controller' => 'grupos', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Usuários'), ['controller' => 'users', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Capacidade Civis'), ['controller' => 'capacidade_civils', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Estado Civis'), ['controller' => 'estado_civils', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Profissões'), ['controller' => 'profissaos', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Sexos'), ['controller' => 'sexos', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Tipo Clientes'), ['controller' => 'tipo_clientes', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Clientes'), ['controller' => 'clientes', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Tipo Endereços'), ['controller' => 'tipo_enderecos', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Endereços'), ['controller' => 'enderecos', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Telefones'), ['controller' => 'telefones', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de E-mails'), ['controller' => 'emails', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-circle-o"></i><span>' . __('Lista de Representantes'), ['controller' => 'representantes', 'action' => 'index'], ['escape' => false]) ?></span>
            </li>
        </ul>
    </li>

    <?php
    if ($loguser['grupo_id'] == 1) :
        ?>
        <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span><?= __('Debug') ?></span></a></li>

    <?php endif; ?>
</ul>
