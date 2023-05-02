<?php

namespace App\Http\Controllers;

use App\Models\DonationDue;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Notification;
use App\Models\MembershipRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $total_members = User::where('user_type', 'Member')->get();
        $donation_dues = DonationDue::latest()->take(5)->get();
        $dd = DonationDue::latest()->get();
        $payment_histories = Payment::latest()->take(5)->get();

        return view('admin.dashboard',[
            'total_members' => $total_members,
            'donation_dues' => $donation_dues,
            'dd' => $dd,
            'payment_histories' => $payment_histories
        ]);
    }

    public function members()
    {
        return view('admin.add_member');
    }

    public function add_member(Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            // 'title' => ['string', 'max:255'],
            // 'surname' => [ 'string', 'max:255'],
            // 'first_name' => ['string'],
            // 'second_name' => ['string'],
            // 'phone_number' => ['numeric'],
            // 'whatsapp_number' => ['numeric'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            // 'graduation_set_class' => ['string'],
            // 'state_of_origin' => ['string'],
            // 'occupation' => ['string'],
        ]);
        
        User::create([
            'user_type' => 'Member',
            'membership_id' => 'CSSO-'.$this->membership_id(),
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
            'password' => Hash::make('Password'),
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Member Created Successfully!'
        ]);         
    }

    function membership_id() 
    {
        $user = User::orderBy('id', 'DESC')->first();

        $last_user = (str_replace('CSSO-','',$user->membership_id));

        return (int)$last_user + 1;
    }

    public function view_members()
    {
        $members = User::where('user_type', 'Member')->get();

        return view('admin.view_members',[
            'members' => $members
        ]);
    }

    public function change_member_password($id, Request $request)
    {
        $finder = Crypt::decrypt($id);

        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::findorfail($finder);
        
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Member Password Updated Successfully!'
        ]); 
    }

    public function update_member($id, Request $request) 
    {
        //Find User
        $userFinder = Crypt::decrypt($id);

        $member = User::findorfail($userFinder);

        if($member->email == $request->email)
        {
            $member->update([
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

            return back()->with([
                'type' => 'success',
                'message' => 'Member Updated Successfully!'
            ]); 
        } else {
            //Validate Request
            $this->validate($request, [
                'email' => ['string', 'email', 'max:255', 'unique:users'],
            ]);

            $member->update([
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

            return back()->with([
                'type' => 'success',
                'message' => 'Member Updated Successfully!'
            ]); 
        }       
    }

    public function delete_member($id) 
    {
        //Find User
        $userFinder = Crypt::decrypt($id);
  
        //Member
        User::find($userFinder)->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Member Deleted Successfully!'
        ]); 
    }

    public function payment_request()
    {
        $donation_dues = DonationDue::latest()->get();
        return view('admin.request_payment',[
            'donation_dues' => $donation_dues
        ]);
    }

    public function add_payment_request(Request $request)
    {
        $messages = [
            'user.required' => 'User receiving this request is required.',
        ];

        //Validate Request
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'user' => ['required', 'string']
        ], $messages);
        
        if($request->user == 'all')
        {
            DonationDue::create([
                'admin_id' => Auth::user()->id,
                'title' => $request->title,
                'amount' => $request->amount,
                'description' => $request->description
            ]);

            $message = new Notification();
            $message->from = 'Admin';
            $message->to = 'Members';
            $message->subject = 'Donation/Due';
            $message->message = $request->title;
            $message->save();

        } else {
            DonationDue::create([
                'user_id' => $request->user,
                'title' => $request->title,
                'amount' => $request->amount,
                'description' => $request->description
            ]);

            $message = new Notification();
            $message->from = 'Admin';
            $message->to = $request->user;
            $message->subject = 'Donation/Due';
            $message->message = $request->title;
            $message->save();

            /** Store information to include in mail in $data as an array */
            $data = array(
                'name' => User::find($request->user)->first_name. ' ' .User::find($request->user)->second_name,
                'email' => User::find($request->user)->email
            );
            
            /** Send message to the user */
            Mail::send('emails.notification', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject('C.S.S.O ALUMNI ASSOCIATION');
            });
        }
       
        $donation_dues = DonationDue::latest()->get();

        return back()->with([
            'type' => 'success',
            'message' => 'Payment Request Submitted Successfully!',
            'donation_dues' => $donation_dues
        ]);         
    }
    
    public function delete_payment_request($id) 
    {
        $donationFinder = Crypt::decrypt($id);
  
        //Donation/Dues
        $dd = DonationDue::find($donationFinder);

        $payment = Payment::where('donation_due_id', $dd->id)->get();

        if(count($payment) > 0)
        {
            return back()->with([
                'type' => 'danger',
                'message' => "This donation data, users has processed it, you can't delete it"
            ]); 
        }

        $dd->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Payment Request Deleted Successfully!'
        ]); 
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function update_password ($id, Request $request) 
    {
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);
        
        $user->password = Hash::make($request->new_password);

        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Password Updated Successfully!'
        ]); 
    }

    public function message_member($member_id, Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'subject' => ['required','string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $id = Crypt::decrypt($member_id);

        $member = User::findorfail($id);

        $message = new Notification();
        $message->from = 'Admin';
        $message->to = $member->membership_id;
        $message->subject = request()->subject;
        $message->message = request()->message;
        $message->save();

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $member->first_name. ' ' .$member->second_name,
            'email' => $member->email
        );
        
        /** Send message to the user */
        Mail::send('emails.notification', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject('C.S.S.O ALUMNI ASSOCIATION');
        });

        return back()->with([
            'type' => 'success',
            'message' => 'Message sent successfully to '.$member->first_name,
        ]); 
    }

    public function create_general_message()
    {
        return view('admin.create_general_message');
    }

    public function message_general(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'subject' => ['required','string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $message = new Notification();
        $message->from = 'Admin';
        $message->to = 'Members';
        $message->subject = request()->subject;
        $message->message = request()->message;
        $message->save();

        /** Store information to include in mail in $data as an array */
        // $data = array(
        //     'name' => $member->first_name. ' ' .$member->second_name,
        //     'email' => $member->email
        // );
        
        /** Send message to the user */
        // Mail::send('emails.notification', $data, function ($m) use ($data) {
        //     $m->to($data['email'])->subject('C.S.S.O. Alumni');
        // });

        return back()->with([
            'type' => 'success',
            'message' => 'Message sent successfully'
        ]); 
    }

    public function view_messages()
    {
        $notifications = Notification::latest()->get();

        return view('admin.view_messages', compact(('notifications')));
    }

    public function view_payments()
    {
        $payments = Payment::latest()->get();

        return view('admin.view_payments', compact('payments'));
    }

    public function view_membership_requests() 
    {
        $membership_requests = MembershipRequest::latest()->get();

        return view('admin.view_membership_request', compact(('membership_requests')));
    }

    public function confirm_member($id, Request $request) 
    {
        //Find User
        $userFinder = Crypt::decrypt($id);

        $member_request = MembershipRequest::findorfail($userFinder);

        $user = User::create([
            'user_type' => 'Member',
            'membership_id' => 'CSSO-'.$this->membership_id(),
            'title' => $member_request->title,
            'surname' => $member_request->surname,
            'first_name' => $member_request->first_name,
            'second_name' => $member_request->second_name,
            'phone_number' => $member_request->phone_number,
            'whatsapp_number' => $member_request->whatsapp_number,
            'email' => $member_request->email,
            'graduation_set_class' => $member_request->graduation_set_class,
            'state_of_origin' => $member_request->state_of_origin,
            'occupation' => $member_request->occupation,
            'password' => Hash::make('Password'),
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $member_request->title. ' ' .$member_request->surname. ' ' .$member_request->first_name. ' ' .$member_request->second_name,
            'membership_id' => $user->membership_id,
            'email' => $member_request->email
        );
        
        /** Send message to the user */
        Mail::send('emails.approve_membership_request', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject('C.S.S.O ALUMNI ASSOCIATION');
        });
        

        MembershipRequest::find($userFinder)->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Successfully Made a Member!'
        ]);         
    }

    public function decline_member($id) 
    {
        //Find User
        $userFinder = Crypt::decrypt($id);

        $member_request = MembershipRequest::findorfail($userFinder);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $member_request->title. ' ' .$member_request->surname. ' ' .$member_request->first_name. ' ' .$member_request->second_name,
            'email' => $member_request->email
        );
        
        /** Send message to the user */
        Mail::send('emails.decline_membership_request', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject('C.S.S.O ALUMNI ASSOCIATION');
        });
        

        MembershipRequest::find($userFinder)->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Membership Request Declined Successfully!'
        ]); 
    }
}
