<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Listingpicture;
use App\Models\Listinglocation;
use Illuminate\Support\Facades\Storage;
use App\Models\Staticpagescontent as Spc;

class FreeguidesController extends Controller
{
    
    public function buying_property_in_bulgaria()
    {
      $data = Spc::where('content_id',11)->first();
      return view('front.freeguides.buying_property_in_bulgaria')->with(['data'=>$data]);
    }

    public function selling_property_bulgaria()
    {
        $data = Spc::where('content_id',12)->first();
        return view('front.freeguides.selling_property_bulgaria')->with(['data'=>$data]);
    }

    public function move_to_bulgaria()
    {
        $data = Spc::where('content_id',17)->first();
        return view('front.freeguides.move_to_bulgaria')->with(['data'=>$data]);
    }

    public function bulgarian_pets()
    {
        $data = Spc::where('content_id',18)->first();
        return view('front.freeguides.bulgarian_pets')->with(['data'=>$data]);
    }

    public function bulgarian_visas()
    {
        $data = Spc::where('content_id',21)->first();
        return view('front.freeguides.bulgarian_visas')->with(['data'=>$data]);
    }

    public function health_in_bulgaria()
    {
        $data = Spc::where('content_id',22)->first();
        return view('front.freeguides.health_in_bulgaria')->with(['data'=>$data]);
    }

    public function bulgaria_services()
    {
        $data = Spc::where('content_id',23)->first();
        return view('front.freeguides.bulgaria_services')->with(['data'=>$data]);
    }

    public function school_in_vt()
    {
        $data = Spc::where('content_id',24)->first();
        return view('front.freeguides.school_in_vt')->with(['data'=>$data]);
    }

    public function bulgarian_language()
    {
        $data = Spc::where('content_id',25)->first();
        return view('front.freeguides.bulgarian_language')->with(['data'=>$data]);
    }
}
