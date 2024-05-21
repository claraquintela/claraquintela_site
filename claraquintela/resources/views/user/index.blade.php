@extends('partials.base')

@section('title', 'User list')

@section('content')

    <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">

        <div>
            <a href="{{ route('users.index', ['tri' => 'country', 'direction' => 'desc']) }}"
                class="m-2 border border-1 p-3">Trier par
                country</a>
            <a href="{{ route('users.index', ['tri' => 'name', 'direction' => 'asc']) }}"
                class="m-2 border border-1 p-3">Trier
                par nom</a>

            @foreach ($privileges as $privilege)
                <a href="{{ route('users.index', ['privilege' => $privilege->id]) }}"
                    class="m-2 border border-1 p-3">{{ $privilege->privilege }}</a>
            @endforeach

        </div>

        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Country</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Privilege</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($users as $user)
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200"> {{ $user->name }}</td>
                        <td class="py-4 px-6 border-b border-gray-200 truncate"> {{ $user->email }}</td>
                        <td class="py-4 px-6 border-b border-gray-200"> {{ $user->country }}</td>
                        <td class="py-4 px-6 border-b border-gray-200"> {{ $user->privilege_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
