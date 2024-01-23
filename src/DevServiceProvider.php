<?php

namespace Eduka\Dev;

use Eduka\Abstracts\Classes\EdukaServiceProvider;
use Illuminate\Support\Facades\Vite;

final class DevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        $this->customViewNamespace(__DIR__.'/../resources/views', 'backend');

        config()->set('mail.mailers.postmark.token', env('POSTMARK_TOKEN'));

        Vite::macro('image', fn (string $asset) => $this->asset("resources/assets/images/{$asset}"));

        parent::boot();
    }

    public function register()
    {
        //
    }
}
