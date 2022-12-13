<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    use HasFactory;


    protected $table = 'groups';


    public function groupsCat(){
        return $this->hasMany(Group::class, 'id_parent');
    }

    public function rootGroup(){
        return $this->where('id_parent', 0)->with('groupsCat')->get();
    }


}
