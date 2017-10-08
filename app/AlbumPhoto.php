<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AlbumPhoto extends Model
{
    protected $fillable = ['filename', 'user_id', 'album_id'];

    public function album()
    {
        return Album::find($this->album_id);
    }

    public function getCaption()
    {
        $locale = App::getLocale();

        switch ($locale)
        {
            case 'id':
                return ($this->caption != NULL ? $this->caption : $this->album()->title);
                break;
            case 'en':
                return ($this->caption_en != NULL ? $this->caption_en : ($this->title_en != NULL ? $this->title_en : $this->album()->title));
                break;
            case 'jp':
                return ($this->caption_jp != NULL ? $this->caption_jp : ($this->title_jp != NULL ? $this->title_jp : $this->album()->title));
                break;
            default:
                return '';
                break;
        }
    }
}
