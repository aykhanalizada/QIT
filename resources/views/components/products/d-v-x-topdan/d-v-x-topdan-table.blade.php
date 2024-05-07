<div id="dvxTopdanTable" class="hidden relative overflow-x-auto shadow-md w-full">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

        <thead class=" text-black   uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
        <th scope="col" colspan="5" class="px-6 py-3">
            Məhsulların siyahısı
        </th>

        <th scope="col" colspan="3" class="px-6 py-3 text-end">
                <span id="" class="bg-green-600 p-1.5 rounded cursor-pointer">Məhsul Əlavə Et <i
                        class="fa-solid fa-circle-plus text-base"></i></span>
        </th>
        </thead>

        <thead class=" text-gray-800 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
        <tr>

            <th scope="col" class="px-6 py-3">
                Məhsulun adı
            </th>
            <th scope="col" class="px-6 py-3">
                Tarixi
            </th>
            <th scope="col" class="px-6 py-3">
                Miqdarı,həcmi
            </th>
            <th scope="col" class="px-6 py-3">
                Vahidinin buraxılış qiyməti
            </th>
            <th scope="col" class="px-6 py-3">
                ƏDV məbləği
            </th>
            <th scope="col" class="px-6 py-3">
                Yekun məbləğ
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Tənzimləmələr
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach($dvxTopdanProducts as $dvxTopdanProduct)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                    {{$dvxTopdanProduct->product->name}}
                </th>
                <td class="px-6 py-4">
                    {{$dvxTopdanProduct->Tarix}}
                </td>
                <td class="px-6 py-4">
                    {{$dvxTopdanProduct->Amount}}
                </td>
                <td class="px-6 py-4">
                    {{$dvxTopdanProduct->Price}}
                </td>
                <td class="px-6 py-4">
                    {{$dvxTopdanProduct->EDV}}
                </td>

                <td class="px-6 py-4">
                    {{$dvxTopdanProduct->total_price}}
                </td>


                <td class="px-6 py-4">

                </td>

                <td class="px-6 py-4">
                      <span id="showUser"
                            class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"
                      ><i
                              class="fa-solid fa-eye text-xl pr-2"></i></span>
                    <span id="editUser"
                          class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                            class="fas fa-edit text-xl pr-2"></i></span>
                    <span id="deleteUser"
                          class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                            class="fas fa-trash text-xl"></i></span>
                </td>



            </tr>
        @endforeach
        </tbody>
    </table>
</div>
