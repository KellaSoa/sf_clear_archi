<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Domain\Exception;

/**
 * Interface UserFacingError.
 *
 * @author Kella
 */
interface UserFacingError extends \Throwable
{
    public function translationId(): string;

    public function translationParameters(): array;

    public function translationDomain(): string;
}
