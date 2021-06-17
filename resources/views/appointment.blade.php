@extends('welcome')

@section('questions')

    <form action="{{ route('appointment.store') }}" method="post">
        @csrf
        <label>Frist Name</label>
        <br/>
        <input type="text" name="firstname">
        <br/>
        <br/>
        <label>Last Name</label>
        <br/>
        <input type="text" name="lastname">
        <br/>
        <br/>
        <label>Email</label>
        <br/>
        <input type="email" name="email">
        <br/>
        <br/>
        <label>Sex</label>
        <br/>
        <Select name="sex">
            <option >choose sex</option>
            <option value="male" >Male</option>
            <option value="female" >Female</option>
        </select>
        <br/>
        <br/>
        <label>Select Day</label>

        <br/>
        <select name="day_app" >
            <option value="monday" >Monday</option>
            <option value="tuesday" >Tuesday</option>
            <option value="wednesday" >Wednesday</option>
            <option value="thursday" >Thursday</option>
            <option value="friday" >Friday</option>
        </select>
        <br/>
        <br/>
        <label>Time</label>
        <br/>

        <select name="time_app" >
            <option value="9" >9 AM</option>
            <option value="10" >10 AM</option>
            <option value="11" >11 AM</option>
            <option value="12" >12 AM</option>
            <option value="2" >2 PM</option>
            <option value="3" >3 PM</option>
            <option value="4" >4 PM</option>
        </select>
        <br/>
        <br/>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
    </form>

@endsection
