<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Degree;
use App\User;

use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Hash;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['contactUs', 'onRequestForm', 'getAbout', 'portfolio', 'welcomeHome', 'aboutOrganize']]);
        $this->user_id = Auth::id();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['home'] = 'color: #d9232d;';
        return view('home', $data);
    }

    public function welcomeHome()
    {
        $data['welcome'] = 'color: #d9232d;';
        return view('welcome', $data);
    }

    public function contactUs()
    {
        $data['countries'] = DB::table('countries')->select('name', 'id')->orderBy('name', 'ASC')->get();
        $data['contact'] = 'color: #d9232d;';
        return view('contact', $data);
    }

    public function onRequestForm(Request $request)
    {


        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'nic' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'dob' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'landline' => 'required|numeric',
            'postalAddr' => 'required',
            'degreeTitle' => 'required',
            'permanentAddr' => 'required',
            'institution' => 'required',
            'department' => 'required',
            'occupation' => 'required',
            'business' => 'required',
            'tag_line' => 'required',
            'amtFunding' => 'required|numeric',
            'profit_generation' => 'required',
            'approximated_Profit' => 'required|numeric',
            'summary' => 'required',
        ]);


        $registerForm = new ContactForm();

        $fileRegisterNumber = $request->image;
        if (isset($fileRegisterNumber)) {

            $destinationPath = 'local/storage/app/public/images';
            $extension = $fileRegisterNumber->getClientOriginalExtension();
            $filename = str_random(12) . ".{$extension}";
            $fileRegisterNumber->move($destinationPath, $filename);
            $registerForm->uni_id_card = $filename;


        }


        $registerForm->name = $request->name;
        $registerForm->gender = $request->gender;
        $registerForm->dob = $request->dob;
        $registerForm->nic_number = $request->nic;
        $registerForm->marital_status = $request->martial;
        $registerForm->contact_number = $request->contact;
        $registerForm->nationality = $request->nationality;
        $registerForm->email = $request->email;
        $registerForm->landline = $request->landline;
        $registerForm->postal_address = $request->postalAddr;
        $registerForm->permanent_address = $request->permanentAddr;
        $registerForm->company_address = $request->company_address;
        $registerForm->institution_name = $request->institution;
        $registerForm->department_name = $request->department;
        $registerForm->occupation = $request->occupation;
        $registerForm->business_name = $request->business;
        $registerForm->business_tag_line = $request->tag_line;
        $registerForm->funding = $request->amtFunding;
        //$registerForm->break_even_time   = $request->approximated;
        $registerForm->profit_time = $request->profit_generation;
        $request->business_plan_file = $request->summary;


        $registerForm->save();

        if ($request->degreeTitle > 0) {

            $count = 0;
            while ($count < count($request->degreeTitle)) {
                $sqlData[] = array(
                    'name' => $request->degreeTitle[$count],
                    'contact_id' => $registerForm->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                );
                $count++;

            }
            DB::table('degree')->insert($sqlData);

        }
        if ($registerForm->save()) {
            Session::flash('message', 'Detailed Successfully Submit !');
            return redirect()->back();
        }

        /*if ($registerForm->save()) {
            $this->sendEmail($registerForm);
            \Session::flash( 'message', 'Email Successfully Sent check your email!' );
            return redirect()->back()
                             ->with('email', $request->input('email'));
        } else {
            \Session::flash('message', \Lang::get('notCreated'));
            return redirect()->back();
        }*/


    }

    public function sendEmail(ContactForm $form)
    {

        $mailData = array(
            'id' => $form->id,

        );

        Mail::queue('email.emailNewRegister', $mailData, function ($message) use ($form) {
            $message->subject('New Register: Please Check New User Detail.');
            $message->to('ubaidullahbest@gmail.com');
            $message->from($form->email);
        });
    }


    public function userDetail()
    {
        $data['registerRecord'] = ContactForm::orderBy('id', 'Desc')->paginate(15);
        $data['userDetail'] = 'color: #d9232d;';
        return view('dataDetail', $data);
    }

    public function getUsrDetail($id)
    {
        $data['usrDetail'] = ContactForm::where('id', $id)->with('contactId')->get();
        return view('userDetail', $data);
    }

    public function changePassword()
    {
        $data['changePassword'] = 'color: #d9232d;';
        return view("password.changePassword", $data)->with('title', 'Change Password');
    }

    public function userPasswordChange(Request $request)
    {

        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:7|different:old_password|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!@#$%^&*]).*$/',
            'conformed_password' => 'required|min:7',
        ]);

        $oldPassword = Input::get('old_password');
        $id = $this->user_id;
        $user = User::find($id);
        $current_password = $user->password;
        $new_password = Input::get('password');
        $confirm_password = Input::get('conformed_password');

        if (\Hash::check($oldPassword, $current_password)) {

            if ($new_password != $confirm_password) {

                return Redirect::back()->withErrors('New password and conformed password does not match');
            } else {
                $user->password = bcrypt($new_password);

                $user->save();

                Session::flash('message', 'Password Change Successfully !');
                return redirect()->back();
            }
        } else {

            return Redirect::back()->withErrors('Old password is incorrect');
        }
    }

    public function getAbout()
    {

        $data['about'] = 'color: #d9232d;';
        return view('about', $data);
    }

    public function portfolio()
    {
        $data['portfolio'] = 'color: #d9232d;';
        return view('portfolio', $data);
    }

    public function aboutOrganize()
    {
        return view('about-organization');
    }

    public function deleteRecord()
    {

        $id = Input::get('delUser');
        $path = ContactForm::where('id', $id)->first();
        $pathToFile = "local/storage/app/public/images/" . $path->uni_id_card;
        unlink($pathToFile);
        Degree::where('contact_id', $id)->delete();
        $user = ContactForm::where('id', $id)->delete();

        if ($user > 0) {
            return 1;
        }

//        AIzaSyCG3_rZxaFhWrhovOuhrV-rnLfQ2NTy9Wk
    }

}

