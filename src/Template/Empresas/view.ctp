<section class="content-header">
  <h1>
    <?php echo __('Empresa'); ?>
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
                                            <?= h($empresa->nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cpf') ?></dt>
                                        <dd>
                                            <?= h($empresa->cpf) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cnpj') ?></dt>
                                        <dd>
                                            <?= h($empresa->cnpj) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Capacidade Civils']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->capacidade_civils)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tipo Capacidade
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->capacidade_civils as $capacidadeCivils): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($capacidadeCivils->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($capacidadeCivils->tipo_capacidade) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($capacidadeCivils->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'CapacidadeCivils', 'action' => 'view', $capacidadeCivils->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'CapacidadeCivils', 'action' => 'edit', $capacidadeCivils->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CapacidadeCivils', 'action' => 'delete', $capacidadeCivils->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capacidadeCivils->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Clientes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->clientes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
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
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Profissao Id
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

                            <?php foreach ($empresa->clientes as $clientes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($clientes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->name) ?>
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
                                    <?= h($clientes->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($clientes->profissao_id) ?>
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
                                    <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Emails']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->emails)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email
                                    </th>
                                        
                                                                    
                                    <th>
                                    Descricao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Cliente Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->emails as $emails): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($emails->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($emails->email) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($emails->descricao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($emails->status) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($emails->cliente_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($emails->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($emails->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Enderecos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->enderecos)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Logradouro
                                    </th>
                                        
                                                                    
                                    <th>
                                    Numero
                                    </th>
                                        
                                                                    
                                    <th>
                                    Bairro
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cidade
                                    </th>
                                        
                                                                    
                                    <th>
                                    Estado
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cep
                                    </th>
                                        
                                                                    
                                    <th>
                                    Complemento
                                    </th>
                                        
                                                                    
                                    <th>
                                    Observacao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Comprovante Residencia
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Tipo Endereco Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cliente Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->enderecos as $enderecos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($enderecos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->logradouro) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->numero) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->bairro) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->cidade) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->estado) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->cep) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->complemento) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->observacao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->comprovante_residencia) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->status) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($enderecos->tipo_endereco_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->cliente_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($enderecos->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Estado Civils']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->estado_civils)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tipo Estado Civil
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->estado_civils as $estadoCivils): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($estadoCivils->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estadoCivils->tipo_estado_civil) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($estadoCivils->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'EstadoCivils', 'action' => 'view', $estadoCivils->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstadoCivils', 'action' => 'edit', $estadoCivils->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstadoCivils', 'action' => 'delete', $estadoCivils->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadoCivils->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Grupos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->grupos)): ?>

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
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->grupos as $grupos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($grupos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($grupos->nome) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($grupos->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Profissaos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->profissaos)): ?>

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
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->profissaos as $profissaos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($profissaos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($profissaos->nome) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($profissaos->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Profissaos', 'action' => 'view', $profissaos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profissaos', 'action' => 'edit', $profissaos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profissaos', 'action' => 'delete', $profissaos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissaos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Sexos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->sexos)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->sexos as $sexos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($sexos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($sexos->name) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($sexos->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Sexos', 'action' => 'view', $sexos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sexos', 'action' => 'edit', $sexos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sexos', 'action' => 'delete', $sexos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sexos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Telefones']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->telefones)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                    
                                    <th>
                                    Numero
                                    </th>
                                        
                                                                    
                                    <th>
                                    Observacao
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cliente Id
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

                            <?php foreach ($empresa->telefones as $telefones): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($telefones->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($telefones->status) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($telefones->numero) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($telefones->observacao) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($telefones->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($telefones->cliente_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($telefones->unidade_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($telefones->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefones->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Tipo Clientes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->tipo_clientes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->tipo_clientes as $tipoClientes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($tipoClientes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tipoClientes->name) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($tipoClientes->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'TipoClientes', 'action' => 'view', $tipoClientes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'TipoClientes', 'action' => 'edit', $tipoClientes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TipoClientes', 'action' => 'delete', $tipoClientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoClientes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Unidades']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($empresa->unidades)): ?>

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
                                    Empresa Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($empresa->unidades as $unidades): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($unidades->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->nome) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($unidades->empresa_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Unidades', 'action' => 'view', $unidades->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Unidades', 'action' => 'edit', $unidades->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Unidades', 'action' => 'delete', $unidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidades->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

                <?php if (!empty($empresa->users)): ?>

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

                            <?php foreach ($empresa->users as $users): ?>
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
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
