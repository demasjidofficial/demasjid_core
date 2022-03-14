<table class="table table-hover">
    <?php echo $this->include('_table_head') ?>
    <tbody>
    <?php if (isset($data) && count($data)) : ?>
        <?php $saldo = 0 ?>
        <?php foreach ($data as $item) : 
            $amount = $item->type == 'debit' ? $item->amount : -1 * $item->amount;
            $saldo += $amount;
            $item->saldo = $saldo;
        ?>
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
