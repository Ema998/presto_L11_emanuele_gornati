<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    protected function casts(): array
    {
        return [
            'lables' => 'array',
        ];
    }

    public static function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if(!$w && !$h){
            return Storage::url($filePath);
        }

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$fileName}";
        return Storage::url($file);
    }

    public function getUrl($w = null, $h = null)
    {
        return self::getUrlByFilePath($this->path, $w, $h);
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
