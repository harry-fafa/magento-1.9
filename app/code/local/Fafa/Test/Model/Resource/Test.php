<?php
class Fafa_Test_Model_Resource_Test extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('test/test', 'blogpost_id');
    }
}
