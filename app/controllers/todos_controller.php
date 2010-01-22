<?php
/**
 * Todos Controller
 *
 * PHP versions 5
 *
 * Copyright 2010, ELASTIC Consultants Inc. (http://elasticconsultants.com/)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @package    app
 * @subpackage app.controllers
 * @author     nojimage <nojimage at gmail.com>
 * @copyright  2010 ELASTIC Consultants Inc.
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 */
class TodosController extends AppController {

    public $name = 'Todos';

    public $uses = array('Todo');

    /**
     *
     * @var Todo
     */
    public $Todo;

    /**
     * 一覧表示 
     */
    public function index()
    {
        $this->set('todos', $this->paginate());
    }

    /**
     *  レコード表示 
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('不正なIDです', true));
            $this->redirect(array('action'=>'index'));
        }

        $this->set('todo', $this->Todo->read(null, $id));
    }

    /**
     * レコード追加
     */
    public function add()
    {
        // 値一覧のセット
        $this->set('valueLists', $this->Todo->valueLists);
        
        if (!empty($this->data)) {
            // POST時
            $this->Todo->create();

            if ($this->Todo->save($this->data)) {
                $this->Session->setFlash(__('TODOを追加しました', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('TODOの追加に失敗しました', true));
            }
        }
    }

    /**
     * レコード編集
     */
    public function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('不正なIDです', true));
            $this->redirect(array('action'=>'index'));
        }

        // 値一覧のセット
        $this->set('valueLists', $this->Todo->valueLists);
        
        if (!empty($this->data)) {

            if (empty($this->data['Todo']['id'])) {
                $this->data['Todo']['id'] = $id;
            }

            if ($this->Todo->save($this->data)) {
                $this->Session->setFlash(__('TODOを保存しました', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('TODOの保存に失敗しました', true));
            }
        }

        if (empty($this->data)) {
            $this->data = $this->Todo->read(null, $id);
        }

    }

    /**
     * レコード削除
     */
    public function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('不正なIDです', true));
            $this->redirect(array('action'=>'index'));
        }

        if ($this->Todo->del($id)) {
            $this->Session->setFlash(__('TODOを削除しました', true));
            $this->redirect(array('action'=>'index'));
        }
    }
    
}