<div
    class="showDXGProd hidden absolute top-0 w-full bg-slate-100 bg-opacity-70 h-screen flex items-center justify-center">
    <form id="showForm" class="grid grid-cols-2 gap-x-4 relative  bg-white shadow-md  px-16 pt-16 pb-12 mb-4 rounded-md"
          action="" method="POST">
        @csrf

                    <h1 class="text-3xl text-center mb-6">Register</h1>
        <div class="mb-4 ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" placeholder="Name" name="name">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="surname">
                Surname
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="surname" type="text" placeholder="Surname" name="surname">
        </div>
        <div class="mb-4">

            <label for="company"
                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
            <select
                id="company" name="company"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a company</option>

                @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-4">
            <label for="company"
                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
            <select
                id="rol" name="rol"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a rol</option>

                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>

            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="username" type="text" placeholder="Username" name="username">
        </div>


        <div class="mb-6 relative">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" type="password" placeholder="Password" name="password">
            <span class="absolute inset-y-0 right-0 flex items-center pr-3 pt-4 cursor-pointer toggle-password"
                  onclick="togglePasswordVisibility()">
        <i class="far fa-eye text-gray-600"></i>
    </span>
        </div>


        @if ($errors->any())
            <div class="text-red-500 mb-2 ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <button type="button" class="closePopup absolute top-5 right-5 "><i class="fa fa-times text-2xl"
                                                                            aria-hidden="true"></i>
        </button>

    </form>


</div>

