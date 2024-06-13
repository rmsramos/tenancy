<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\Models\Activity as ModelsActivity;

class Activity extends ModelsActivity
{
    public function hospital(): BelongsTo
    {
        return $this->belongsTo(
            related: Hospital::class,
            foreignKey: 'hospital_id',
        );
    }
}
