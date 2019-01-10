
<?php

$this->Html->css(
        [
    // 'AdminLTE./plugins/datatables/jquery.dataTables.min',
    'AdminLTE./plugins/datatables/dataTables.bootstrap',
    'AdminLTE./plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css',
    'AdminLTE./plugins/datatables/extensions/RowReorder/css/rowReorder.dataTables.min.css'
        ], ['block' => 'css']
);
?>
<?php $this->start('scriptBottom'); ?>
<?= $this->Html->script('dataTableCall'); ?>
<?php $this->end(); ?>


