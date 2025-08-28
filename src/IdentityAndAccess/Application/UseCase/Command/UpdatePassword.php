<?php

declare(strict_types=1);

namespace Classroom\IdentityAndAccess\Application\UseCase\Command;

use Classroom\IdentityAndAccess\Domain\Model\Entity\Identity\UserId;

/**
 * Class UpdatePassword.
 *
 * @author Kella
 */
final readonly class UpdatePassword
{
    public function __construct(
        public UserId $userId,
        public string $current,
        public string $password,
    ) {
    }
}
