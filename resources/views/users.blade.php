@extends('app')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-black   uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" colspan="2" class="px-6 py-3">
                İstifadəçilərin siyahısı
            </th>

            <th scope="col" colspan="3" class="px-6 py-3 text-end">
                <span id="createUser" class="bg-green-600 p-1.5 rounded cursor-pointer">İstifadəçi Əlavə Et <i
                        class="fa-solid fa-circle-plus text-base"></i></span>
            </th>
            </thead>
            <thead class=" text-black uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Ad
                </th>
                <th scope="col" class="px-6 py-3">
                    Soyad
                </th>
                <th scope="col" class="px-6 py-3">
                    İstifadəçi Adı
                </th>
                <th scope="col" class="px-6 py-3">
                    Qurum
                </th>
                <th scope="col" class="px-6 py-3">
                    Tənzimləmələr
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <input type="hidden" name="csrf-token" value="{{csrf_token()}}">

                <tr id="userRow_{{$user->id}}" class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$user->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$user->surname}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->username}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->company->name}}
                    </td>
                    <td class="px-6 py-4">
                        <span id="showUser" onclick="showUser({{json_encode($user)}})"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"
                              data-user="{{json_encode($user)}}"><i
                                class="fa-solid fa-eye text-xl pr-2"></i></span>
                        <span onclick="editUser({{json_encode($user)}})"
                            id="editUser"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fas fa-edit text-xl pr-2"></i></span>

                        <span onclick="deleteUser({{$user->id}} )"
                              class="deleteUser cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <i class="fas fa-trash text-xl"> </i>
                        </span>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    {{ $users->links() }}
    <x-users.create-user :companies="$companies" :users="$users"/>

    <x-users.show-user :companies="$companies" :users="$users"/>

    <x-users.edit-user :companies="$companies" :users="$users"/>

    <x-users.delete-user/>

    <x-success/>

    <script src="user.js"></script>

@endsection


