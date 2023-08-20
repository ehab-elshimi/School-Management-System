<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    use EnumHelpers;

    case SUPER_ADMIN = "Super Admin";
    case ADMIN = "Admin";
    case TEACHER = "Teacher";
    case STUDENT = "Student";
    case PARENT = "Parent";
}
