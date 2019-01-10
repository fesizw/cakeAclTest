<section class="content-header">
    <h1>
        <?php echo __('Login Tab'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a style="cursor: pointer;" onClick="window.history.back()"><i class="fa fa-dashboard"></i> <?= __('Back') ?></a>
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
                        <?php foreach ($loginTab as $loginTab) : ?>
                            <dt><?= __('Nome Autorizador') ?></dt>
                            <dd>
                                <?= h($loginTab->nome_autorizador) ?>
                            </dd>
                            <dt><?= __('Setor') ?></dt>
                            <dd>
                                <?= h($loginTab->Setor) ?>
                            </dd>
                            <dt><?= __('Situacao') ?></dt>
                            <dd>
                                <?= h($loginTab->Situacao) ?>
                            </dd>
                            <dt><?= __('Unidade') ?></dt>
                            <dd>
                                <?= h($loginTab->unidade) ?>
                            </dd>
                            <dt><?= __('GT') ?></dt>
                            <dd>
                                <?= h($loginTab->GT) ?>
                            </dd>
                            <dt><?= __('Profissao') ?></dt>
                            <dd>
                                <?= h($loginTab->Profissao) ?>
                            </dd>
                            <dt><?= __('Formulario') ?></dt>
                            <dd>
                                <?= $this->Number->format($loginTab->formulario) ?>
                            </dd>
                            <dt><?= __('Codquadpessoal') ?></dt>
                            <dd>
                                <?= $this->Number->format($loginTab->codquadpessoal) ?>
                            </dd>
                            <dt><?= __('Online') ?></dt>
                            <dd>
                                <?= $loginTab->online ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Usuários') ?></dt>
                            <dd>
                                <?= $loginTab->Usuários ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Alterar') ?></dt>
                            <dd>
                                <?= $loginTab->Alterar ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Relatorio') ?></dt>
                            <dd>
                                <?= $loginTab->Relatorio ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Apagar') ?></dt>
                            <dd>
                                <?= $loginTab->Apagar ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Funcionario') ?></dt>
                            <dd>
                                <?= $loginTab->Funcionario ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Honorario') ?></dt>
                            <dd>
                                <?= $loginTab->Honorario ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('ContatoInicial') ?></dt>
                            <dd>
                                <?= $loginTab->ContatoInicial ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Supervisao') ?></dt>
                            <dd>
                                <?= $loginTab->Supervisao ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('ContaCorrente') ?></dt>
                            <dd>
                                <?= $loginTab->ContaCorrente ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('ConfCOnt') ?></dt>
                            <dd>
                                <?= $loginTab->ConfCOnt ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Unid') ?></dt>
                            <dd>
                                <?= $loginTab->Unid ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Distrib') ?></dt>
                            <dd>
                                <?= $loginTab->Distrib ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('GestJur') ?></dt>
                            <dd>
                                <?= $loginTab->GestJur ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Recep') ?></dt>
                            <dd>
                                <?= $loginTab->Recep ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('GerencFinanc') ?></dt>
                            <dd>
                                <?= $loginTab->GerencFinanc ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('GerenciaJur') ?></dt>
                            <dd>
                                <?= $loginTab->GerenciaJur ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('GerencAdm') ?></dt>
                            <dd>
                                <?= $loginTab->GerencAdm ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('GerencRecep') ?></dt>
                            <dd>
                                <?= $loginTab->GerencRecep ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Autoriza') ?></dt>
                            <dd>
                                <?= $loginTab->Autoriza ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('PedirValor') ?></dt>
                            <dd>
                                <?= $loginTab->PedirValor ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('SupervSetor') ?></dt>
                            <dd>
                                <?= $loginTab->SupervSetor ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Prazos') ?></dt>
                            <dd>
                                <?= $loginTab->Prazos ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('JPA') ?></dt>
                            <dd>
                                <?= $loginTab->JPA ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('ADV') ?></dt>
                            <dd>
                                <?= $loginTab->ADV ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('DCC') ?></dt>
                            <dd>
                                <?= $loginTab->DCC ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('JPJEstag') ?></dt>
                            <dd>
                                <?= $loginTab->JPJEstag ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('Homolog') ?></dt>
                            <dd>
                                <?= $loginTab->homolog ? __('Yes') : __('No'); ?>
                            </dd>
                            <dt><?= __('IsAtSimultaneo') ?></dt>
                            <dd>
                                <?= $loginTab->isAtSimultaneo ? __('Yes') : __('No'); ?>
                            </dd>
                        </dl>
                    <?php endforeach; ?>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->
</section>