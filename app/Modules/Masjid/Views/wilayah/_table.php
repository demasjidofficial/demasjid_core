<table class="table table-hover table-sm">
    <?= $this->include('_table_head') ?>
    <tbody>
    <?php if (isset($data) && count($data)) : ?>
        <?php foreach ($data as $item) : ?>
            <tr class="tr-td-middle">
                <td>
                    <input type="checkbox" name="selects[]" class="form-check">
                </td>
                <?php echo view($viewPrefix.'\_row_info', ['item' => $item, 'editUrl' => url_to($controller, $item->kode), 'deleteUrl' => url_to($controller, $item->kode)]) ?>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
