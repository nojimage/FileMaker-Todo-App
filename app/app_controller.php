<?php
/**
 * AppController
 *
 * PHP versions 5
 *
 * Copyright 2010, ELASTIC Consultants Inc. (http://elasticconsultants.com/)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @package    app
 * @subpackage app
 * @author     nojimage <nojimage at gmail.com>
 * @copyright  2010 ELASTIC Consultants Inc.
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 */
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