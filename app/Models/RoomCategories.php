<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class RoomCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
        'images',
        'price'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function bills()
    {
        return $this->hasMany(RoomBill::class);
    }

    public function getImage()
    {
        return asset("images/room_categories/".$this->images);
    }

    // public function saveCategory(Request $data)
    // {
    //     $category = $this->create([
    //         'category_name' => $data['category_name'],
    //         'description' => $data['description'],
    //         'images' => $data['images'],
    //         'price' => $data['price'],
    //     ]);

    //     return $category;
    // }

    public function store(Request $request)
    {
        $data = [
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ];

        if($request->hasFile('images'))
        {
            $data['images'] = $this->saveFile($request, 'images');
        }
        else {
            $data['images'] = 'null';
        }

        $category = $this->create($data);

        return $category;
    }

    private function saveFile(Request $request, string $file)
    {
        $file = $request->file($file);
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $path = public_path().'/images/room_categories/';
        $file->move($path, $fileName);
        return $fileName;
    }

    public function deleteFile(string $path)
    {
        if(file_exists($path))
        {
            //unlink($path);
            File::delete($path);
        }
    }

    public function updateCategory(Request $request, RoomCategories $roomCategories)
    {
        $roomCategories->category_name = $request->input('category_name');
        $roomCategories->description = $request->input('description');
        $roomCategories->price = $request->input('price');

        if($request->hasFile('images'))
        {
            $path = '/images/room_categories/' . $roomCategories->images;
            $this->deleteFile($path);
            $roomCategories['images'] = $this->saveFile($request, 'images');
        }
        else {
            $roomCategories['images'] = 'null';
        }

        $roomCategories->save();
    }

    public function search(array $data)
    {
        $roomCategoryName = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchRoomCategoryName($roomCategoryName)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
    }

    public function scopeSearchRoomCategoryName($query, $roomCategoryName)
    {
        return $query->where('category_name', 'like', '%' . $roomCategoryName . '%');
    }
}
