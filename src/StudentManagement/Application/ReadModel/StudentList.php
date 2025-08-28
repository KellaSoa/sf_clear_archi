<?php

declare(strict_types=1);

namespace Classroom\StudentManagement\Application\ReadModel;

use Webmozart\Assert\Assert;

/**
 * Class StudentList.
 *
 * @author Kella
 */
final readonly class StudentList
{
    public function __construct(
        public array $items
    ) {
        Assert::allIsInstanceOf($items, StudentProfile::class);
    }

    public function isEmpty(): bool
    {
        return count($this->items) > 0;
    }
}
