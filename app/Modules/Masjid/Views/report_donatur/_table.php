<div class="text-center text-bold">
    <div><?= $title['name'] ?></div>
    <div><?= $title['type'] ?></div>
    <div><?= $title['period'] ?></div>    
</div>
<hr>
<table class="table table-hover">
    <?php echo $this->include('_table_head') ?>
    <tbody>
    <?php if (isset($data) && count($data)) : ?>
        <?php $saldo = 0 ?>
        <?php foreach ($data as $item) : 
            
        ?>
            <tr>                
                <?php echo view($viewPrefix.'\_row_info', ['item' => $item, 'editUrl' => url_to($controller,$item->id), 'deleteUrl' => url_to($controller,$item->id)]) ?>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
