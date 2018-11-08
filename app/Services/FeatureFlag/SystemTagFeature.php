<?php

namespace App\Services\FeatureFlag;

use App\SystemTag;
use App\User;

class SystemTagFeature implements Feature
{
    public function isActive(string $feature, User $user): bool
    {
        return SystemTag::where('user_id', $user->id)
            ->where('feature', $feature)
            ->exists();
    }
}
