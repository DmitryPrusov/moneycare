<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{

    protected $fillable = ['name', 'desc', 'sum'];

    public function setDateAttribute($date)
    {
        $this->attributes['date'] = Carbon::parse($date);

    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function budget()
    {
        return $this->belongsTo('App\Budget');

    }
}
