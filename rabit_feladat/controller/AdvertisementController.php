<?php

# imports
require_once "../service/AdvertisementService.php";

class AdvertisementController {

    private $advertisementService;

    public function __construct() {
        $this->advertisementService = new AdvertisementService();
    }

     # get all advertisements from the getAdvertisements() function
     public function listAdvertisements() {
        $advertisements = $this->advertisementService->getAdvertisements();
        return $advertisements;
     }
     
}

?>