<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Mail\SendAppointment;
use Illuminate\Support\Facades\Mail;


class AppointmentsController extends Controller
{
    //
    function index()
    {
        return view('questions');
    }

    function appointment(Request $request)
    {
        if (!empty($request->q1 ) || !empty($request->q2 ) || !empty($request->q3 ) )
        {
            return view('appointment');
        }
        return view('questions');
    }

    function store(Request $request)
    {
        $appointment = new Appointments;
        $appointment->firstname = $request->firstname;
        $appointment->lastname = $request->lastname;
        $appointment->email = $request->email;
        $appointment->sex = $request->sex;
        $appointment->day_app = $request->day_app;
        $appointment->time_app = $request->time_app;
        $appointment->save();
        Mail::to($appointment)->send(new SendAppointment($appointment));
        return view('sentemail');
    }

    function dashboard()
    {
        $appointments = Appointments::all();
        //dd($appointments);
        //dd($appointment);
        return view('dashboard')->with(['appointments' => $appointments]);
    }

    function dashstore(Request $request)
    {
        $app = Appointments::find($request->id_app);
        $app->isdone = true;
        $app->save();
        return redirect()->route('dashboard');
    }
}
