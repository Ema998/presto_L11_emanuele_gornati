<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Queueable, Dispatchable, interactsWithQueue, SerializesModels;

    private $article_image_id;

    public function __construct()
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->article_image_id);
        if (!$i) {
            return;
        }

        $image = file_get_contents(storage_path('app/public/' . $i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google-vision.json'));

        $imageAnnotator = new imageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe = $response->getSafeSearchAnnotation();

        $adult = $safe->getAdult();
        $spoof = $safe->getSpoof();
        $medical = $safe->getMedical();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        $likelihoodName = [
            'text-secondary bi bi-circle-fill',
            'text-success bi bi-check-circle-fill',
            'text-success bi bi-check-circle-fill',
            'text-warning bi bi-exclamation-triangle-fill',
            'text-warning bi bi-exclamation-triangle-fill',
            'text-danger bi bi-x-circle-fill',
        ];

        $i->adult = $likehoodName[$adult];
        $i->spoof = $likehoodName[$spoof];
        $i->medical = $likehoodName[$medical];
        $i->violence = $likehoodName[$violence];
        $i->racy = $likehoodName[$racy];

        $i->save();
    }
}
