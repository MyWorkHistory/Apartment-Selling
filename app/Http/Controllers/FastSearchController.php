<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Featured;
use DB;
use App\Models\Listingpicture;
use App\Models\Listinglocation;
use Illuminate\Support\Facades\Storage;
use App\Models\Staticpagescontent as Spc;
use App\Models\Nonstaticpage as Nsp;
session_start();

class FastSearchController extends Controller
{
     protected $thumbsurl;

     function __construct() 
     {

      $this->thumbsurl = 'https://files.yantrahomes.com/thumbs_active';
      $this->picturesurl = 'https://files.yantrahomes.com/pictures_active';
 
    }

    function fastsearchold($name, $page)
    {
      echo $name;
    }


    public function fastsearch($searchtype, $page)
    {

      
      $path = app_path()."/Http/Controllers/PDOS/where_".str_replace("-", "_", $searchtype).".php";


      //echo $path;
      if(file_exists($path)){
   
       $query =  include "PDOS/where_".str_replace("-", "_", $searchtype).".php";
 
       if(isset($fast_search_sids_where)){
       //if(file_exists("PDOS/where_".str_replace("-", "_", $searchtype).".php"))  {
 
 
       $sqlmain = "SELECT listings.sid 
                        FROM listings,
                        yh_bg_locations_in_use 
                        WHERE listings.location_id = yh_bg_locations_in_use.id
                         AND ".$fast_search_sids_where;
 
     $sql = \DB::getPdo()->prepare($sqlmain);
     $sql->execute();
     $data =  $sql->fetchAll(\PDO::FETCH_ASSOC);   
     
      $sids = array();
      foreach($data as $one)
      {
         $sids[] = $one["sid"];
      }
       
    // var_dump($sids);
 
      $random = Listing::where('sid', $sids[0]);
          
      for($ig = 1; $ig < count($sids); $ig++)
      {
       
        $random = $random->orwhere('sid', $sids[$ig]);
      }
     
     $random = $random->get();
       }
       else{
         
           $random = array();
          
 
       }
 
     }
     else{
       
       $random = array();
     }
 
                       
 
     $nsp = Nsp::where('criteria', $searchtype)->first();
 
     if($nsp == NULL)
     {
       $nsp = Nsp::where('content_id', 1)->first();
       $nsp->top_text = NULL;
       $nsp->top_title = NULL;
     }
       
        
 
         foreach($random as $ran)
         {
           $ran->folder = $this->getFolderName($ran->sid);
           $ran->thumbset = $this->getpics($ran->sid, $ran->folder)[0];
           $ran->picset = $this->getpics($ran->sid, $ran->folder)[1];
           $ran->location = $this->getLocation($ran->location_id);
           $ran->type = $this->getPropertyType($ran->PropertyType);
           $ran->displayIcons = ($ran->PropertyType == 8) ? "NO":"YES";
           $ran->bustype = ($ran->category_sid == 1) ? "For sale":"For rent";
         }
 
         
         return view('fastsearch.fastsearch')->with(['nsp'=>$nsp, 'random'=>$random]);
        
    }

    private function getPropertyType($Propertytype)
    {
                if($Propertytype == 1)
                {
                  return "Apartment";
                }
                if($Propertytype == 2)
                {
                  return "Commercial";
                }

                if($Propertytype == 3)
                {
                  return "Hotel";
                }
                if($Propertytype == 4)
                {
                  return "House";
                }

                if($Propertytype == 5)
                {
                  return "House Floor";
                }
                if($Propertytype == 6)
                {
                  return "Industrial ";
                }

                if($Propertytype == 7)
                {
                  return "Office Space";
                }
                if($Propertytype == 8)
                {
                  return "Plot";
                }

                if($Propertytype == 9)
                {
                  return "Shop or Retail";
                }
                if($Propertytype == 10)
                {
                  return "Studio";
                }
    }

    private function getLocation($location_id)
    {
       return Listinglocation::where('id', $location_id)->first();
    }


    private function getFolderName($sid)
    {
      $folder = $sid % 100;
      $folder = sprintf("%02d", $folder);
      return $folder;
    }

    private function getpics($sid, $folder)
    {
        $pictures = Listingpicture::where('listing_sid',$sid)->orderby('order','asc')->take(5)->get();
        $thumb = array();
        $picss = array();
        foreach($pictures as $one)
        {
           $onethumb = $this->thumbsurl."/".$folder."/".$one->thumb_saved_name;
           $thumb[] = $onethumb;

           $onepic = $this->picturesurl."/".$folder."/".$one->picture_saved_name;
           $picss[] = $onepic;
        }
        return array($thumb, $picss);
    }


    
    

    

   




}
