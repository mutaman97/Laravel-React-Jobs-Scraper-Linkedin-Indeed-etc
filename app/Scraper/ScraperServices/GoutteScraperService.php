<?php

namespace App\Scraper\ScraperServices;

use App\Scraper\ScraperInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class GoutteScraperService implements ScraperInterface
{
    public $scraper_config_variables;
    public $location_parameter;
    public $search_query_separator;
    public $base_search_url;
    public $search_segments;
    public $name;
    public $search_term;
    public $extractables;
    public $parent_dom;
    public $link_type;
    public $baseURI;


    public function __construct()
    {
        //access the scraper config files
        $scraper_config = file_get_contents(dirname(__FILE__).'/../../Scraper/ScraperServiceConfig.json');
        $scraper_config_variables = json_decode($scraper_config, true);
        $this->scraper_config_variables = $scraper_config_variables;

    }


    public function set_variables($job_website)
    {
        // Set variables
        $this->name = $job_website["name"];
        $this->search_segments = $job_website["searchSegments"];
        $this->base_search_url = $job_website["baseSearchURI"];
        $this->location_parameter = $job_website["locationParam"];
        $this->extractables = $job_website["extractables"];
        $this->search_query_separator = $job_website["search_query_separator"];
        $this->parent_dom = $job_website["parentDOM"];
        $this->link_type = $job_website["link_type"];
        $this->baseURI = $job_website["baseURI"];
    }

    // Build job URL based on whether the URL is relative or absolute
    public function build_job_url($url, $url_type, $baseURI)
    {
        if ($url_type == "relative") {
            return $baseURI . $url;
        } else {
            return $url;
        }
    }

    // Build full search URL from base URL and filters
    public function build_search_url($search_term, $separator = "+", $country = null)
    {
        $this->search_term = $search_term;

        // Split the search term into an array and join with the separator
        $search_term_array = explode(" ", $search_term);
        $search_term_filters = implode($separator, $search_term_array);

        // Base search URL with keywords
        $searchQuery = $this->base_search_url . "?" . $this->search_segments . "=" . $search_term_filters;

        // Add country filter if provided
        if ($country && isset($this->locationParam)) {
            $searchQuery .= "&" . $this->locationParam . "=" . urlencode($country);
        }

        return $searchQuery;
    }

    public function connect_scraper_service($searchQuery)
    {
        try {
            // Create HttpClient and fetch the content
            $client = HttpClient::create(['timeout' => 60]);
            $response = $client->request('GET', $searchQuery);

            // Check if the request was successful
            if ($response->getStatusCode() !== 200) {
                throw new \Exception("Failed to fetch data from the URL: {$searchQuery}. Status code: " . $response->getStatusCode());
            }

            // Return the content of the response
            return $response->getContent();
        } catch (\Exception $e) {
            // Handle errors and return a meaningful message
            return "Error: " . $e->getMessage();
        }
    }
    public function old_connect_scraper_service($searchQuery)
    {
        // Create HttpClient and fetch the content
        $client = HttpClient::create(['timeout' => 60]);
        $response = $client->request('GET', $searchQuery);

        // Return the content of the response
        return $response->getContent();
    }

    public function final_extract_data($html_content, $extractables, $alertId)
    {
        // Initialize result array to hold job listings
        $data = [];

        // Create a Crawler instance
        $crawler = new Crawler($html_content);

        // Initialize an array to store extracted data
        $data_result_array = [];

        // Loop through the extractables to extract the necessary data
        foreach ($extractables as $extractable) {
            $extractable_variable = $extractable['variable'];

            // Extract data based on the source and attribute defined in the extractable array
            $$extractable_variable = $crawler->filter($extractable['source'])->each(function ($node) use (&$extractable) {
                if ($extractable['attribute'] == "text") {
                    return $node->text();
                } else {
                    if ($extractable["variable"] == "links") {
                        $url = $node->attr($extractable['attribute']);
                        return $this->build_job_url($url, $this->link_type, $this->baseURI);
                    } else {
                        return $node->attr($extractable['attribute']);
                    }
                }
            });

            // Store the extracted data in the result array
            $data_result_array[$extractable_variable] = $$extractable_variable;
        }

        // Step 2: Fetch job descriptions from individual job pages
        if (isset($data_result_array['links'])) {
            $client = HttpClient::create(['timeout' => 60]);
            $data_result_array['descriptions'] = [];

            foreach ($data_result_array['links'] as $jobUrl) {
                try {
                    // Fetch the job posting page
                    $response = $client->request('GET', $jobUrl);
                    $jobPageContent = $response->getContent();

                    // Load the job page content into a crawler
                    $jobPageCrawler = new Crawler($jobPageContent);

                    // Extract the job description
                    $jobDescription = $jobPageCrawler->filter('.description__text')->text();

                    // Add the job description to the result array
                    $data_result_array['descriptions'][] = $jobDescription;
                } catch (\Exception $e) {
                    // Handle errors (e.g., log or skip)
                    $data_result_array['descriptions'][] = "Error fetching description: " . $e->getMessage();
                }
            }
        }

        // Construct the job data in the desired format
        foreach ($data_result_array['titles'] as $key => $title) {
            $data[] = [
                'title' => $title,
                'company' => $data_result_array['company'][$key] ?? null,
                'location' => $data_result_array['location'][$key] ?? null,
                'description' => $data_result_array['descriptions'][$key] ?? null, // Use 'descriptions' instead of 'description'
                'url' => $data_result_array['links'][$key] ?? null,
                'posted_at' => now(),
                'source' => $data_result_array['source'][$key] ?? null,
                'alert_id' => $alertId,  // Assuming alertId is already defined
            ];
        }

        return $data;  // Return the formatted data
    }

    public function extract_data( $html_content, $extractables, $alertId)
    {
        // Initialize result array to hold job listings
        $data = [];

        // Create a Crawler instance
        $crawler = new Crawler($html_content);

        // Loop through the extractables to extract the necessary data
        foreach ($extractables as $extractable) {
            $extractable_variable = $extractable['variable'];

            // Extract data based on the source and attribute defined in the extractable array
            $$extractable_variable = $crawler->filter($extractable['source'])->each(function ($node) use (&$extractable) {
                if ($extractable['attribute'] == "text") {
                    return $node->text();
                } else {
                    if ($extractable["variable"] == "links") {
                        $url = $node->attr($extractable['attribute']);
                        return $this->build_job_url($url, $this->link_type, $this->baseURI);
                    } else {
                        return $node->attr($extractable['attribute']);
                    }
                }
            });

            // Store the extracted data in the result array
            $data_result_array[$extractable_variable] = $$extractable_variable;
        }

        // Construct the job data in the desired format
        foreach ($data_result_array['titles'] as $key => $title) {
            $data[] = [
                'title' => $title,
                'company' => $data_result_array['company'][$key] ?? null,
                'location' => $data_result_array['location'][$key] ?? null,
                'description' => $data_result_array['description'][$key] ?? null,
                'url' => $data_result_array['links'][$key] ?? null,
                'posted_at' => now(),
                'source' => $this->name ?? null,
                'alert_id' => $alertId,  // Assuming alertId is already defined
            ];
        }

        return $data;  // Return the formatted data
    }


    public function old_extract_data($html_content, $extractables)
    {
        // Initialize result array
        $data_result_array = [
            "job_data_id" => "ABSCDE", // Replace with actual job data id if needed
            "base_search_uri" => $this->base_search_url,
            "parent_dom" => $this->parent_dom,
            "baseURI" => $this->baseURI,
            "link_type" => $this->link_type,
        ];

        // Create a Crawler instance
        $crawler = new Crawler($html_content);

        foreach ($extractables as $extractable) {
            $extractable_variable = $extractable['variable'];

            // Extract data based on the source and attribute defined in the extractable array
            $$extractable_variable = $crawler->filter($extractable['source'])->each(function ($node) use (&$extractable) {
                if ($extractable['attribute'] == "text") {
                    return $node->text();
                } else {
                    if ($extractable["variable"] == "links") {
                        $url = $node->attr($extractable['attribute']);
                        return $this->build_job_url($url, $this->link_type, $this->baseURI);
                    } else {
                        return $node->attr($extractable['attribute']);
                    }
                }
            });

            // Compile results from each loop into an array
            $data_result_array[$extractable_variable] = $$extractable_variable;
        }

        return $data_result_array;
    }

    public function scrap($search_term, $alert_id)
    {
        foreach($this->scraper_config_variables as $key => $job_website) {
            $this->set_variables([
                "name" => $job_website["name"],
                "searchSegments" => $job_website["searchSegments"],
                "baseSearchURI" => $job_website["baseSearchURI"],
                "locationParam" => $job_website["locationParam"],
                "extractables" => $job_website["extractables"],
                "search_query_separator" => $job_website["search_query_separator"],
                "parentDOM" => $job_website["parentDOM"],
                "link_type" => $job_website["link_type"],
                "baseURI" => $job_website["baseURI"]
            ]);

            // Build search URL based on query separator
            $searchQuery = $this->build_search_url($search_term, $this->search_query_separator, $this->location_parameter);

            // Connect to scraper and fetch content
            $html_content = $this->connect_scraper_service($searchQuery);

            // Dynamically extract content
            $data = $this->extract_data($html_content, $this->extractables, $alert_id);

            return $data;
        }
    }
}
