<?php

namespace App\Http\Enums;

enum PackValidityEnum: string
{
    case Annual = 'annual';
    case Semiannual = 'semiannual';
    case Monthly = 'monthly';
}
