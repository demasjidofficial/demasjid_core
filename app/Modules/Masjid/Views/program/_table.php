<table class="table table-hover table-sm">
    <?php echo $this->include('_table_head') ?>
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


<!--span class="right badge badge-danger">New</span-->
