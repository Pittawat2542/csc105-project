<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $upload = 'storage/uploads/images/';
    protected $fillable = ['path', 'offer_id', 'user_id'];


    /**
     * @param $photo
     * @return string
     */
    public function getPathAttribute($photo) {
        return $this->upload . $photo;
    }

    /**
     * Uploading photo to server and update in DB
     * @param $file
     * @param $newName
     * @return $photo_id
     */
    public function photoUpload($file, $newName, $offer_id, $user_id){

        $name = uniqid($newName) . '.' . $file->getClientOriginalExtension();
        $file->move('storage/uploads/images', $name);
        $offer_id = isset($offer_id) ? $offer_id : '0';
        $user_id = isset($user_id) ? $user_id : '0';

        $photo = Photo::create(['path'=>$name, 'offer_id'=>$offer_id, 'user_id'=>$user_id]);

        return $photo->id;
    }

    /**
     * returning if the picture is used for user or for offer or else
     * @return string
     */
    public function photoSource() {
        $result = explode('/storage/uploads/images/',$this->path);
        $result = explode('_',$result[1]);
        if(empty($result[0])) $result[0] = 'none';

        return $result[0];
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
