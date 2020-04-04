<?php

namespace Phpactor\TestUtils\PHPUnit {

    use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;
    use PHPUnit\Framework\TestCase as PhpUnitTestCase;
    use Prophecy\PhpUnit\ProphecyTrait;

    class TestCase extends PhpUnitTestCase
    {
        use ArraySubsetAsserts;
        use ProphecyTrait;
    }
}

// add stubs for PHPUnit < 8
// when all packages are using PHPUnit 9 these can be removed

namespace DMS\PHPUnitExtensions\ArraySubset{
    if (!trait_exists(ArraySubsetAsserts::class)) {
        trait ArraySubsetAsserts
        {
        }
    }
}

namespace Prophecy\PhpUnit {
    if (!trait_exists(ProphecyTrait::class)) {
        trait ProphecyTrait
        {
        }
    }
}
