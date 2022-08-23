<table class="table table-hover">
    <?php echo $this->include('_table_head') ?>
    <tbody>
    <?php if (isset($timStaff) && count($timStaff)) : ?>
        <?php foreach ($timStaff as $item) : ?>
            <tr>
                <td>
                    <input type="checkbox" name="selects[]" class="form-check">
                </td>
                <?php echo view($viewPrefix.'\_row_info', ['item' => $item, 'editUrl' => url_to($controller,$item->id), 'deleteUrl' => url_to($controller,$item->id)]) ?>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
