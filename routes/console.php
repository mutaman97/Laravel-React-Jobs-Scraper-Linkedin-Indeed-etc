<?php

use App\Console\Commands\ScrapeJobsCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

//Artisan::command('inspire', function () {
//    $this->comment(Inspiring::quote());
//})->purpose('Display an inspiring quote')->everyFiveSeconds();


Schedule::command(ScrapeJobsCommand::class)->everyFifteenSeconds();