<?php

class Asm_Solr_Model_Resource_Indexer_Cms extends Mage_Core_Model_Resource_Db_Abstract
{

	/**
	 * Resource initialization
	 */
	protected function _construct() {
		$this->_setResource('core');
	}

	/**
	 * @param Mage_Index_Model_Event $event
	 */
	public function CmsPageSave(Mage_Index_Model_Event $event) {
	}

	/**
	 * Rebuild the index for all stores at once or just one specific store.
	 *
	 * @param int|null $storeId Store to re-index
	 */
	public function rebuildIndex($storeId = null)
	{

	}

}