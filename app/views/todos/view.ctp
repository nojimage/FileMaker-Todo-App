<?php
/**
 * View Todo
 *
 * PHP versions 5
 *
 * Copyright 2010, ELASTIC Consultants Inc. (http://elasticconsultants.com/)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @filesource
 * @package    app
 * @subpackage app.views.todos
 * @author     nojimage <nojimage at gmail.com>
 * @copyright  2010 ELASTIC Consultants Inc.
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 */
?>
<div class="ads view">
<h2><?php  __('Todo');?></h2>
<dl>
<?php $i = 0; $class = ' class="altrow"';?>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('アイテム'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['アイテム']; ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('状況'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['状況']; ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('作成日'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['作成日'] ? $time->format('Y-m-d', $todo['Todo']['作成日']) : '' ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('期限'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['期限'] ? $time->format('Y-m-d', $todo['Todo']['期限']) : ''?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('カテゴリ'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['カテゴリ']; ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('優先順位'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['優先順位']; ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('備考'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo nl2br($todo['Todo']['備考']); ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('完了日'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['完了日'] ? $time->format('Y-m-d', $todo['Todo']['完了日']) : '' ?>
    &nbsp;</dd>
    <dt <?php if ($i % 2 == 0) echo $class;?>><?php __('終了'); ?></dt>
    <dd <?php if ($i++ % 2 == 0) echo $class;?>><?php echo $todo['Todo']['終了'] ? '○' : '' ?>
    &nbsp;</dd>
</dl>
</div>
<div class="actions">
<ul>
    <li><?php echo $html->link(__('編集', true), array('action' => 'edit', $todo['Todo']['-recid'])); ?></li>
    <li><?php echo $html->link(__('削除', true), array('action' => 'delete', $form->value('Todo.-recid')), null, __('このレコードを削除しますか?', true)); ?></li>
    <li><?php echo $html->link(__('TODOの一覧', true), array('action' => 'index')); ?></li>
</ul>
</div>

