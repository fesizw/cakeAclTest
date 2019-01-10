<?php
$DateCreatedFormated = $loguser['created']->i18nFormat();
$userImg = 'files' . DS . 'Users' . DS . 'foto' . DS . $loguser['foto'];
$thumbUserImg = DS . 'files' . DS . 'Users' . DS . 'foto' . DS . 'th-' . $loguser['foto'];
?>
<div class="user-panel">
    <div class="pull-left image">       
        <?php
        $photo = new Cake\Filesystem\File($userImg);
        $userImg = DS . $userImg;
        if (empty($loguser['foto']) or ! $photo->exists()) {
            echo $this->Html->image('user_icon.svg', ['class' => 'img-circle', 'alt' => 'User Image']);
        } else {
            echo $this->Html->image(
                    '/files/Users/foto/th-' . $loguser['foto'], [
                'alt' => $loguser['nome'],
                'class' => 'img-circle',
                'fullBase' => true
                    ]
            );
        }
        ?>
    </div>
    <div class="pull-left info">
        <p><?= $loguser['nome'] ?></p>
    </div>
</div>
