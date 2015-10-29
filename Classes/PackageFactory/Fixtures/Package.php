<?php
namespace PackageFactory\Fixtures;

use TYPO3\Flow\Configuration\ConfigurationManager;
use TYPO3\Flow\Package\Package as BasePackage;

/**
 * The PackageFactory.Fixtures Package
 */
class Package extends BasePackage
{

	/**
	 * Invokes custom PHP code directly after the package manager has been initialized.
	 *
	 * @param \TYPO3\Flow\Core\Bootstrap $bootstrap The current bootstrap
	 * @return void
	 */
	public function boot(\TYPO3\Flow\Core\Bootstrap $bootstrap)
  {
		$dispatcher = $bootstrap->getSignalSlotDispatcher();

		$dispatcher->connect('TYPO3\Flow\Configuration\ConfigurationManager', 'configurationManagerReady',
      function(ConfigurationManager $configurationManager) {
  			$configurationManager->registerConfigurationType('Fixtures',
          ConfigurationManager::CONFIGURATION_PROCESSING_TYPE_DEFAULT, TRUE);
  		});
	}
}
