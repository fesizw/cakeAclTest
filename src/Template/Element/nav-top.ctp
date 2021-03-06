<nav class="navbar navbar-static-top" style="filter: brightness(108%);">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li><!-- start message -->
                                <a href="#">
                                    <div class="pull-left">
                                        <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                                    </div>
                                    <h4>
                                        Support Team
                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <!-- end message -->
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <?php echo $this->Html->image('user3-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                                    </div>
                                    <h4>
                                        AdminLTE Design Team
                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <?php echo $this->Html->image('user4-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                                    </div>
                                    <h4>
                                        Developers
                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <?php echo $this->Html->image('user3-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                                    </div>
                                    <h4>
                                        Sales Department
                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <?php echo $this->Html->image('user4-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                                    </div>
                                    <h4>
                                        Reviewers
                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                    page and may cause design problems
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user text-red"></i> You changed your username
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Design some buttons
                                        <small class="pull-right">20%</small>
                                    </h3>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Create a nice theme
                                        <small class="pull-right">40%</small>
                                    </h3>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Some task I need to do
                                        <small class="pull-right">60%</small>
                                    </h3>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Make beautiful transitions
                                        <small class="pull-right">80%</small>
                                    </h3>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end task item -->
                        </ul>
                    </li>
                    <li class="footer">
                        <a href="#">View all tasks</a>
                    </li>
                </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php
                    $DateCreatedFormated = $loguser['created']->i18nFormat();
                    $userImg = 'files' . DS . 'Users' . DS . 'foto' . DS . $loguser['foto'];
                    $thumbUserImg = DS . 'files' . DS . 'Users' . DS . 'foto' . DS . 'th-' . $loguser['foto'];
                    // $HEAD_hash = file_get_contents(APP . '.git/refs/heads/master');
                    $photo = new Cake\Filesystem\File($userImg);
                    $userImg = DS . $userImg;
                    if (empty($loguser['foto']) OR ! $photo->exists()) {
                        echo $this->Html->image('user_icon.svg', ['class' => 'user-image', 'alt' => 'User Image', 'fullBase' => true]);
                    } else {
                        echo $this->Html->image(
                                $thumbUserImg, [
                            'alt' => $loguser['nome'],
                            'class' => 'user-image',
                            'fullBase' => true
                                ]
                        );
                    }
                    ?>					
                    <span class="hidden-xs"><?= $loguser['nome'] ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <?php
                        if (empty($loguser['foto']) or ! file_exists(WWW_ROOT . $userImg)) {
                            echo $this->Html->image('user_icon.svg', ['class' => 'img-circle', 'alt' => 'User Image', 'fullBase' => true]);
                        } else {
                            echo $this->Html->image(
                                    $userImg, [
                                'alt' => $loguser['nome'],
                                'class' => 'img-circle',
                                'style' => 'object-fit: cover;',
                                'fullBase' => true
                                    ]
                            );
                        }
                        ?>
                        <p>
                            <?= $loguser['nome'] ?>
                            <small>
                                <?= __('Member') ?> <?= __('since') ?> <?= $DateCreatedFormated ?>
                                <!--Nov. 2012-->
                            </small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?=
                            $this->Html->link(
                                    __('Profile'), [
                                'controller' => 'Users',
                                'action' => 'edit',
                                $loguser['id'],
                                    ], ['class' => 'btn btn-default btn-flat']
                            );
                            ?>
                        </div>
                        <div class="pull-right">
                            <?= $this->Html->link(__('Sign out'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat']); ?>
                            <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
</nav>
