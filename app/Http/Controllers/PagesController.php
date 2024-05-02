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

class PagesController extends Controller
{
     protected $thumbsurl;

     function __construct() 
     {

      $this->thumbsurl = 'https://files.yantrahomes.com/thumbs_active';
      $this->picturesurl = 'https://files.yantrahomes.com/pictures_active';
 
    }
    public function landing_page(Request $request)
    {
      $this->unsetStoredSearch();

        $feat = Featured::where('featured_id',1)->first();
        $feat2 = Featured::where('featured_id',2)->first();
        $feat_array = explode("|", $feat["featured"]);
        $feat2_array = explode("|", $feat2["featured"]);
        $full = array_merge($feat_array, $feat2_array);

     
        $latest = Listing::where('active',1)->orderby('sid','desc')->take(4)->get();
        
        
        foreach($latest as $one)
        {
           $one->folder = $this->getFolderName($one->sid);
           $one->picset = $this->getpics($one->sid, $one->folder)[0];
           
        }

    
    

         $random = Listing::where('idrefno', $full[0]);
         
         for($ig = 1; $ig < 22; $ig++)
         {
          
           $random = $random->orwhere('idrefno', $full[$ig]);
         }
        
        $random = $random->orderby('category_sid','asc')->get();
        
 

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

        //var_dump($random); die;
      
        
        return view('front.landing_page')->with(['latest'=>$latest, 'random'=>$random, 'thumbsurl'=>$this->thumbsurl]);
    }

