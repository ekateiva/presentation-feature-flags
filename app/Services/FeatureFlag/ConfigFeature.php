<?php

namespace App\Services\FeatureFlag;

use App\User;

class ConfigFeature implements Feature
{
    public function isActive(string $feature, User $user): bool
    {
        return (bool) config('features.' . $feature);
    }
}
