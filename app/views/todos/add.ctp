<?php 
$this->pageTitle = __('TODOの追加', true);

$fields = array(
    'アイテム' => array('label' => __('アイテム', true)),
    'カテゴリ' => array('label' => __('カテゴリ', true), 'options' => $valueLists['カテゴリ']),
    '優先順位' => array('label' => __('優先順位', true), 'options' => $valueLists['優先順位'], 'selected' => '中'),
    '状況' => array('label' => __('状況', true), 'options' => $valueLists['状況']),
    '作成日' => array('label' => __('作成日', true), 'dateFormat' => 'YMD', 'monthNames' => false, 'minYear' => date('Y'), 'maxYear' => date('Y') + 1),
    '期限' => array('label' => __('期限', true), 'dateFormat' => 'YMD', 'monthNames' => false, 'minYear' => date('Y'), 'maxYear' => date('Y') + 1),
    '備考' => array('label' => __('備考', true), 'type' => 'textarea'),
);

$javascript->codeBlock("
", array('inline' => false));

?>
<h2><?php echo $this->pageTitle; ?></h2>
<?php echo $form->create(); ?>
<?php echo $form->inputs($fields); ?>
<?php echo $form->end(__('作成', true)); ?>

<div class="actions">
    <ul>
        <li><?php echo $html->link(__('TODOの一覧', true), array('action' => 'index'));?></li>
    </ul>
</div>