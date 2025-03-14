<?php

namespace App\Http\Controllers;

use App\Scraper\ScraperServices\GoutteScraperService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $scraper_config_variables;

    public function __construct()
    {
        //access the scraper config files
        $scraper_config = file_get_contents(dirname(__FILE__).'/../../Scraper/ScraperServiceConfig.json');
        $scraper_config_variables = json_decode($scraper_config, true);
        $this->scraper_config_variables = $scraper_config_variables;

    }
    public function get_search_results(Request $request, GoutteScraperService $goutteScraperService)
    {

//        $search_term = $request["search_term"];
        $search_term = "Python";
        $scraped_data = [];
        $new_data = [];

//        dd($this->scraper_config_variables);

        //loop through config file and get data from all websites
        foreach($this->scraper_config_variables as $key => $job_website)
        {
            $goutteScraperService->set_variables([
            "searchSegments" => $job_website["searchSegments"],
            "baseSearchURI" =>  $job_website["baseSearchURI"],
            "extractables" => $job_website["extractables"],
            "search_query_separator" => $job_website["search_query_separator"],
            "parentDOM" => $job_website["parentDOM"],
            "link_type" => $job_website["link_type"],
            "baseURI" => $job_website["baseURI"]
            ]);

            $data = $goutteScraperService->scrap($search_term);

            // dd($data);
            //add name of website (e.g stackoverflow) to the scraped data array
            $data["name"] = $job_website["name"];

            $scraped_data[$key] = $data;
            //put the whole data into an array with key of "data", so I can loop through that array in the view
            $new_data["data"] = $scraped_data;
        }
//        return view('welcome', $new_data);
    }

}
