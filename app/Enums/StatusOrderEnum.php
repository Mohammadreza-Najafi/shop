<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self COMPLETED()
 * @method static self PROCESSING()
 * @method static self ONHOLD()
 * @method static self PENDING()
 */

class StatusOrderEnum extends Enum
{

    public function setStatus(StatusOrderEnum $status): void
    {
        $this->status = $status;
    }

    
}
