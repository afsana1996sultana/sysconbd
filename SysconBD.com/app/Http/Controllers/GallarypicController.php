<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projectcategory;
use App\Models\Partner;

class GallarypicController extends Controller
{
    public function index()
    {

        $data['projectcatrgories'] = Projectcategory::select('id', 'pc_name', 'p_group', 'title', 'image', 'url')->get();

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        return view('frontend.gallary.index', $data);
        
    }
}
