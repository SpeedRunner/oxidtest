<?php

class oxidtest extends oxUBase {

	public function render() {
		parent::render();
		oxRegistry::getUtils()->setHeader("Content-Type: text/json;");
		oxRegistry::getUtils()->showMessageAndExit($this->_processOutput('Das ist die Testseite'));
	}

	protected function _processOutput($sInput) {
		return getStr()->recodeEntities($sInput);
	}
}
