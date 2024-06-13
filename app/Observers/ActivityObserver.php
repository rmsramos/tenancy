<?php

namespace App\Observers;

use Filament\Facades\Filament;
use Spatie\Activitylog\Models\Activity;

class ActivityObserver
{
    public function creating(Activity $activity): void
    {
        if (Filament::getTenant()) {
            $activity->hospital_id = Filament::getTenant()->id;
        }

    }
}
