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

namespace ApiPlatform\Core\DataProvider;

/**
 * Retrieves items from a persistence layer and allow to pass a context to it.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ContextAwareCollectionDataProviderInterface extends CollectionDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null, array $context = []);
}
