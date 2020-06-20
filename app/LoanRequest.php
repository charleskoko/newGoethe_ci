<?php

namespace App;

use App\Traits\Uuids;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use NotificationChannels\WebPush\HasPushSubscriptions;

class LoanRequest extends Model
{
    use Uuids;
    use HasPushSubscriptions;
    use Filterable;

    public $incrementing = false;

    protected $keyType = 'string';

    public const STATUS_NEW = 'new';
    public const STATUS_INPROGRESS = 'in_progress';
    public const STATUS_CANCEL = 'cancel';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_OUTSTANDING = 'outstanding';

    protected $fillable = [
        'start', 'end','status', 'email', 'numberOfCopies', 'firstName', 'lastName', 'mobile', 'filmTitle'
    ];

}
