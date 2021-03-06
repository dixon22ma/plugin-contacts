<section id="main">
    <div class="page-header">
        <h2><?= t('Remove Item') ?></h2>
    </div>
<pre>

</pre>
    <div class="confirm">
        <p class="alert alert-info">
            <?= t('Do you really want to remove this item: "%s"?', $item['item']) ?>
        </p>

        <div class="form-actions">
            <?= $this->url->link(t('Yes'), 'ContactsItemsController', 'remove', array('plugin' => 'contacts', 'item_id' => $item['id']), true, 'btn btn-red') ?>
            <?= t('or') ?>
            <?= $this->url->link(t('cancel'), 'ContactsItemsController', 'config', array('plugin' => 'contacts'), false, 'close-popover') ?>
        </div>
    </div>
</section>
