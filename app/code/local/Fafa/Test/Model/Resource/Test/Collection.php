<?php
class Fafa_Test_Model_Resource_Test_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct()
    {
            $this->_init('test/test');
    }
}