    public function contacts(Request $request)
    {
      return view('contacts');
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

    public function about_veliko_tarnova()
    {
      $data = Spc::where('content_id',26)->first();
      return view('front.about_veliko_tarnova')->with(['data'=>$data]);
    }


    public function about_us()
    {
      $data = Spc::where('content_id',4)->first();
      return view('front.about_us')->with(['data'=>$data]);
    }


    public function customer_service()
    {
      $data = Spc::where('content_id',29)->first();
      return view('front.customer_service')->with(['data'=>$data]);
    }

   

    public function  about_bulgaria()
    {
      $data = Spc::where('content_id',32)->first();
      return view('front.about_bulgaria')->with(['data'=>$data]);
    }

    public function bulgaria_history()
    {
      $data = Spc::where('content_id',33)->first();
      return view('front.bulgaria_history')->with(['data'=>$data]);
    }

   
 
    public function  bulgarian_holidays()
    {
      $data = Spc::where('content_id',34)->first();
      return view('front.bulgarian_holidays')->with(['data'=>$data]);
    }


    public function buy_bulgarian_property()
    {
      $data = Spc::where('content_id',5)->first();
      return view('front.buy_bulgarian_property')->with(['data'=>$data]);
    }

    public function sell_property_bulgaria()
    {
      $data = Spc::where('content_id',6)->first();
      return view('front.sell_property_bulgaria')->with(['data'=>$data]);
    }

    public function bulgarian_property_auctions()
    {
      $data = Spc::where('content_id',9)->first();
      return view('front.bulgarian_property_auctions')->with(['data'=>$data]);
    }

    public function about_agents()
    {
      return view('front.about_agents')->with([]);
    }


    public function contact_us()
    {
      return view('front.contact_us')->with([]);
    }

    public function faq()
    {
      return view('front.faq')->with([]);
    }

 

    public function add_listing()
    {
      return view('front.add_listing')->with([]);
    }

    public function do_advanced_search(Request $request)
    {
      $this->unsetStoredSearch();
    

      $listing =  Listing::where('active',1);

  
      if($request->nsima_property_type != 0)
      {
          $listing = $listing->where('PropertyType', $request->nsima_property_type);

          $_SESSION["nsima_property_type_value"] = $request->nsima_property_type;
          $_SESSION["nsima_property_type"] = $this->getPropertyType($request->nsima_property_type);

      }
     

      if($request->nsima_bathrooms_min != NULL)
      {
          $_SESSION["nsima_bathrooms_min_value"] = $request->nsima_bathrooms_min;
          $listing = $listing->where('Baths', '>=' ,$request->nsima_bathrooms_min);
      }
      

 
      
      if($request->nsima_bedrooms_min != NULL)
      {
           $_SESSION["nsima_bedrooms_min_value"] = $request->nsima_bedrooms_min;
          $listing = $listing->where('Beds', '>=' ,$request->nsima_bedrooms_min);
      }

    

      
      if($request->nsima_location_id != 0)
      {
          $_SESSION["nsima_location_id_value"] = $request->nsima_location_id;
          $_SESSION["nsima_location"] = $this->getLocationById($request->nsima_location_id);
          $listing = $listing->where('location_id' ,$request->location_id);
      }

      

      if($request->nsima_build_type != 0)
      {
          $_SESSION["nsima_build_type_value"] = $request->nsima_build_type;
          $_SESSION["nsima_build_type"] = $this->geBuildTypeById($request->nsima_build_type);
          $listing = $listing->where('Build_Type',$request->nsima_build_type);
      }

     

      if($request->nsima_price_from != NULL)
      {
          $_SESSION["nsima_price_from"] = $request->nsima_price_from;
          $listing = $listing->where('Price', '>=' ,$request->nsima_price_from);
      }

     

      if($request->nsima_price_to != NULL)
      {
          $_SESSION["nsima_price_to"] = $request->nsima_price_to; 
          $listing = $listing->where('Price', '<=' ,$request->nsima_price_to);
      }

      

      if($request->nsima_sqm_from != NULL)
      {
          $_SESSION["nsima_sqm_from"] = $request->nsima_sqm_from;
          $listing = $listing->where('SquareFeet', '>=' ,$request->nsima_sqm_from);
      }

      

      if($request->nsima_sqm_to != NULL)
      {
          $_SESSION["nsima_sqm_to"] = $request->nsima_sqm_to;
          $listing = $listing->where('SquareFeet', '<=' ,$request->nsima_sqm_to);
      }

      

      if($request->nsima_status != 0)
      {
        $_SESSION["nsima_status_value"] = $request->nsima_status;
        $_SESSION["nsima_status_text"] = $this->getStatusById($request->nsima_status);
          $listing = $listing->where('status' ,$request->status);
      }
      
    
     
      if($request->nsima_Basement == "true")
      {
          $_SESSION["nsima_Basement"] = 'true';
          $listing = $listing->where('Basement' ,1);
      }

      if($request->nsima_SecurityFeatures == "true")
      {
          $_SESSION["nsima_SecurityFeatures"] = 'true';
          $listing = $listing->where('SecurityFeatures' ,1);
      }

  

      if($request->nsima_Balcony == "true")
      {
        $_SESSION["nsima_Balcony"] = 'true';
          $listing = $listing->where('Balcony' ,1);
      }

      if($request->nsima_aircondtioning == "true")
      {
          $_SESSION["nsima_aircondtioning"] = 'true';
          $listing = $listing->where('CentralAir' ,1);
      }
      
      if($request->nsima_Furnished == "true")
      {
          $_SESSION["nsima_Furnished"] = 'true';
          $listing = $listing->where('Furnished' ,1);
      }

      if($request->nsima_CentralHeating == "true")
      {
           $_SESSION["nsima_CentralHeating"] = 'true';
          $listing = $listing->where('CentralHeating' ,1);
      }
            
      if($request->nsima_Garage == "true")
      {
         $_SESSION["nsima_Garage"] = 'true';
          $listing = $listing->where('Garage' ,1);
      }
       
      if($request->nsima_EnSuite == "true")
      {
          $_SESSION["nsima_EnSuite"] = 'true';
          $listing = $listing->where('EnSuite' ,1);
      }

      if($request->nsima_Lift == "true")
      {
          $_SESSION["nsima_Lift"] = 'true';
          $listing = $listing->where("Lift" ,1);
      }


      if($request->nsima_OffRoadParking == "true")
      {
          $_SESSION["nsima_OffRoadParking"] = 'true';
          $listing = $listing->where("OffRoadParking" ,1);
      }

      if($request->nsima_property_id != NULL)
      {
        $listing = $listing->where("idrefno" ,$request->nsima_property_id);
      }

      if($request->nsima_price_range != 0)
      {
            if($request->nsima_price_range == 1)
            {
              $listing = $listing->whereBetween("Price" ,[0,5000]);
            }
            if($request->nsima_price_range == 2)
            {
              $listing = $listing->whereBetween("Price" ,[5001,10000]);
            }
            if($request->nsima_price_range == 3)
            {
              $listing = $listing->whereBetween("Price" ,[10001,20000]);
            }
            if($request->nsima_price_range == 4)
            {
              $listing = $listing->whereBetween("Price" ,[20001,50000]);
            }
            if($request->nsima_price_range == 5)
            {
              $listing = $listing->whereBetween("Price" ,[50001,100000]);
            }
            if($request->nsima_price_range == 6)
            {
              $listing = $listing->whereBetween("Price" ,[100000, 10000000000000]);
            }
      }


      if($request->nsima_keywords != NULL)
      {
        $keywords_string = htmlspecialchars_decode($request->nsima_keywords);
		    $keywords_string = trim($keywords_string);
        $pattern     = "/[\s]{2,}/";
        $replacement = " ";
        $keywords_string = preg_replace($pattern, $replacement, $keywords_string);
      
        $keywords_arr = explode(" ", $keywords_string);

        foreach($keywords_arr as $one)
        {
          
             $checks = Listing::where('keywords', 'LIKE', '%'.$one.'%')->count();
            
             if(($checks) > 0)
             {
                $listing = $listing->where('keywords', 'LIKE', '%'.$one.'%');   
             }
        }
      }
      

      if($request->nsima_orderby == 'priceasc')
      {
        $listing = $listing->orderby('Price','asc');
      }

      if($request->nsima_orderby == 'pricedesc')
      {
        $listing = $listing->orderby('Price','desc');
      }

      if($request->nsima_orderby == 'iddesc')
      {
        $listing = $listing->orderby('sid','desc');
      }



      $listing = $listing->get();

      $count = count($listing);

      if($count == 0)
      {
        
        echo "none";
      }
      else{
        $listing = $this->collectFulldata($listing);
        $_SESSION["loadeddata"] = json_encode($listing);
       
        echo "found";
      }  

    }


    private function collectFulldata($properties)
    {
      foreach($properties as $ran)
      {
        $ran->folder = $this->getFolderName($ran->sid);
        $ran->thumbset = $this->getpics($ran->sid, $ran->folder)[0];
        $ran->picset = $this->getpics($ran->sid, $ran->folder)[1];
        $ran->location = $this->getLocation($ran->location_id);
        $ran->type = $this->getPropertyType($ran->PropertyType);
        $ran->displayIcons = ($ran->PropertyType == 8) ? "NO":"YES";
        $ran->bustype = ($ran->category_sid == 1) ? "For sale":"For rent";
      }
      return $properties;
    }

    public function advanced_search_results($page)
    {
      if(!isset($_SESSION["loadeddata"]))
      {
        return redirect()->route('landing_page');
      }
        $data = json_decode(  $_SESSION["loadeddata"],true);
        $max = (12 * $page) - 1;
        $min = $max - (12 -1);
        $total = ceil(count($data)/12);

       // echo $min ." ".$max;
      $random  = array();
       for($i = $min;  $i <= $max; $i ++)
       {
         if(isset($data[$i]))
         {
          $random[]= $data[$i];
         }
       }

       //echo $total;
       return view('front.advanced_search')->with(['maxpage'=>$total, 'random'=>$random, 'thumbsurl'=>$this->thumbsurl, 'page'=>$page, 'message'=>'Search Result']);
    }

    public function listing($page)
    {
        if(!isset($_SESSION["listing_data"]) )
        {
          $listing =  Listing::where('active',1)->orderby('sid','desc')->get();
          $listing = $this->collectFulldata($listing);
          $_SESSION["listing_data"] = json_encode($listing);
        }
        else
        {

        }

        $data = json_decode(  $_SESSION["listing_data"],true);
        $max = (12 * $page) - 1;
        $min = $max - (12 -1);
        $total = ceil(count($data)/12);

       // echo $min ." ".$max;
      $random  = array();
       for($i = $min;  $i <= $max; $i ++)
       {
         if(isset($data[$i]))
         {
          $random[]= $data[$i];
         }
       }

       //echo $total;
       return view('front.listing_page')->with(['maxpage'=>$total, 'random'=>$random, 'thumbsurl'=>$this->thumbsurl, 'page'=>$page, 'message'=>'Property Listing']);
       
    }
    

    private function unsetStoredSearch()
    {
      if(isset($_SESSION["loadeddata"]))
      {
        unset($_SESSION["loadeddata"]);
      }
      unset($_SESSION["nsima_property_type"]);
      unset($_SESSION["nsima_property_type_value"]);
      unset($_SESSION["nsima_bedrooms_min_value"]);
      unset($_SESSION["nsima_bathrooms_min_value"]);
      unset($_SESSION["nsima_location_id_value"]);
      unset($_SESSION["nsima_location"]);
      unset($_SESSION["nsima_build_type_value"]);
      unset($_SESSION["nsima_build_type"]);
      unset($_SESSION["nsima_price_from"]);
      unset($_SESSION["nsima_price_to"]);
      unset($_SESSION["nsima_sqm_from"]);
      unset($_SESSION["nsima_sqm_to"]);
      unset($_SESSION["nsima_status_value"]);
      unset($_SESSION["nsima_status_text"]);
      unset($_SESSION["nsima_Basement"]);
      unset($_SESSION["nsima_SecurityFeatures"]);
      unset($_SESSION["nsima_Balcony"]);
      unset($_SESSION["nsima_aircondtioning"]);
      unset($_SESSION["nsima_Furnished"]);
      unset($_SESSION["nsima_OffRoadParking"]);
      unset($_SESSION["nsima_CentralHeating"]);
      unset($_SESSION["nsima_Garage"]);
      unset($_SESSION["nsima_EnSuite"]);
      unset($_SESSION["nsima_Lift"]);
      
    }


    private function getLocationById($id)
    {
       $location = Listinglocation::where('id', $id)->first();
       if($location != NULL)
       {
        return $location->location_name_en;
       }
       else{
        return NULL;
       }
    }


    private function geBuildTypeById($nsima_build_type)
    {
      switch ($nsima_build_type)
      {
        case "156":
          $build_type = "Brick";
          break;

        case "157":
          $build_type = "Panel";
          break;

        case "158":
          $build_type = "Concrete";
          break;

        case "159":
          $build_type = "Other";
          break;

        case "163":
          $build_type = "Stone";
          break;
      }

      return  $build_type;
    }

    function getStatusById($statuss)
    {
            switch ($statuss)
            {
              case "119":
                $status = "Land Agricultural";
                break;

              case "120":
                $status = "Land Regulated";
                break;

              case "121":
                $status = "Land Unregulated";
                break;

              case "122":
                $status = "Major renovation";
                break;

              case "123":
                $status = "Minor renovation";
                break;

              case "124":
                $status = "New build";
                break;

              case "125":
                $status = "Resale";
                break;
            }

            return $status;
          
    }

    public function propdetails($idref)
    {
      $prop = Listing::where('idrefno',$idref)->first();
      $prop->folder = $this->getFolderName($prop->sid);
      $prop->picset = $this->getpics($prop->sid, $prop->folder)[1];
      $prop->location = $this->getLocation($prop->location_id);
      $prop->type = $this->getPropertyType($prop->PropertyType);

      $random = Listing::where('active',1)->inRandomOrder()
      ->limit(3) 
      ->get();

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
      return view('front.prop_details')->with(['data'=>$prop, 'random'=>$random]);
    }

    public function terms_and_conditions()
    {
      return view('front.terms')->with([]);
    }


    public function policy()
    {
      return view('front.policy')->with([]);
    }

    public function reload_search(Request $request)
    {
       if($request->val == "search")
       {
        return view('front.search')->with(['textt'=>$request->textt, 'realval'=>$request->realval]) ;
       }

       if($request->val == "search_house")
       {
        return view('front.search_house')->with(['textt'=>$request->textt, 'realval'=>$request->realval]) ;;
       }

       if($request->val == "search_plot")
       {
        return view('front.search_plot')->with(['textt'=>$request->textt, 'realval'=>$request->realval]) ;;
       }

       if($request->val == "search_hotel")
       {
        return view('front.search_hotel')->with(['textt'=>$request->textt, 'realval'=>$request->realval]) ;;
       }

       if($request->val == "search_commercial")
       {
        return view('front.search_commercial')->with(['textt'=>$request->textt, 'realval'=>$request->realval]) ;;
       }

       
    }

    public function fastsearch($searchtype, $page)
    {
        $nsp = Nsp::where('criteria', $searchtype)->first();
        $random = Listing::where(['category_sid'=>1, 'active'=>1])->orderby('activation_date','desc')->take(24)->get();





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



}
