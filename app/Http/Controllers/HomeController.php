<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\DonationDue;
use App\Models\Payment;
use App\Models\Notification;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $greetings = "";

        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");

        /* Set the $timezone variable to become the current timezone */
        $timezone = date("e");

        /* If the time is less than 1200 hours, show good morning */
        if ($time < "11") {
            $greetings = "Good Morning";
        } else

        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
        if ($time >= "11" && $time < "17") {
            $greetings = "Good Afternoon";
        } else

        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
        if ($time >= "17" && $time < "19") {
            $greetings = "Good Evening";
        } else

        /* Finally, show good night if the time is greater than or equal to 1900 hours */
        if ($time >= "19") {
            $greetings = "Good night";
        }
        
        $donation_dues = DonationDue::get();
        $payment_histories = Payment::latest()->where('membership_id', Auth::user()->membership_id)->take(5)->get();
        $self_notifications = Notification::latest()->where('to', Auth::user()->membership_id)->get();
        $general_notifications = Notification::latest()->where('to', 'Members')->get();
        $generals = Notification::latest()->where('to', 'Members')->take(5)->get();
        $self = Notification::latest()->where('to', Auth::user()->membership_id)->where('status', 'Unread')->get();

        return view('member.home', compact('greetings', 'donation_dues', 'payment_histories', 
                                'generals', 'self', 'self_notifications', 'general_notifications'));
    }

    public function profile()
    {
        return view('member.profile');
    }

    public function profile_update($id, Request $request) {
        //Find User
        $userFinder = Crypt::decrypt($id);

        $profile = User::findorfail($userFinder);

        $profile->update([
            'title' => $request->title,
            'surname' => $request->surname,
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            // 'email' => $request->email,
            'graduation_set_class' => $request->graduation_set_class,
            'state_of_origin' => $request->state_of_origin,
            'occupation' => $request->occupation,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Profile Updated Successfully!'
        ]); 
    }

    public function donations_dues()
    {
        $donation_dues = DonationDue::latest()->get();
                        // DonationDue::join('payments', 'payments.donation_due_id', '=', 'donation_dues.id')
                        // ->select('donation_dues.*', 'payments.status')
                        // ->where
                        // ->get();
        return view('member.donations_dues',[
            'donation_dues' => $donation_dues
        ]);
    }

    public function make_payment($id, Request $request) 
    {
        $Finder = Crypt::decrypt($id);

        $donation_dues = DonationDue::findorfail($Finder);

        $payments = Payment::latest()->where('membership_id', Auth::user()->membership_id)->get();

        if ($payments->isEmpty()) 
        {
            $SECRET_KEY = config('app.paystack_secret_key');;

            $url = "https://api.paystack.co/transaction/initialize";

            $fields = [
                'email' => Auth::user()->email,
                'amount' => $donation_dues->amount * 100,
                'callback_url' => url('/member/payment/callback'),
                'metadata' => [
                    'donation_due_id' => $donation_dues->id,
                    'donation_due_title' => $donation_dues->title,
                    'membership_id' => Auth::user()->membership_id,
                    'name' => Auth::user()->first_name. ' ' .Auth::user()->second_name
                ]
            ];

            $fields_string = http_build_query($fields);
            //open connection
            $ch = curl_init();
            
            //set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ));
            
            //So that curl_exec returns the contents of the cURL; rather than echoing it
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            
            //execute post
            $paystack_result = curl_exec($ch);
            
            $result = json_decode($paystack_result);

            //  return $result;
            $authorization_url = $result->data->authorization_url;
            $paystack_status = $result->status;

            // return dd($result->status);

            if ($paystack_status == true) {
                return redirect()->to($authorization_url);
            } else {
                return back()->with([
                    'type' => 'danger',
                    'message' => 'Payment failed. Response not ok'
                ]); 
            }
        } else {
            foreach ($payments as $payment) {
                $donation_due[] = $payment->donation_due_id;
            }
            if (in_array($donation_dues->id, $donation_due)) {
                return back()->with([
                    'type' => 'danger',
                    'message' => 'Payment has been made!'
                ]);
            } else {
                $SECRET_KEY = config('app.paystack_secret_key');;

                $url = "https://api.paystack.co/transaction/initialize";

                $fields = [
                    'email' => Auth::user()->email,
                    'amount' => $donation_dues->amount * 100,
                    'callback_url' => url('/member/payment/callback'),
                    'metadata' => [
                        'donation_due_id' => $donation_dues->id,
                        'donation_due_title' => $donation_dues->title,
                        'membership_id' => Auth::user()->membership_id,
                        'name' => Auth::user()->first_name. ' ' .Auth::user()->second_name
                    ]
                ];

                $fields_string = http_build_query($fields);
                //open connection
                $ch = curl_init();
                
                //set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Authorization: Bearer $SECRET_KEY",
                    "Cache-Control: no-cache",
                ));
                
                //So that curl_exec returns the contents of the cURL; rather than echoing it
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                
                //execute post
                $paystack_result = curl_exec($ch);
                
                $result = json_decode($paystack_result);

                //  return $result;
                $authorization_url = $result->data->authorization_url;
                $paystack_status = $result->status;

                // return dd($result->status);

                if ($paystack_status == true) {
                    return redirect()->to($authorization_url);
                } else {
                    return back()->with([
                        'type' => 'danger',
                        'message' => 'Payment failed. Response not ok'
                    ]); 
                }
            }
        }
    }

    public function handleGatewayCallback()
    {
        $SECRET_KEY = config('app.paystack_secret_key');
        
        $curl = curl_init();

        $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
            if(!$reference){
            die('No reference supplied');
        }
  
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ),
        ));
        
        $paystack_response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
            
        $result = json_decode($paystack_response);
        
        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        } else {
            // dd($result);

            Payment::create([
                'donation_due_id' => $result->data->metadata->donation_due_id,
                'donation_due_title' => $result->data->metadata->donation_due_title,
                'membership_id' => $result->data->metadata->membership_id,
                'name' => $result->data->metadata->name,
                'email' => $result->data->customer->email,
                'amount' => ($result->data->amount / 100),
                'transaction_id' => $result->data->id,
                'ref_id' => $result->data->reference,
                'paid_at' => $result->data->paid_at,
                'status' => $result->data->status,
            ]);

            return redirect()->route('payment.history')->with([
                'type' => 'success',
                'message' => 'Payment Successful'
            ]);
        }
    }

    public function payment_history()
    {
        $payments = Payment::latest()->get();
        return view('member.payment_history',[
            'payments' => $payments
        ]);
    }

    public function view_general_messages_notifications()
    {
        $notifications = Notification::latest()->where('to', 'Members')->get();

        return view('member.general_notifications', [
            'notifications' => $notifications
        ]);
    }

    public function view_personal_messages_notifications()
    {
        $notifications = Notification::latest()->where('to', Auth::user()->membership_id)->get();

        return view('member.personal_notifications', [
            'notifications' => $notifications
        ]);
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

    public function upload_avatar($id, Request $request) {

        //Validate Request
        $this->validate($request, [
            'avatar' => 'required|mimes:jpeg,png,jpg',
        ]);

        //Find User
        $userFinder = Crypt::decrypt($id);

        //Profile
        $profile = User::find($userFinder);

        //Validate User
        if (request()->hasFile('avatar')) {
            $filename = request()->avatar->getClientOriginalName();
            if($profile->avatar) {
                Storage::delete('/public/avatars/'. $profile->avatar);
            }
            request()->avatar->storeAs('avatars', $filename, 'public');
            $profile->avatar = $filename;
            $profile->save();
            
            return back()->with([
                'type' => 'success',
                'message' => 'Profile Picture Update Successfully!'
            ]);
        } else {
            return back()->with([
                'type' => 'danger',
                'message' => 'Access denied!',
            ]);
        }
    }

    public function read_message($id) { 
        $notification_id = Crypt::decrypt($id);

        $notification = Notification::findorfail($notification_id);
        
        $notification->status = 'Read';
        $notification->seen += 1;
        $notification->save();

        return back();
    }
}
