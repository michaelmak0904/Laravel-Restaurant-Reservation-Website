<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'Pending';
    case available = 'Available';
    case unavailable = 'Unavailable';
}
