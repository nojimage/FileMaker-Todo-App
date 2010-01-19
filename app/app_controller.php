<?php
class AppController extends Controller
{
    public $components = array('DebugKit.Toolbar' => array('history' => false));

    public $helpers = array('Html', 'Form', 'Javascript', 'Time');

    /**
     *
     * @var SessionComponent
     */
    public $Session;
}