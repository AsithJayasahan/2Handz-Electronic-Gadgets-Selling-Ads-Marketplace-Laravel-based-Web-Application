<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function postAdd()
    {
        return view('postAdd');
    }

    public function insert(Request $request)
    {
        $addId = $request->session()->get('id');
        $request->validate([
            'category' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            'image2' => 'image|mimes:jpeg,png,jpg,gif|max:8192', // Validate image file
            'image3' => 'image|mimes:jpeg,png,jpg,gif|max:8192', // Validate image file
            'location' => 'required',
            'contactName' => 'required',
            'contactNumber' => 'required'
        ]);

        // Handle image upload
        $imagePath1 = null;
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time() . '_1.' . $image1->getClientOriginalExtension(); // Generate unique image name
            $image1->move(public_path('images'), $imageName1); // Move the uploaded file to the public/images directory
            $imagePath1 = 'images/' . $imageName1; // Store the image path in a variable
        }

        $imagePath2 = null;
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time() . '_2.' . $image2->getClientOriginalExtension(); // Generate unique image name
            $image2->move(public_path('images'), $imageName2); // Move the uploaded file to the public/images directory
            $imagePath2 = 'images/' . $imageName2; // Store the image path in a variable
        }

        $imagePath3 = null;
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time() . '_3.' . $image3->getClientOriginalExtension(); // Generate unique image name
            $image3->move(public_path('images'), $imageName3); // Move the uploaded file to the public/images directory
            $imagePath3 = 'images/' . $imageName3; // Store the image path in a variable
        }

        // Create a new instance of the Add model
        $add = new Add();
        // Assign form data to model attributes
        $add->UserID = auth()->id();
        $add->id = $addId;
        $add->category = $request->category;
        $add->brand = $request->brand;
        $add->model = $request->model;
        $add->price = $request->price;
        $add->condition = $request->condition;
        $add->description = $request->description;
        $add->image1 = $imagePath1; // Store the image path in the database
        $add->image2 = $imagePath2; // Store the image path in the database
        $add->image3 = $imagePath3; // Store the image path in the database
        $add->location = $request->location;
        $add->contactName = $request->contactName;
        $add->contactNumber = $request->contactNumber;
        // Save the model instance to the database
        $res = $add->save();

        // Redirect based on the result of the insertion operation
        if ($res) {
            return back()->with('success', 'Insert Successfully');
        } else {
            return back()->with('fail', 'Insert Unsuccessfully');
        }
    }

    public function AllAds()
    {
        $add = Add::all();
        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();


        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();



        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }

    public function Adview($id)
    {
        $add = Add::find($id);
        $ads = Add::orderBy('created_at', 'desc')->take(5)->get();
        return view('View', compact('add','ads'));
        // return view('View');
    }

    public function view($id)
    {
        $add = Add::find($id);
        $ads = Add::orderBy('created_at', 'desc')->take(5)->get();
        // return view('addView',compact('add'));
        return view('Addview', compact('add,ads'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        // Query ads based on search query
        $add = Add::where('location', 'like', '%' . $search . '%')
            ->orWhere('category', 'like', '%' . $search . '%')
            ->orWhere('model', 'like', '%' . $search . '%')
            ->orWhere('brand', 'like', '%' . $search . '%')
            ->get();


            $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
            $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
            $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
            $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
            $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
            $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();

            $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
            $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
            $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
            $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
            $MataleCount=Add::where('location', 'like', '%Matale%')->count();
            $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
            $GalleCount=Add::where('location', 'like', '%Galle%')->count();
            $MataraCount=Add::where('location', 'like', '%Matara%')->count();
            $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
            $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
            $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
            $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
            $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
            $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
            $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
            $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
            $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
            $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
            $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
            $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
            $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
            $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
            $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
            $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
            $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();

        // Pass filtered ads to the view
        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }

    public function FIndComputers(Request $request)
    {
        $category = $request->input('category');

        // Query ads based on search query and category
        $query = Add::query();
        if ($category === 'Computer') {
            $query->where('category', 'like', '%Computer%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();


        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();

        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();



        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }



    public function FIndPhones(Request $request)
    {
        $category = $request->input('category');

        // Query ads based on search query and category
        $query = Add::query();
        if ($category === 'Smartphone') {
            $query->where('category', 'like', '%Smartphone%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();

        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();

        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();



        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }








    public function FIndMobileAccessories(Request $request)
    {
        $category = $request->input('category');

        // Query ads based on search query and category
        $query = Add::query();
        if ($category === 'MobileAccessories') {
            $query->where('category', 'like', '%MobileAccessories%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();

        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();

        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();



        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }

    public function FIndComputerAccessories(Request $request)
    {
        $category = $request->input('category');

        // Query ads based on search query and category
        $query = Add::query();
        if ($category === 'ComputerAccessories') {
            $query->where('category', 'like', '%ComputerAccessories%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();

        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();

        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();



        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }


    public function FIndCameras(Request $request)
    {
        $category = $request->input('category');

        // Query ads based on search query and category
        $query = Add::query();
        if ($category === 'DigitalCameras') {
            $query->where('category', 'like', '%DigitalCameras%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();

        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();


        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();



        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }


    public function FIndTablets(Request $request)
    {
        $category = $request->input('category');

        // Query ads based on search query and category
        $query = Add::query();
        if ($category === 'Tablet') {
            $query->where('category', 'like', '%Tablet%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();

        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();

        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();


        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));
    }


    public function index()
    {
        $userAds = Add::where('UserID', auth()->id())->get();
        if (Auth::user()->usertype == 'user') {
            // Retrieve ads posted by the logged-in user
            // Pass the ads data to the dashboard view
            return view('dashboard', compact('userAds'));
        } else {
            $ads = Add::all();
            $user = User::all();
            $userCount = User::count();
            $adsCount = Add::count();
            $todayAdsCount = Add::whereDate('created_at', Carbon::today())->count();

            $computersCount = Add::where('category', 'Computer')->count();
            $smartphonesCount = Add::where('category', 'Smartphone')->count();
            $tabletsCount = Add::where('category', 'Tablet')->count();
            $computerAccessoriesCount = Add::where('category', 'ComputerAccessories')->count();
            $mobileAccessoriesCount = Add::where('category', 'MobileAccessories')->count();
            $digitalcamarasCount = Add::where('category', 'DigitalCameras')->count();


            return view('adminDashboard', compact('userAds', 'user', 'ads', 'userCount', 'adsCount', 'todayAdsCount', 'computersCount', 'smartphonesCount', 'tabletsCount', 'computerAccessoriesCount', 'mobileAccessoriesCount', 'digitalcamarasCount'));
        }
    }




    public function destroy($id)
    {
        $ad = add::findOrFail($id); // Find the ad by ID
        $ad->delete(); // Delete the ad

        return redirect()->back()->with('success', 'Ad deleted successfully');
    }


    public function edit($id)
    {
        $ad = Add::findOrFail($id); // Find the ad by ID
        return view('editAds', compact('ad')); // Pass the ad data to the edit view
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
            'location' => 'required',
            'contactName' => 'required',
            'contactNumber' => 'required'
        ]);

        $ad = Add::findOrFail($id); // Find the ad by ID

        // Handle image upload
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName = time() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images'), $imageName);
            $ad->image1 = 'images/' . $imageName;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName = time() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images'), $imageName);
            $ad->image2 = 'images/' . $imageName;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName = time() . '.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images'), $imageName);
            $ad->image3 = 'images/' . $imageName;
        }

        // Update ad attributes
        $ad->category = $request->category;
        $ad->brand = $request->brand;
        $ad->model = $request->model;
        $ad->price = $request->price;
        $ad->condition = $request->condition;
        $ad->description = $request->description;
        $ad->location = $request->location;
        $ad->contactName = $request->contactName;
        $ad->contactNumber = $request->contactNumber;

        // Save the updated ad to the database
        $ad->save();

        return redirect()->route('dashboard')->with('success', 'Ad updated successfully');
    }


    public function UserProfile()
    {
        return view('userProfile');
    }




    public function UserEditAds($id)
    {
        $ad = Add::findOrFail($id); // Find the ad by ID
        return view('userEditAds', compact('ad')); // Pass the ad data to the edit view
    }


    // public function latestAds()
    // {
    //     $ads = Add::orderBy('created_at', 'desc')->take(4)->get();
    //     return view('welcome', compact('ads'));
    // }


    public function FindAdsByLocation($location)
    {
        // Query ads based on the location
        $query = Add::query();
        if ($location) {
            $query->where('location', 'like', '%' . $location . '%');
        }

        // Execute the query to get filtered ads
        $add = $query->get();

        $colomboCount=Add::where('location', 'like', '%Colombo%')->count();
        $GampahaCount=Add::where('location', 'like', '%Gampaha%')->count();
        $KalutaraCount=Add::where('location', 'like', '%Kalutara%')->count();
        $KandyCount=Add::where('location', 'like', '%Kandy%')->count();
        $MataleCount=Add::where('location', 'like', '%Matale%')->count();
        $NuwaraEliyaCount=Add::where('location', 'like', '%Nuwara Eliya%')->count();
        $GalleCount=Add::where('location', 'like', '%Galle%')->count();
        $MataraCount=Add::where('location', 'like', '%Matara%')->count();
        $HambantotaCount=Add::where('location', 'like', '%Hambantota%')->count();
        $JaffnaCount=Add::where('location', 'like', '%Jaffna%')->count();
        $KilinochchiCount=Add::where('location', 'like', '%Kilinochchi%')->count();
        $MannarCount=Add::where('location', 'like', '%Mannar%')->count();
        $MullaitivuCount=Add::where('location', 'like', '%Mullaitivu%')->count();
        $VavuniyaCount=Add::where('location', 'like', '%Vavuniya%')->count();
        $BatticaloaCount=Add::where('location', 'like', '%Batticaloa%')->count();
        $AmparaCount=Add::where('location', 'like', '%Ampara%')->count();
        $TrincomaleeCount=Add::where('location', 'like', '%Trincomalee%')->count();
        $KurunegalaCount=Add::where('location', 'like', '%Kurunegala%')->count();
        $PuttalamCount=Add::where('location', 'like', '%Puttalam%')->count();
        $AnuradhapuraCount=Add::where('location', 'like', '%Anuradhapura%')->count();
        $PolonnaruwaCount=Add::where('location', 'like', '%Polonnaruwa%')->count();
        $BadullaCount=Add::where('location', 'like', '%Badulla%')->count();
        $MonaragalaCount=Add::where('location', 'like', '%Monaragala%')->count();
        $RatnapuraCount=Add::where('location', 'like', '%Ratnapura%')->count();
        $KegalleCount=Add::where('location', 'like', '%Kegalle%')->count();


        $totalPhonesCount = Add::where('category', 'like', '%Smartphone%')->count();
        $totalcomputersCount = Add::where('category', 'like', '%Computer%')->count();
        $totaltabletsCount = Add::where('category', 'like', '%Tablet%')->count();
        $totalPhonesaccessoriesCount = Add::where('category', 'like', '%MobileAccessories%')->count();
        $totalcomputeraccessoriesCount = Add::where('category', 'like', '%ComputerAccessories%')->count();
        $totaldigitalcamerasCount = Add::where('category', 'like', '%DigitalCameras%')->count();


        return view('DisplayAdds', compact(
            'add',
            'totalPhonesCount',
            'totalcomputersCount',
            'totaltabletsCount',
            'totalPhonesaccessoriesCount',
            'totalcomputeraccessoriesCount',
            'totaldigitalcamerasCount',
            'colomboCount',
            'GampahaCount',
            'KalutaraCount',
            'KandyCount',
            'MataleCount',
            'NuwaraEliyaCount',
            'GalleCount',
            'MataraCount',
            'HambantotaCount',
            'JaffnaCount',
            'KilinochchiCount',
            'MannarCount',
            'MullaitivuCount',
            'VavuniyaCount',
            'BatticaloaCount',
            'AmparaCount',
            'TrincomaleeCount',
            'KurunegalaCount',
            'PuttalamCount',
            'AnuradhapuraCount',
            'PolonnaruwaCount',
            'BadullaCount',
            'MonaragalaCount',
            'RatnapuraCount',
            'KegalleCount'
        ));

    }


}
