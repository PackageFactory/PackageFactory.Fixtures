<?php
namespace PackageFactory\Fixtures\Domain\Factory;

use TYPO3\Flow\Annotations as Flow;
use PackageFactory\Fixtures\Domain\Service\FixtureService;
use PackageFactory\Fixtures\Domain\Model\FixtureInterface;

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
