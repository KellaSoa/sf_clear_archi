<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Application\Messaging;

/**
 * Interface MessengerCommandBus.
 *
 * @author Kella
 */
interface QueryBus
{
    public function handle(object $query): mixed;
}
