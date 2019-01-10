<?php $this->layout = 'AdminLTE.register'; ?>

<?= $this->Form->create([$user, $company, $filial]); ?>
<div class="form-group has-feedback">
    <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => __('E-mail'), 'label' => false]) ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('password', ['id' => 'password', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Password')]) ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('confirn_password', ['id' => 'confirm_password', 'type' => 'password', 'label' => false, 'class' => 'form-control', 'placeholder' => __('Confirm Password')]) ?>
    <span id="pass" class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('user_name', ['label' => false, 'class' => 'form-control', 'placeholder' => __('User Name')]) ?>
    <span id="pass" class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('company_name', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Company Name')]) ?>
    <span id="pass" class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Description')]) ?>
    <span id="pass" class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8"></div>
    <!-- /.col -->
    <div class="col-xs-4">
        <?= $this->Form->button(__('Sign up'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) ?>
    </div>
    <!-- /.col -->
</div>
<?= $this->Form->end(); ?>