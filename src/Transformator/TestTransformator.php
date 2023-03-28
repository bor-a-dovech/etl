<?php

declare(strict_types=1);

namespace Borodovich\Etl\Transformator;

use Etl\Manager\Task\Domain\Entity\TaskSettings;
use Etl\Manager\Task\Domain\Entity\TransformedData;
use Etl\Manager\Task\Domain\Transformator\TransformatorInterface;
use Pn\Shared\Domain\ValueObject\MixedValueObject;

Class TestTransformator implements TransformatorInterface
{
    public const NAME = 'news';

    private TaskSettings $settings;
    private MixedValueObject $data;

    public function __construct()
    {
    }

    public function initialize(TaskSettings $settings): void
    {
    }

    public function check(): void
    {
    }

    public function transform(MixedValueObject $data): MixedValueObject
    {
        return new TransformedData('test');
    }
}
