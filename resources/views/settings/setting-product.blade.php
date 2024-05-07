@extends('app')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
        <table class="w-full text-sm text-lefrt tl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-black   uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" colspan="2" class="px-6 py-3">
                Məhsulların siyahısı
            </th>

            <th scope="col" colspan="3" class="px-6 py-3 text-end">
                <span id="createProdbtn" class="bg-green-600 p-1.5 rounded cursor-pointer" >Məhsul Əlavə Et
                    <i class="fa-solid fa-circle-plus text-base"></i></span>
            </th>
            </thead>
            <thead class=" text-black uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    Məhsulun adı
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Məhsulun Kateqoriyası
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Tənzimləmələr
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <input type="hidden" name="csrf-token" value="{{csrf_token()}}">

                <tr id="userRow_{{$product->id}}"
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                        {{$product->name}}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{$product->category->name}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span id="showUser" onclick="showProduct({{json_encode($product)}})"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fa-solid fa-eye text-xl pr-2"></i></span>
                        <span onclick="editProduct({{json_encode($product)}})"
                              id="editUser"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fas fa-edit text-xl pr-2"></i></span>

                        <span onclick="deleteProduct({{$product->id}} )"
                              class="deleteUser cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <i class="fas fa-trash text-xl"> </i>
                        </span>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    {{--    {{ $users->links() }}--}}

    <x-settings.create-product :categories="$categories" :products="$products"/>
    <x-settings.show-product :categories="$categories" :products="$products"/>
    <x-settings.edit-product :categories="$categories" :products="$products"/>

    {{--    <x-settings.edit-product/>--}}

    <x-success/>

    <script src="{{asset('setting.js')}}"></script>

@endsection


