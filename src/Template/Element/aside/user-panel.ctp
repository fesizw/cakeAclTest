<?php
#$DateCreatedFormated = $loguser['created']->i18nFormat();
$userImg = 'files' . DS . 'Users' . DS . 'photo' . DS . $loguser['photo'];
$thumbUserImg = DS . 'files' . DS . 'Users' . DS . 'photo' . DS . 'th-' . $loguser['photo'];
?>
<div class="user-panel">
    <div class="pull-left image">       
        <?php
        $photo = new Cake\Filesystem\File($userImg);
        $userImg = DS . $userImg;
        if (empty($loguser['photo']) or ! $photo->exists()) {
            echo $this->Html->image('user_icon.svg', ['class' => 'img-circle', 'alt' => 'User Image']);
        } else {
            echo $this->Html->image(
                    '/files/Users/photo/th-' . $loguser['photo'], [
                'alt' => $loguser['user_name'],
                'class' => 'img-circle',
                'fullBase' => true
                    ]
            );
        }
        ?>
    </div>
    <div class="pull-left info">
        <p><?= $loguser['user_name'] ?></p>
    </div>
</div>
