<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Application\Email;

/**
 * Interface Mailer.
 *
 * @author Kella
 */
interface Mailer
{
    public function send(EmailDefinition $email): void;
}
