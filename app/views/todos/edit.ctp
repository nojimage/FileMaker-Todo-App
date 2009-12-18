<?php 
$this->pageTitle = __('TODOの編集', true);

$fields = array(
	'アイテム' => array('label' => __('アイテム', true)),
	'カテゴリ' => array('label' => __('カテゴリ', true), 'options' => Todo::$categories_options),
	'優先順位' => array('label' => __('優先順位', true), 'options' => Todo::$priority_options),
	'状況' => array('label' => __('状況', true), 'options' => Todo::$status_options),
	'作成日' => array('label' => __('作成日', true), 'dateFormat' => 'YMD', 'monthNames' => false, 'minYear' => date('Y'), 'maxYear' => date('Y') + 1),
	'期限' => array('label' => __('期限', true), 'dateFormat' => 'YMD', 'monthNames' => false, 'minYear' => date('Y'), 'maxYear' => date('Y') + 1),
	'備考' => array('label' => __('備考', true), 'type' => 'textarea'),
	'完了日' => array('label' => __('完了日', true), 'type' => 'text', 'value' => ($form->value('Todo.完了日') ? $time->format('Y-m-d', $form->value('Todo.完了日')) : '')),
	'終了' => array('label' => __('終了', true), 'type' => 'checkbox'),
);

$javascript->codeBlock("
", array('inline' => false));

?>
<h2><?php echo $this->pageTitle; ?></h2>
<?php echo $form->create(); ?>
<?php echo $form->hidden('Todo.-recid'); ?>
<?php echo $form->inputs($fields); ?>
<?php echo $form->end(__('保存', true)); ?>

<div class="actions">
    <ul>
        <li><?php echo $html->link(__('削除', true), array('action' => 'delete', $form->value('Todo.-recid')), null, __('このレコードを削除しますか?', true)); ?></li>
        <li><?php echo $html->link(__('TODOの一覧', true), array('action' => 'index'));?></li>
    </ul>
</div>