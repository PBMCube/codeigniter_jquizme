<?php
//var_dump($users);die();

echo "<pre>";
print_r($users);
echo "</pre>";


if ($users) {
    foreach ($users as $user) {


        echo $user->order_num . '<br>';
        echo $user->user->first_name . '<br>';
        echo $user->user->last_name . '<br>';
        echo $user->user->email . '<br>';
    }
}
?>

<table cellpadding=0 cellspacing=10>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo ($user->order_num); ?></td>
            <td><?php echo ($user->user->first_name); ?></td>
            <td><?php echo ($user->user->last_name); ?></td>
            <td><?php echo ($user->user->email); ?></td>
            <?php
            if ($user->payed == 0) {
                //echo '<td>'.anchor('activate/activate/'.$user->user->id, 'do it').'</td>';
                echo '<td>'.anchor('activate/activate/'.$user->order_num, 'do it').'</td>';
            } else {
                echo '<td>done</td>';
            }
            ?>
        </tr>
<?php endforeach; ?>
</table>



