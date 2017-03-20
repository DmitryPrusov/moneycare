<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{

    protected $fillable = ['name', 'desc', 'sum', 'date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function operations()
    {
        return $this->hasMany('App\Operation');

    }
}
