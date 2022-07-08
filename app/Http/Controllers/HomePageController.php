<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use App\Models\MembershipRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    //
    public function index() 
    {
        return view('welcome');
    }

    public function about() 
    {
        return view('about');
    }

    public function contact() 
    {
        return view('contact');
    }

    public function leadership() 
    {
        return view('leadership');
    }

    public function members() 
    {
        return view('members');
    }

    public function admin_login()
    {
        return view('auth.admin_login');
    }

    public function post_admin_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        $input = $request->only(['email', 'password']);
        
        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)){
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Email does\'nt exist');
        }

        // authentication attempt
        if (auth()->attempt($input)) {
            if($user->user_type == 'Administrator'){
                return redirect()->route('admin.dashboard');
            }
           
            return back()->with('failure_report', 'You are not an Administrator');
                    
        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function post_member_login(Request $request)
    {
        $this->validate($request, [
            'membership_id' => 'exists:users,membership_id',
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        $input = $request->only(['membership_id', 'password']);
        
        $user = User::query()->where('membership_id', $request->membership_id)->first();

        if ($user && !Hash::check($request->password, $user->password)){
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Membership ID does\'nt exist');
        }

        // authentication attempt
        if (auth()->attempt($input)) {
            if($user->account_type == 'Member'){
                return redirect()->route('home');
            }
           
            return back()->with('failure_report', 'You are not a Member');
        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function download_constitution() 
    {   
        $documentFinder = public_path('/Constitution - CSS OBOSI ALUMNI ASSOCIATION.pdf');

        return Response::download($documentFinder);
    }

    public function membership_eligibility(Request $request)
    {

        //Validate Request
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string'],
            'second_name' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
            'whatsapp_number' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'graduation_set_class' => ['required', 'string'],
            'state_of_origin' => ['required', 'string'],
            'occupation' => ['required', 'string'],
        ]);

        MembershipRequest::create([
            'title' => $request->title,
            'surname' => $request->surname,
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            'email' => $request->email,
            'graduation_set_class' => $request->graduation_set_class,
            'state_of_origin' => $request->state_of_origin,
            'occupation' => $request->occupation,
        ]);

        return back()->with('success_report', 'Membership Request Sent Successfully, Admin will contact your shortly!');            
        
    }
}
