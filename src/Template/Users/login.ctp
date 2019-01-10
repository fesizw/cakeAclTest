<?php $this->layout = 'AdminLTE.login'; ?>

<?= $this->Form->create(); ?>
<div class="form-group has-feedback">
    <?= $this->Form->control('login', ['class' => 'form-control', 'placeholder' => __('Login'), 'label' => false]) ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('password', ['name' => 'senha', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Password')]) ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8"></div>
    <!-- /.col -->
    <div class="col-xs-4">
        <?= $this->Form->button(__('Sign in'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) ?>
    </div>
    <!-- /.col -->
</div>
<?= $this->Form->end(); ?>