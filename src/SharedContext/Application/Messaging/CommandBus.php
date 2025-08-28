<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Application\Messaging;

/**
 * Interface MessengerCommandBus.
 *
 * @author Kella
 */
interface CommandBus
{
    public function handle(object $command): mixed;
}
