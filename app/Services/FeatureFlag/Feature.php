<?php

namespace App\Services\FeatureFlag;

use App\User;

interface Feature
{
    public const MEETUP_PLACE = 'meetup_place';

    public function isActive(string $feature, User $user): bool;
}
