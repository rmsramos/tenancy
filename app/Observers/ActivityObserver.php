<?php

namespace App\Observers;

use Filament\Facades\Filament;
use Spatie\Activitylog\Models\Activity;

class ActivityObserver
{
    public function creating(Activity $activity): void
    {
        $activity->hospital_id = Filament::getTenant()->id;
    }
}
