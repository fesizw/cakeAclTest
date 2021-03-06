<section class="content-header">
  <h1>
    <?php echo __('Module'); ?>
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
                                                                                                                <dt><?= __('Module Name') ?></dt>
                                        <dd>
                                            <?= h($module->module_name) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Filials']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($module->filials)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Filial Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description
                                    </th>
                                        
                                                                    
                                    <th>
                                    Matriz
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Company Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($module->filials as $filials): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($filials->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($filials->filial_name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($filials->description) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($filials->matriz) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($filials->company_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Filials', 'action' => 'view', $filials->id], ['class'=>'btn btn-info btn-xs btn-flat']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Filials', 'action' => 'edit', $filials->id], ['class'=>'btn btn-warning btn-xs btn-flat']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Filials', 'action' => 'delete', $filials->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filials->id), 'class'=>'btn btn-danger btn-xs btn-flat']) ?>    
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
