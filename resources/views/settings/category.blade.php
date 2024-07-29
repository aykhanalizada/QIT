@extends('app')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
        <table class="w-full text-sm text-lefrt tl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-black   uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" colspan="2" class="px-6 py-3">
                Kateqoriyaların siyahısı
            </th>

            <th scope="col" colspan="3" class="px-6 py-3 text-end">
                <span id="createBtn" class="bg-green-600 p-1.5 rounded cursor-pointer" onclick="createCategory()">Kateqoriya Əlavə Et
                    <i class="fa-solid fa-circle-plus text-base"></i></span>
            </th>
            </thead>
            <thead class=" text-black uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    Kateqoriya adı
                </th>
                <th scope="col" class="px-6 py-3 text-center">

                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Tənzimləmələr
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <input type="hidden" name="csrf-token" value="{{csrf_token()}}">

                <tr id="userRow_{{$category->id}}"
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                        {{$category->name}}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{$category->VOEN}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span id="showUser" onclick="showCategory({{json_encode($category)}})"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fa-solid fa-eye text-xl pr-2"></i></span>
                        <span onclick="editCategory({{json_encode($category)}})"
                              id="editUser"
                              class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fas fa-edit text-xl pr-2"></i></span>

                        <span
                            onclick="deleteCategory( {{$category->id}} ,'{{route('deleteCategory',['id'=>$category->id] ) }}'  ) "
                            class="deleteUser cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <i class="fas fa-trash text-xl"> </i>
                        </span>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    {{ $categories->links() }}

    <x-categories.create-category/>
    <x-categories.show-category :category="$category"/>
    <x-categories.edit-category :category="$category"/>




@endsection



@section('bottomScript')
    <script src="{{asset('js/category/categoryPage.js')}}"></script>
    <script src="{{asset('js/category/categoryActions.js')}}"></script>
@endsection

