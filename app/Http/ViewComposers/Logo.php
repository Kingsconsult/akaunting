<?php

namespace App\Http\ViewComposers;

use App\Models\Common\Media;
use File;
use Image;
use Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Exception\NotReadableException;

class Logo
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $logo = '';

        $media = Media::find(setting('company.logo'));

        if (!empty($media)) {
            $path = Storage::path($media->getDiskPath());

            if (!is_file($path)) {
                return $logo;
            }
        } else {
            $path = base_path('/img/company.png');
        }

        try {
            $image = Image::cache(function($image) use ($path) {
                $width = setting('invoice.logo_size_width');
                $height = setting('invoice.logo_size_height');

                $image->make($path)->resize($width, $height)->encode();
            });
        } catch (NotReadableException | \Exception $e) {
            Log::info('Company ID: ' . session('company_id') . ' viewcomposer/logo.php exception.');
            Log::info($e->getMessage());

            $path = base_path('/img/company.png');

            $image = Image::cache(function($image) use ($path) {
                $width = setting('invoice.logo_size_width');
                $height = setting('invoice.logo_size_height');

                $image->make($path)->resize($width, $height)->encode();
            });
        }

        if (empty($image)) {
            return $logo;
        }

        $extension = File::extension($path);

        $logo = 'data:image/' . $extension . ';base64,' . base64_encode($image);

        $view->with(['logo' => $logo]);
    }
}
