<?php

namespace App\Imports;

use App\Blog;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
class BlogsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        return new Blog([
            // dd($row['1'])
            'created_at' => $row[1],
            'description' => $row[2],
            'title' => $row[3],
            'status' => 'active',
            'slug' => $row[5],
            'updated_at' => $row[6],
            'image' => 'public\images\3.jpg',
            'alt_image' => 'UN-Habitat',
            
        ]);
    }
}
