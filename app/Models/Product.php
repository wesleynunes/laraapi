<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'image'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function getResults($name = null, $description = null)
    {


        if ($name)
            return $this->where('name', 'LIKE', "%{$name}%")->paginate(10);
        elseif ($description) {
            return $this->where('description', 'LIKE', "%{$description}%")->paginate(10);
        } else {
            return $this->paginate(10);
        }


        // if(!$name)
        //     return $this->paginate(10);
        // else{
        //     return $this->where('name', 'LIKE', "%{$name}%")->paginate(10);
        // }

        // if(!$description)
        //     return $this->paginate(10);
        // else{
        //     return $this->where('name', 'LIKE', "%{$description}%")->paginate(10);
        // }




    }

    // public function getResults($data, $total)
    // {
    //     if (!isset($data['filter']) && !isset($data['name']) && !isset($data['description']));
    //     return $this->paginate($total);

    //     return  $this->where(function ($query) use ($data) {
    //         if (isset($data['filter'])) {
    //             $filter = $data['filter'];
    //             $query->where('name', $filter);
    //             $query->orWhere('description', 'LIKE', "%{$filter}%");
    //         }

    //         if (isset($data['name']))
    //             $query->where('name', $data['name']);

    //         if (isset($data['description'])) {
    //             $description = $data['description'];
    //             $query->where('description', 'LIKE', "%{$description}%");
    //         }
    //     })->paginate($total);


    //     // $results = $this->where(function ($query) use ($data) {
    //     //     if (isset($data['filter'])) {
    //     //         $filter = $data['filter'];
    //     //         $query->where('name', $filter);
    //     //         $query->orWhere('description', 'LIKE', "%{$filter}%");
    //     //     }

    //     //     if (isset($data['name']))
    //     //         $query->where('name', $data['name']);

    //     //     if (isset($data['description'])) {
    //     //         $description = $data['description'];
    //     //         $query->where('description', 'LIKE', "%{$description}%");
    //     //     }
    //     // })->toSql();

    //     // dd($results);
    // }
}
