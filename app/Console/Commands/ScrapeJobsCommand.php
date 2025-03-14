<?php

namespace App\Console\Commands;

use App\Models\Alert;
use App\Models\User;
use Illuminate\Console\Command;
use App\Scraper\ScraperServices\GoutteScraperService;
use App\Repositories\JobRepository;
class ScrapeJobsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'app:scrape-jobs-command';
//    protected $signature = 'scrape:jobs {keyword} {source} {userId}';
    protected $signature = 'scrape:jobs';

    /**
     * The console command description.
     *
     * @var string
     */
//    protected $description = 'Command description';
    protected $description = 'Scrape job postings based on user keywords and store them in the database';

    /**
     * Execute the console command.
     */
    protected $jobRepository;
    protected $scraperService;

    public function __construct(JobRepository $jobRepository, GoutteScraperService $scraperService)
    {
        parent::__construct();
        $this->jobRepository = $jobRepository;
        $this->scraperService = $scraperService;
    }

    public function handle()
    {
        $this->info('Starting job scraping for all alerts...');

        // Fetch alerts that have keywords
        $alerts = Alert::has('keywords')->get();

        if ($alerts->isEmpty()) {
            $this->warn('No alerts with keywords found. Exiting.');
            return;
        }

        foreach ($alerts as $alert) {
            $this->info("Scraping jobs for alert: {$alert->name} (User: {$alert->user->name})");

            foreach ($alert->keywords as $keyword) {
                $this->info("Searching for jobs with keyword: {$keyword->keyword}");

                // Scrape jobs for this keyword
                $jobs = $this->scraperService->scrap($keyword->keyword, $alert->id);

                if (empty($jobs)) {
                    $this->warn("No jobs found for keyword: {$keyword->keyword}");
                    continue;
                }

                // Save jobs linked to the alert
                $this->jobRepository->saveJobs($jobs);
            }
        }

        $this->info('Job scraping completed for all alerts.');
    }
}
