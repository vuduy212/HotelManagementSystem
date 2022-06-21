<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class RoomCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
        'images',
        'price',
        'double_bed',
        'single_bed'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function bills()
    {
        return $this->hasMany(RoomBill::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'room_category_service', 'category_id', 'service_id');
    }

    public static function getImage1($room_name)
    {
        $query = "select i.value from room_categories rc
                        join images i on rc.category_name = i.category_name
                        where rc.category_name = " . '\'' . $room_name . '\'';
        // $query = "select count(*) from reservations r where r.category_name = " . '\'' . $category_name . '\'';
        $result = DB::select($query);
        $listImage = [];
        foreach ($result as $image) {
            $linkImage = asset("images/room_categories/" . $image->value);
            array_push($listImage, $linkImage);
        }
        return $listImage;
    }

    public function getImage()
    {
        return asset("images/room_categories/" . $this->images);
    }

    public function store(Request $request)
    {
        $data = [
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ];

        if ($request->hasFile('images')) {
            $data['images'] = $this->saveFile($request, 'images');
        } else {
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
        $path = public_path() . '/images/room_categories/';
        $file->move($path, $fileName);
        return $fileName;
    }

    public function deleteFile(string $path)
    {
        if (file_exists($path)) {
            File::delete($path);
        }
    }

    public function updateCategory(Request $request, RoomCategories $roomCategories)
    {
        $roomCategories->category_name = $request->input('category_name');
        $roomCategories->description = $request->input('description');
        $roomCategories->price = $request->input('price');

        if ($request->hasFile('images')) {
            $path = public_path() . '/images/room_categories/' . $roomCategories->images;
            $this->deleteFile($path);
            $roomCategories['images'] = $this->saveFile($request, 'images');
        }
        // else {
        //     $roomCategories['images'] = 'null';
        // }

        $roomCategories->save();
    }

    public function search(array $data)
    {
        $roomCategoryName = array_key_exists('key', $data) ? $data['key'] : null;
        $filterPrice = array_key_exists('sort_by_price', $data) ? $data['sort_by_price'] : null;

        if ($filterPrice == 'ascending') {
            return $this
                ->SearchRoomCategoryName($roomCategoryName)
                ->orderBy('price')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 3);
        } elseif ($filterPrice == 'descending') {
            return $this
                ->SearchRoomCategoryName($roomCategoryName)
                ->orderBy('price', 'desc')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 3);
        } else {
            return $this
                ->SearchRoomCategoryName($roomCategoryName)
                ->oldest('id')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 3);
        }
    }

    public function scopeSearchRoomCategoryName($query, $roomCategoryName)
    {
        return $query->where('category_name', 'like', '%' . $roomCategoryName . '%');
    }
}
