<td><?php echo $item->transaction_date->format('d M Y') ?></td>
<td><?php echo esc($item->description) ?></td>
<td><?php echo esc($item->chart_of_account_name) ?></td>
<td><?php echo strtoupper($item->group_account) ?></td>
<td><?php echo format_number($item->amount) ?></td>
