<?php

namespace App\Scraper;

interface ScraperInterface{

    public function scrap($search_query, $alertId);
    public function build_job_url($url, $url_type, $baseURI);
    public function connect_scraper_service($searchQuery);
    public function extract_data($html_content, $extractables, $alertId);
    
    
}