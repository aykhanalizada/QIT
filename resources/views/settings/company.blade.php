@extends('app')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
        <table class="w-full text-sm text-lefrt tl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-black   uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" colspan="2" class="px-6 py-3">
                Şirkətlərin siyahısı
            </th>

            <th scope="col" colspan="3" class="px-6 py-3 text-end">
                <span id="createBtn" class="bg-green-600 p-1.5 rounded cursor-pointer" onclick="createCompany()">Şirkət Əlavə Et
                    <i class="fa-solid fa-circle-plus text-base"></i></span>
            </th>
            </thead>
            <thead class=" text-black uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    Şirkət adı
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    VOEN
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Tənzimləmələr
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <input type="hidden" name="csrf-token" value="{{csrf_token()}}">

                <tr id="userRow_{{$company->id}}"
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                        {{$company->name}}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{$company->VOEN}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span id="showUser" onclick="showCompany({{json_encode($company)}})"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fa-solid fa-eye text-xl pr-2"></i></span>
                        <span onclick="editCompany({{json_encode($company)}})"
                              id="editUser"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fas fa-edit text-xl pr-2"></i></span>

                        <span
                            onclick="deleteCompany( {{$company->id}} ,'{{route('deleteCompany',['id'=>$company->id] ) }}'  ) "
                            class="deleteUser cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <i class="fas fa-trash text-xl"> </i>
                        </span>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    {{ $companies->links() }}

    <x-companies.create-company/>
    <x-companies.show-company :companies="$companies"/>
    <x-companies.edit-company :companies="$companies"/>


{{--    <x-success/>--}}

@endsection



@section('bottomScript')
    <script src="{{asset('js/company/companyPage.js')}}"></script>
    <script src="{{asset('js/company/companyActions.js')}}"></script>
@endsection

