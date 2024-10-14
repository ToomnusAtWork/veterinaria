<?php 

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasProfilePhoto 
{

    public function updateProfilePhoto(UploadedFile $photo)
    {
        tap($this->profile_photo_path, function ($previous) use ($photo) {
            $this->forceFill([
                'profile_photo_path' => $photo->storePublicly(
                    'profile-photos', ['disk' => $this->profilePhotoDisk()]
                ),
            ])->save();

            if ($previous){
                Storage::disk($this->profilePhotoDisk())->delete($previous);
            }
        });
    }

    public function deleteProfilePhoto()
    {
        if(is_null($this->profile_photo_path)) {
            return;
        }

        Storage::disk($this->profilePhotoDisk())->delete($this->profile_photo_path);

        $this->forceFill([
            'profile_photo_path' => null,
        ])->save();
    }

    public function getProfilePhotoAttribute()
    {
        return $this->profile_photo_path
            ? Storage::disk($this->profilePhotoDisk())->url($this->profile_photo_path)
            : $this->defaultProfilePhotoUrl();
    }

    public function defaultProfilePhotoUrl()
    {
        $name = trim(collect(explode('', $this->name))->map(function ($segment) {
            return mb_substr($segment,0,1);
        })->join(' '));

        return 'https://ui-avatars.com/api/?name='.urlencode($name);
        // return 'https://ui-avatars.com/api/?name='.urlencode($name).'&color=7F9CF5&background=EBF4FF';
    }

    public function profilePhotoDisk()
    {
        return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : config('fortify.profile_photo_disk', 'public');
    }
}

