<?php
namespace PackageFactory\Domain\Factory;

use TYPO3\Flow\Annotations as Flow;
use PackageFactory\Domain\Service\FixtureService;
use PackageFactory\Domain\Model\FixtureInterface;

/**
 * Create Fixtures
 */
class FixtureFactory
{


    /**
     * @Flow\Inject
     * @var FixtureService
     */
    protected $fixtureService;

    /**
     *
     *
     * @param string $key
     * @param array $fixtureDefinition
     * @return FixtureInterface
     */
    public function createFromAssociativeArrayDefinition($key, array $fixtureDefinition)
    {

    }

}
