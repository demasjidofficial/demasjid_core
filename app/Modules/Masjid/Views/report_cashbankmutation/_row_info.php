<td><?php echo $item->transaction_date->format('d M Y') ?></td>
<td><?php echo esc($item->description) ?></td>
<td><?php echo esc($item->chart_of_account_name) ?></td>
<td><?php echo strtoupper($item->group_account) ?></td>
<td class="text-right"><?php echo ($item->amount > 0 ? local_currency($item->amount, 'IDR', null, 2) : '') ?></td>
<td class="text-right"><?php echo ($item->amount < 0 ? local_currency($item->amount, 'IDR', null, 2) : '') ?></td>
