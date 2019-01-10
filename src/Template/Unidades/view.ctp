<section class="content-header">
  <h1>
    <?php echo __('Unidade'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Nome') ?></dt>
                                        <dd>
                                            <?= h($unidade->nome) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Empresa') ?></dt>
                                <dd>
                                    <?= $unidade->has('empresa') ? $unidade->empresa->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Clientes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($unidade->clientes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome Cliente
                                    </th>
                                        
                                                                    
                                    <th>
                                    Filiacao Materna
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nacionalidade
                                    </th>
                                        
                                                                    
                                    <th>
                                    Naturalidade
                                    </th>
                                        
                                                                    
                                    <th>
                                    Rg
                                    </th>
                                        
                                                                    
                                    <th>
                                    Orgao Exp Rg
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cpf
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cnpj
                                    </th>
                                        
                                                                    
                                    <th>
                                    Ctps
                                    </th>
                                        
                                                                    
                                    <th>
                                    Pis Pasep
                                    </th>
                                        
                                                                    
                                    <th>
                                    Data Nascimento
                                    </th>
                                        
                                                                    
                                    <th>
                                    Origem
                                    </th>
                                        
                                                                    
                                    <th>
                                    Observacao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cad Senha
                                    </th>
                                        
                                                                    
                                    <th>
                                    Foto
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Tipo Cliente Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Capacidade Civil Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Estado Civil Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Usuario Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Profissão Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Sexo Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Unidade Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($unidade->clientes as $clientes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($clientes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->nome_cliente) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->filiacao_materna) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->nacionalidade) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->naturalidade) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->rg) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->orgao_exp_rg) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->cpf) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->cnpj) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->ctps) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->pis_pasep) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->data_nascimento) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->origem) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->observacao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->cad_senha) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->foto) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($clientes->tipo_cliente_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->capacidade_civil_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->estado_civil_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->usuario_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->profissão_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->sexo_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->unidade_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id], ['class'=>'btn btn-info btn-xs btn-flat']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id], ['class'=>'btn btn-warning btn-xs btn-flat']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id), 'class'=>'btn btn-danger btn-xs btn-flat']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($unidade->users)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome
                                    </th>
                                        
                                                                    
                                    <th>
                                    Login
                                    </th>
                                        
                                                                    
                                    <th>
                                    Senha
                                    </th>
                                        
                                                                    
                                    <th>
                                    Foto
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Grupo Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Unidade Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($unidade->users as $users): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($users->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->nome) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->login) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->senha) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->foto) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($users->grupo_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->unidade_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-xs btn-flat']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-xs btn-flat']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs btn-flat']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
