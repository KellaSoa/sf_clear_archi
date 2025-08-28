<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Application\Email;

use Classroom\SharedContext\Domain\Model\ValueObject\Email;

/**
 * Interface EmailDefinition.
 *
 * @author Kella
 */
interface EmailDefinition
{
    public function recipient(): Email;

    public function subject(): string;

    public function subjectVariables(): array;

    public function template(): string;

    public function templateVariables(): array;

    public function locale(): string;

    public function getDomain(): string;
}
