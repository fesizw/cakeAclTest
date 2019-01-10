<?php

use Cake\I18n\I18n;

$version = trim(exec('git describe --tags'));
$versionDate = new \DateTime(trim(exec('git log -n1 --pretty=%ci ' . $version)));

switch (I18n::getLocale()) {
    case 'pt_BR':
        $versionDate->setTimezone(new \DateTimeZone('America/Sao_Paulo'));
        break;

    default:
        $versionDate->setTimezone(new \DateTimeZone('America/Sao_Paulo'));
        // debug(I18n::getLocale());
        break;
}

$return = sprintf('%s-dev (%s)', $version, $versionDate->format('d/m/Y H:i:s'));
?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b><?= __('Version') ?></b> <?php echo $return; ?>
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="http://asprev.com.br" target="_blank">ASPREV</a>.</strong> <?= __('All rights reserved.'); ?>
</footer>