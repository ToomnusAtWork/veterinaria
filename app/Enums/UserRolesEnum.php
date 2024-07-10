<?php

namespace App\Enums;

enum UserRolesEnum: int
{
    case Admin = 1;
    case PropertyOwner = 2;
    case Doctor = 3;
    case Nurse = 4;
    case Employee = 5;
    case Customer = 6;
    
}
