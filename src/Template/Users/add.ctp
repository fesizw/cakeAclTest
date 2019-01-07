<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user, ['id' => 'frm']) ?>
    <fieldset id="fields">
        <div style="background-color: #f0f0f0; padding: 50px; border-radius: 20px;">
            <legend><?= __('Add User') ?> </legend>
            <br>
            <?php
            echo $this->Form->control('username', ['label' => 'Nome de Usuário']);
            echo $this->Form->control('password', ['label' => 'Senha']);
            echo $this->Form->control('group_id', ['options' => $groups, 'label' => 'Grupo de Usuário']);
            ?>
        </div>
        <br>
        <div style="background-color: #f0f0f0; padding: 50px; border-radius: 20px;">
            <legend><?= __('Add Email') ?></legend>
            <p id="add" style="color: blue; cursor: pointer; margin-top: 5px;" onclick="addNew();">Adicionar</p>
            <br>
            <?php
            echo $this->Form->control('email[]', ['label' => 'E-mail']);
            echo $this->Form->control('descricao[]', ['label' => 'Descrição', 'type' => 'textarea', 'excape' => false]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')); ?>
    <?= $this->Form->end(); ?>
</div>
<script type="text/javascript">
    function addNew() {

        var element1 = document.getElementById("add").parentElement;
        var element2 = element1.cloneNode(true);

        element2.removeChild(element2.childNodes[3]);

        document.getElementById("fields").appendChild(document.createElement("br"));
        document.getElementById("fields").appendChild(element2);
    }
</script>