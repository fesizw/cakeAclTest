<section class="content-header">
  <h1>
    Endereco Cliente
    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($enderecoCliente, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('cep');
            echo $this->Form->input('endereco');
            echo $this->Form->input('numero');
            echo $this->Form->input('estado');
            echo $this->Form->input('tipo');
            echo $this->Form->input('cidade');
            echo $this->Form->input('bairro');
            echo $this->Form->input('complemento');
            echo $this->Form->input('observacao');
            echo $this->Form->input('comprovante_cliente');
            echo $this->Form->input('client_id', ['options' => $clients]);
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

