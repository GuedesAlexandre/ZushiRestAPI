<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Serializer\Mapping\Factory;

use ApiPlatform\Util\ClassInfoTrait;
use Symfony\Component\Serializer\Mapping\ClassMetadataInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;

final class ClassMetadataFactory implements ClassMetadataFactoryInterface
{
    use ClassInfoTrait;

    private $decorated;

    public function __construct(ClassMetadataFactoryInterface $decorated)
    {
        $this->decorated = $decorated;
    }

    public function getMetadataFor($value): ClassMetadataInterface
    {
        return $this->decorated->getMetadataFor(\is_object($value) ? $this->getObjectClass($value) : $this->getRealClassName($value));
    }

    public function hasMetadataFor($value): bool
    {
        return $this->decorated->hasMetadataFor(\is_object($value) ? $this->getObjectClass($value) : $this->getRealClassName($value));
    }
}

class_alias(ClassMetadataFactory::class, \ApiPlatform\Core\Serializer\Mapping\Factory\ClassMetadataFactory::class);
