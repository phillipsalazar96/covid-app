@extends('welcome')

@section('questions')

    <form action="{{ route('appointment') }}" method="post">
        @csrf
        <label>Have you have been in contact with anyone that has COVID-19</label>
        <input type="checkbox" name="q1" value="q1">
        <br/>
        <label>Have you had any fever in he past few days?</label>
        <input type="checkbox" name="q2" value="q2">
        <br/>
        <label>Have you have any trouble breathing?</label>
        <input type="checkbox" name="q3" value="q3">
        <br/>
        <br/>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
    </form>

@endsection
