<?php

namespace Eduka\Dev;

use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class DevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        config()->set('mail.mailers.postmark.token', env('POSTMARK_TOKEN'));

        parent::boot();
    }

    public function register()
    {
        //
    }
}
