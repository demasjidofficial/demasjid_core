<table class="table table-hover table-sm">
    <?php echo $this->include('_table_head') ?>
    <tbody>
    <?php if (isset($data) && count($data)) : ?>
        <?php $counter = 0; ?>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td>
                    <?php 
                        echo ++$counter;
                        $item->language = $languagesItems[$item->language_id];
                    ?>
                    <!-- <input type="checkbox" name="selects[]" class="form-check"> -->
                </td>
                <?php echo view($viewPrefix.'\_row_info', ['item' => $item, 'editUrl' => url_to($controller,$item->id), 'deleteUrl' => url_to($controller,$item->id)]) ?>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
