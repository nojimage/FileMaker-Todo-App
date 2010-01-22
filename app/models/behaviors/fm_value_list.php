<?php
/**
 * Get value list behavior
 * 
 * filemakerの値一覧を取得するビヘイビア
 * 
 * This behavior need FMCakeMix DBO
 * @see http://www.beezwax.net/solutions/FMCakeMix
 * 
 * PHP versions 5
 *
 * Copyright 2010, ELASTIC Consultants Inc. (http://elasticconsultants.com/)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @package    app
 * @subpackage app.models.behaviors
 * @author     nojimage <nojimage at gmail.com>
 * @copyright  2010 ELASTIC Consultants Inc.
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 */
class FmValueListBehavior extends ModelBehavior {

    /**
     * (non-PHPdoc)
     * @see cake/libs/model/ModelBehavior#setup($model, $config)
     */
    function setup(&$model, $config = array()) {
        $model->valueLists = $this->valueList($model);
    }

    /**
     * get valuelist from filemaker layout
     * 
     * @param AppModel $model
     * @param string $fieldName
     * @return mixed array or false
     */
    function valueList(&$model, $fieldName = null) {

        if(empty($model->returnValueLists) || !$model->returnValueLists) {
            return false;
        }

        if ($fields = $model->schema()) {
            $valueList = array();

            foreach ($fields as $_fieldName => $_schema) {
                if (!empty($_schema['valuelist'])) {
                    $valueList[$_fieldName] = array();
                    foreach ($_schema['valuelist'] as $value) {
                        $value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
                        $valueList[$_fieldName][$value] = $value;
                    }
                }
            }

            if (empty($fieldName)) {
                return $valueList;
            } else if (!empty($valueList[$fieldName])) {
                return $valueList[$fieldName];
            }
        }

        return false;

    }

}