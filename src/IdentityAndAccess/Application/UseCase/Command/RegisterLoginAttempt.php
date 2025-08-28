<?php

declare(strict_types=1);

namespace Classroom\IdentityAndAccess\Application\UseCase\Command;

use Classroom\IdentityAndAccess\Domain\Model\Entity\Identity\UserId;

/**
 * Class AddLoginAttempt.
 *
 * @author Kella
 */
final readonly class RegisterLoginAttempt
{
    public function __construct(
        public UserId $userId
    ) {
    }
}
