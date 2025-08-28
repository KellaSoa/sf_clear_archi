<?php

declare(strict_types=1);

namespace Classroom\IdentityAndAccess\Application\UseCase\Command;

use Classroom\IdentityAndAccess\Domain\Model\ValueObject\Secret\GeneratedToken;

/**
 * Class ConfirmRegistration.
 *
 * @author Kella
 */
final readonly class ConfirmAccount
{
    public function __construct(
        public GeneratedToken $token
    ) {}
}
