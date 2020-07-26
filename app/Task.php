<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'user_id', 'created_by', 'assigned_to', 'status'
    ];


    const STATUS_CREATED = 1;
    const STATUS_ASSIGNED = 2;
    const STATUS_INPROGRESS = 3;
    const STATUS_DONE = 4;


    /**
     * Return list of status codes and labels

     * @return array
     */
    public static function statusList()
    {
        return [
            self::STATUS_CREATED    => 'Created',
            self::STATUS_ASSIGNED => 'Assigned',
            self::STATUS_INPROGRESS  => 'Inprogress',
            self::STATUS_DONE  => 'Done'
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User')->orderBy('asc');
    }

}
