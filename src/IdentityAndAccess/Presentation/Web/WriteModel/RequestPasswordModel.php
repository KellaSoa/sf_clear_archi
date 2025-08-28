<?php

declare(strict_types=1);

namespace Classroom\IdentityAndAccess\Presentation\Web\WriteModel;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class RequestPasswordModel.
 *
 * @author Kella
 */
final class RequestPasswordModel
{
    #[Assert\NotBlank]
    #[Assert\Email]
    public string $email;
}
