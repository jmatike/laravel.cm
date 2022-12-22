<?php

namespace App\Models\Premium;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Rinvex\Subscriptions\Models\PlanSubscription as Model;

/**
 * @mixin IdeHelperSubscription
 */
class Subscription extends Model
{
    use HasFactory;
}
