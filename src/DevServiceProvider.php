<?php

namespace Eduka\Dev;

use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class DevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->customViewNamespace(__DIR__.'/../resources/views', 'backend');
        config()->set('mail.mailers.postmark.token', env('POSTMARK_TOKEN'));
    }

    public function register()
    {
        //
    }
}
