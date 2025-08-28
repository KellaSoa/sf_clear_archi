<?php

declare(strict_types=1);

namespace Classroom\IdentityAndAccess\Domain\Model\ValueObject;

/**
 * Class Role.
 *
 * @author Kella
 */
enum Role: string
{
    case USER = 'ROLE_USER';
    case ADMIN = 'ROLE_ADMIN';
}
