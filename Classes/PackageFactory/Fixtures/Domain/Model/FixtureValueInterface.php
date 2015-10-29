<?php
namespace PackageFactory\Fixtures\Domain\Model;

/**
 * A general abstraction for values. Since Models can contain non-primitive values in their
 * properties, this provides a unified interface to enable a conversion step betwenn a descriptive
 * representation of the data to the actual PHP-type.
 */
interface FixtureValueInterface
{
    /**
     * Return the Value that should be saved to the assigned model property
     *
     * @return mixed
     */
    public function resolve();
}
