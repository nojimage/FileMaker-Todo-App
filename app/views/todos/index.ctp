<?php 

$this->pageTitle = __('TODOの一覧', true);

$javascript->codeBlock("
", array('inline' => false));
?>
<h2><?php echo $this->pageTitle; ?></h2>

<div class="todos index content">

<?php if (empty($todos)) : ?>
<p><?php __('登録されているTODOはありません') ?></p>
<?php else: ?>
<p class="pagination-count"><?php echo $paginator->counter(array('format' => __('全 %count% 件, %start% - %end% を表示', true)));?></p>

<table class="data-table">
<tr>
    <th><?php echo $paginator->sort('アイテム', 'アイテム');?></th>
    <th><?php echo $paginator->sort('作成日', '作成日');?></th>
    <th><?php echo $paginator->sort('期限', '期限');?></th>
    <th><?php echo $paginator->sort('カテゴリ', 'カテゴリ');?></th>
    <th><?php echo $paginator->sort('優先順位', '優先順位');?></th>
    <th><?php echo $paginator->sort('状況', '状況');?></th>
    <th><?php echo $paginator->sort('終了', '終了');?></th>
    <th><?php echo $paginator->sort('完了日', '完了日');?></th>
    <th class="actions"><?php __('操作');?></th>
</tr>
<?php
$i = 0;
foreach ($todos as $todo): $i++;
?>
    <tr<?php echo ($i % 2 == 0) ? ' class="altrow"' : '';?>>
        <td><?php echo $html->link($todo['Todo']['アイテム'], array('action' => 'view',  $todo['Todo']['-recid'])) ?></td>
        <td><?php echo $todo['Todo']['作成日'] ? $time->format('Y-m-d', $todo['Todo']['作成日']) : '' ?></td>
        <td><?php echo $todo['Todo']['期限'] ? $time->format('Y-m-d', $todo['Todo']['期限']) : ''?></td>
        <td><?php echo $todo['Todo']['カテゴリ'] ?></td>
        <td><?php echo $todo['Todo']['優先順位'] ?></td>
        <td><?php echo $todo['Todo']['状況'] ?></td>
        <td><?php echo $todo['Todo']['終了'] ? $todo['Todo']['終了'] : '' ?></td>
        <td><?php echo $todo['Todo']['完了日'] ? $time->format('Y-m-d', $todo['Todo']['完了日']) : '' ?></td>
        <td class="actions">
            <?php echo $html->link(__('編集', true), array('action' => 'edit', $todo['Todo']['-recid']), null, null, false); ?>
            <?php echo $html->link(__('削除', true), array('action' => 'delete', $todo['Todo']['-recid']), null, sprintf(__(' %s を削除しますか?', true), $todo['Todo']['アイテム']), false); ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<div class="paging">
    <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
    <?php echo $paginator->numbers();?>
    <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<?php endif; ?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link(__('Todoの追加', true), array('action' => 'add')); ?></li>
    </ul>
</div>

