<h1>Hello</h1>
<?= h($user->email) ?>


<?php foreach($userclasses as $userclass): ?>
    <?php echo $userclass; ?>
    <?php echo 'hello' ?>


<?php endforeach; ?>


<?php foreach ($userclasses as $userclass): ?>
    <tr>
        <td><?= $this->Number->format($userclass->id) ?></td>
        <td><?= $userclass->has('user') ? $this->Html->link($userclass->user->id, ['controller' => 'Users', 'action' => 'view', $userclass->user->id]) : '' ?></td>
        <td><?= h($userclass->class) ?></td>
        <td><?= h($userclass->modified) ?></td>
        <td class="actions">
            <?= $this->Html->link(__('View'), ['action' => 'view', $userclass->id]) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userclass->id]) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userclass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userclass->id)]) ?>
        </td>
    </tr>
<?php endforeach; ?>