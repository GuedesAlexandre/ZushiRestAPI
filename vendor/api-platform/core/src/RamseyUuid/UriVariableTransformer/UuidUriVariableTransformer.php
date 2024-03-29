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

namespace ApiPlatform\RamseyUuid\UriVariableTransformer;

use ApiPlatform\Api\UriVariableTransformerInterface;
use ApiPlatform\Exception\InvalidUriVariableException;
use Ramsey\Uuid\Exception\InvalidUuidStringException;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Transforms an UUID string to an instance of Ramsey\Uuid.
 *
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
final class UuidUriVariableTransformer implements UriVariableTransformerInterface
{
    public function transform($value, array $types, array $context = [])
    {
        try {
            return Uuid::fromString($value);
        } catch (InvalidUuidStringException $e) {
            throw new InvalidUriVariableException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function supportsTransformation($value, array $types, array $context = []): bool
    {
        return \is_string($value) && is_a($types[0], UuidInterface::class, true);
    }
}
