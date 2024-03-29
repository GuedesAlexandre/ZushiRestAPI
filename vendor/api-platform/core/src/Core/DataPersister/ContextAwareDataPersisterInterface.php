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

namespace ApiPlatform\Core\DataPersister;

/**
 * Manages data persistence.
 *
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
interface ContextAwareDataPersisterInterface extends DataPersisterInterface
{
    public function supports($data, array $context = []): bool;

    public function persist($data, array $context = []);

    public function remove($data, array $context = []);
}
