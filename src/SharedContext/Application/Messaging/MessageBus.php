<?php

declare(strict_types=1);

namespace Classroom\SharedContext\Application\Messaging;

/**
 * Interface MessengerCommandBus.
 *
 * @author Kella
 */
interface MessageBus
{
    public function dispatch(AsyncMessage $message): void;
}
