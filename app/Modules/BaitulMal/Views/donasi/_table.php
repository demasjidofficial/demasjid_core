<table class="table table-hover">
    <?php echo $this->include('_table_head') ?>
    <tbody>
    <?php if (isset($data) && count($data)) : ?>
        <?php $counter = 0; ?>
        <?php foreach ($data as $item) : 
                if($item->payment_category = 1) {
                    foreach ( $master_bank as $element ) {
                        if ( $item->paymentmethod_id == $element['id'] ) {
                            $item->path_logo = $element['path_logo'];
                        }
                    }
                }
            ?>
            <tr>
                <td>
                    <?php 
                        echo ++$counter;
                    ?>
                    <!-- <input type="checkbox" name="selects[]" class="form-check"> -->
                </td>
                <?php echo view($viewPrefix.'\_row_info', ['item' => $item, 'editUrl' => url_to($controller,$item->id), 'deleteUrl' => url_to($controller,$item->id)]) ?>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
