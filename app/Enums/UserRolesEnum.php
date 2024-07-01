<?php

namespace App\Enums;

enum UserRolesEnum: int
{
    case Nurse = 5;
    case Doctor = 4;
    case Customer = 3;
    case Employee = 2;
    case Admin = 1;
}
