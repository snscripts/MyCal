<?php
namespace Snscripts\MyCal\Integrations\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @codeCoverageIgnore
 */
class CalendarExtra extends Model
{
    public $incrementing = false;

    public function calendar()
    {
        return $this->belongsTo(
            'Snscripts\MyCal\Integrations\Eloquent\Models\Calendar',
            'calendar_id'
        );
    }
}
