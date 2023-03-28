<?php

declare(strict_types=1);

namespace Borodovich\Etl\Loader;

use Etl\Manager\Task\Domain\Entity\SettingKey;
use Etl\Manager\Task\Domain\Entity\TaskSettings;
use Etl\Manager\Task\Domain\Loader\LoaderInterface;
use Pn\Shared\Domain\ValueObject\MixedValueObject;

Class TestLoader implements LoaderInterface
{
    public const NAME = 'test';


    public function initialize(TaskSettings $settings): void
    {
    }

    public function load(MixedValueObject $data): void
    {
        dump('saved!');
        die();

    }
}
