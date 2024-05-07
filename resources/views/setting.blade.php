@extends('app')
@section('content')
    <div class="w-full grid grid-cols-5 text-xl">
        <div class="text-center border-2 m-2 h-48 content-center rounded-xl hover:cursor-pointer"
        onclick="window.location= '{{route('settingProduct')}}' ">Məhsullar
            <i class="fa-solid fa-gear"></i>
        </div>
        <div class="text-center border-2 m-2 content-center rounded-xl hover:cursor-pointer">Ölkələr
            <i class="fa-solid fa-gear"></i></div>
        <div class="text-center border-2 m-2 content-center rounded-xl hover:cursor-pointer">Şirkətlər
            <i class="fa-solid fa-gear"></i></div>
        <div class="text-center border-2 m-2 content-center rounded-xl hover:cursor-pointer">Mal Kateqoriyaları
            <i class="fa-solid fa-gear"></i></div>
        <div class="text-center border-2 m-2 content-center rounded-xl hover:cursor-pointer">Ölçü Vahidləri
            <i class="fa-solid fa-gear"></i></div>
    </div>

@endsection
