<?php
/**
 * @see https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Registry;

use Ixocreate\Contract\Schema\ElementInterface;
use Ixocreate\Contract\Schema\SchemaProviderInterface;
use Ixocreate\Contract\Schema\BuilderInterface;
use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface RegistryEntryInterface extends NamedServiceInterface
{
    public function label(): string;

    public function element(BuilderInterface $builder): ElementInterface;
}