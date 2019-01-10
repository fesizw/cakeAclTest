<!--modal start-->
<div class="modal modal-danger fade" id="modal-delete" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title"><?= __('Attention') ?></h4>
            </div>
            <div class="modal-body">
                <p><?= __('Confirm to delete this entry?') ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"><?= __('Close') ?></button>
                <button id="delete_bnt" onclick="deleteEntre();" type="button" class="btn btn-outline"><?= __('Delete entry') ?></button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--modal end-->
<!--JS-->
<?= $this->Html->script('modalCall'); ?>