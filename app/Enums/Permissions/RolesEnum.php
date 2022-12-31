<?php

declare(strict_types=1);

namespace App\Enums\Permissions;

use BenSampo\Enum\Enum;

final class RolesEnum extends Enum
{
    const SUPER_ADMIN = 'super-admin';
    const ADMIN = 'admin';
}
