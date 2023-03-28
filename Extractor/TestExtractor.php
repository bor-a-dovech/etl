<?php

declare(strict_types=1);

namespace Etl\Manager\Task\Infrastructure\Etl\Extractor;

use Etl\Manager\Task\Domain\Entity\ExtractedData;
use Etl\Manager\Task\Domain\Entity\TaskSettings;
use Etl\Manager\Task\Domain\Extractor\ExtractorInterface;
use Pn\Shared\Domain\ValueObject\MixedValueObject;

Class TestExtractor implements ExtractorInterface
{
    public const NAME = 'test';

    public function initialize(TaskSettings $settings): void
    {
    }

    public function extract(): MixedValueObject
    {
        return new ExtractedData('123');
    }
}
