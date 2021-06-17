<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-2 gap-4"">
                    <div>
                    <h2>Current</h2>
                    @foreach( $appointments as $row)
                        @if ($row->isdone == false)
                            <div class="flex">

                            <span>{{ $row->firstname }} {{ $row->lastname }} {{ $row->day_app }} @ {{ $row->time_app }} </span>
                            <form action="{{ route('dashboard.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_app" value="{{ $row->id }}">
                                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded ml-2 -mt-2" type="submit" value="Done">
                            </form>
                            </div>
                            <br/>
                        @endif
                    @endforeach
                        </div>
                    <div>
                    <h2>Done</h2>
                    @foreach( $appointments as $row)
                    @if ($row->isdone == true)
                        <div>{{ $row->firstname }} {{ $row->lastname }} {{ $row->day_app }} @ {{ $row->time_app }}

                        </div>
                    @endif
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
