<!-- Content Header (Page header) -->
<?php $aux = 0; ?>
<section class="content-header">
    <h1>
        <?= __('Users') ?>
        <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs btn-flat']) ?></div>
    </h1>
</section>

<?php require_once(WWW_ROOT . 'include/mask.php'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('List of') ?> <?= __('Users') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding" style="margin: 15px">
                    <table class="table table-hover" id="table_data">
                        <thead>
                            <tr>
                                <th class="no-sort">order</th>
                                <th><?= __('id') ?></th>
                                <th><?= __('User Name') ?></th>
                                <th><?= __('Login') ?></th>
                                <th class="no-sort"><?= __('Photo') ?></th>
                                <th><?= __('Unidade') ?></th>
                                <th class="no-sort"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <?php
                                        $aux++;
                                        echo $aux;
                                        ?>
                                    </td>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td style="cursor: grab;"><?= h($user->nome) ?></td>
                                    <td style="cursor: grab;"><?= h($user->login) ?></td>
                                    <td>
                                        <?php
                                        $photo = new Cake\Filesystem\File('files' . DS . 'Users' . DS . 'foto' . DS . $user->foto);
                                        if (!$user->has('foto') or ! $photo->exists()) {
                                            echo $this->Html->image(
                                                    'user_icon.svg', [
                                                'class' => 'img-circle',
                                                'alt' => 'User Image',
                                                'fullBase' => true
                                                    ]
                                            );
                                        } else {
                                            echo $this->Html->image(
                                                    DS . 'files' . DS . 'Users' . DS . 'foto' . DS . 'th-' . $user->foto, [
                                                'alt' => $user->nome,
                                                'url' => [
                                                    'action' => 'view',
                                                    $user->id
                                                ]
                                                    ]
                                            );
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?= $this->Html->link($user->unidade->nome, ['controller' => 'Unidades', 'action' => 'view', $user->unidade->id]); ?>
                                    </td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-xs btn-flat']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-xs btn-flat']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-xs btn-flat delete_old', 'style' => 'display:none;', 'id' => 'delete' . $user->id, 'value' => $user->id]) ?>
                                        <?= $this->Form->button(__('Delete'), ['action' => 'delete', 'data-id' => $user->id, 'type' => 'button', 'class' => 'btn btn-danger btn-xs btn-flat deleteBNT', 'data-toggle' => 'modal', 'data-target' => '#modal-delete', 'onClick' => "deleteModal($user->id)"]); ?> 
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
<?= $this->element('dataTable') ?>
<?= $this->element('modal') ?>
