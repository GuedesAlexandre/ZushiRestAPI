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

namespace ApiPlatform\GraphQl\Type;

use GraphQL\Type\Definition\Type as GraphQLType;

/**
 * Container having the built GraphQL types.
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
final class TypesContainer implements TypesContainerInterface
{
    private $graphqlTypes = [];

    public function set(string $id, GraphQLType $type): void
    {
        $this->graphqlTypes[$id] = $type;
    }

    public function get($id): GraphQLType
    {
        if ($this->has($id)) {
            return $this->graphqlTypes[$id];
        }

        throw new TypeNotFoundException(sprintf('Type with id "%s" is not present in the types container', $id), $id);
    }

    public function all(): array
    {
        return $this->graphqlTypes;
    }

    public function has($id): bool
    {
        return \array_key_exists($id, $this->graphqlTypes);
    }
}

class_alias(TypesContainer::class, \ApiPlatform\Core\GraphQl\Type\TypesContainer::class);
