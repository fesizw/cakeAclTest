<section class="content-header">
  <h1>
    <?php echo __('Representante'); ?>
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
                                                                                                                <dt><?= __('Tipo') ?></dt>
                                        <dd>
                                            <?= h($representante->tipo) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Cliente') ?></dt>
                                <dd>
                                    <?= $representante->has('cliente') ? $representante->cliente->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Representante Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($representante->representante_id) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Representantes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($representante->representantes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tipo
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Representante Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Cliente Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($representante->representantes as $representantes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($representantes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($representantes->tipo) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($representantes->representante_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($representantes->cliente_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Representantes', 'action' => 'view', $representantes->id], ['class'=>'btn btn-info btn-xs btn-flat']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Representantes', 'action' => 'edit', $representantes->id], ['class'=>'btn btn-warning btn-xs btn-flat']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Representantes', 'action' => 'delete', $representantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $representantes->id), 'class'=>'btn btn-danger btn-xs btn-flat']) ?>    
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
