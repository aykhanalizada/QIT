@extends('app')
@section('content')

    <div class="container flex m-auto">
        <div class="company w-40 border-2">
            <div class="w-9/12 m-auto border-2 py-5 rounded-md mt-8 text-center bg-emerald-700">Qurumlar</div>
            <div id="dgx" class="w-9/12 m-auto border-2 py-5 rounded-md mt-8 text-center hover:cursor-pointer ">DGX
            </div>
            <div id="dvxTopdan" class="w-9/12 m-auto border-2 py-5 rounded-md mt-8 text-center hover:cursor-pointer ">
                DVX Topdansatış
            </div>
            <div id="dvxPer" class="w-9/12 m-auto border-2 py-5 rounded-md mt-8 mb-4 text-center hover:cursor-pointer ">
                DVX Pərakəndə satış
            </div>
        </div>

        <x-products.d-g-x.d-g-x-table :dgxProducts="$dgxProducts"/>
        <x-products.d-v-x-topdan.d-v-x-topdan-table :dvxTopdanProducts="$dvxTopdanProducts"/>
        <x-products.d-v-x-per.d-v-x-per-table :dvxPerProducts="$dvxPerProducts"/>

    </div>


    <x-products.d-g-x.show-d-g-x-product :companies="$companies"/>




@endsection
