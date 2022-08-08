<<<<<<< HEAD
<table class="table table-hover">
    <?php echo $this->include('_table_head') ?>
=======
<table class="table table-hover table-sm">
    <?= $this->include('_table_head') ?>
>>>>>>> 7e39c6ab64ab10ca84a3fa1a1d3b249e4dc83fc1
    <tbody>
    <?php if (isset($data) && count($data)) : ?>
        <?php foreach ($data as $item) : ?>
            <tr class="tr-td-middle">
                <td>
                    <input type="checkbox" name="selects[]" class="form-check">
                </td>
                <?php echo view($viewPrefix.'\_row_info', ['item' => $item, 'editUrl' => url_to($controller,$item->id), 'deleteUrl' => url_to($controller,$item->id)]) ?>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
<?= $pager->links() ?>