<div class="text-center text-bold">
    <?= $title['name'] ?><br>
    <?= $title['type'] ?><br>
    <?= $title['period'] ?><br>
</div>
<hr>
<table class="table table-hover table-bordered" width="100%">
    <thead>
        <?php if (isset($headers) && count($headers)) : ?>
        <tr class="text-center">            
            <?php foreach ($headers as $column => $title) : ?>
            <th><?= strtoupper($title) ?></th>
            <?php endforeach ?>            
        </tr>
        <?php endif ?>
    </thead>
    <tbody>
        <?php 
            $totalDebit = $totalCredit = 0;
            $no = 1;
        ?>
        <?php if (isset($data) && count($data)) : ?>        
        <?php foreach ($data as $item) : 
          if($item->type == 'debit'){
            $totalDebit += $item->amount ;
          }else{
            $totalCredit += $item->amount ;
          }          
        ?>
        <tr>
            <td class="text-center"><?= $no++ ?></td>
            <?php echo view($viewPrefix.'\_row_info', ['item' => $item]) ?>
        </tr>
        <?php endforeach ?>
        <?php endif ?>
    </tbody>
    <tfoot>
        <tr>
            <th class="text-right" colspan="5">Mutasi Kas dan Bank</th>
            <th class="text-right"><?php echo local_currency($totalDebit, 'IDR', null, 2) ?></th>
            <th class="text-right"><?php echo local_currency($totalCredit, 'IDR', null, 2) ?></th>
        </tr>
        <tr>
            <th class="text-right" colspan="5">Saldo Awal Mutasi Kas dan Bank</th>
            <th class="text-right"><?php echo local_currency($startBalance, 'IDR', null, 2) ?></th>            
        </tr>
        <tr>
            <th class="text-right" colspan="5">Saldo Akhir Mutasi Kas dan Bank</th>
            <th class="text-right"><?php echo local_currency($startBalance + $totalDebit - $totalCredit, 'IDR', null, 2) ?></th>            
        </tr>
    </tfoot>
</table>
