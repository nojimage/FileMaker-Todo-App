<?php
/**
 * FileMaker value list
 *
 * @author nojima
 *
 * This behavior need FMCakeMix DBO
 * @see http://www.beezwax.net/solutions/FMCakeMix
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