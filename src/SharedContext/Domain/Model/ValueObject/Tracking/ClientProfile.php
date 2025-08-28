<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Domain\Model\ValueObject\Tracking;

/**
 * Class ClientProfile.
 *
 * @author Kella
 */
final readonly class ClientProfile
{
    public function __construct(
        #[\SensitiveParameter] public ?string $userIp = null,
        public ?string $userAgent = null,
        public array $hints = []
    ) {
    }
}
