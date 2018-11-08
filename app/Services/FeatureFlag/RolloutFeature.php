<?php

namespace App\Services\FeatureFlag;

use App\User;
use Opensoft\Rollout\Rollout;

class RolloutFeature implements Feature
{
    /** @var Rollout */
    private $rollout;

    public function __construct(Rollout $rollout)
    {
        $this->rollout = $rollout;
    }

    public function isActive(string $feature, User $user): bool
    {
        return $this->rollout->isActive($feature, $user);
    }
}
