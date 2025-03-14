<?php
namespace App\Repositories;

use App\Models\ScrapedJob;
use Illuminate\Support\Facades\Log;

class JobRepository
{
    public function saveJobs(array $jobs): void
    {
        foreach ($jobs as $job) {
            try {
                // Ensure required fields are present
                if (!isset($job['url'], $job['title'], $job['company'])) {
                    Log::warning("Skipping job due to missing required fields.", ['job' => $job]);
                    continue; // Skip this job
                }

                ScrapedJob::updateOrCreate(
                    ['url' => $job['url']], // Use 'url' as the unique identifier
                    $job
                );

            } catch (\Exception $e) {
                Log::error("Error saving job: " . $e->getMessage(), ['job' => $job]);
            }
        }
    }
}
