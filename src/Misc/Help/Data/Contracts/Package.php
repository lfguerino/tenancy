<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Misc\Help\Data\Contracts;

interface Package
{
    public function isInstalled(): bool;

    public function isRegistered(): bool;

    public function isConfigured(): bool;

    public function getName(): string;
}
