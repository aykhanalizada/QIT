<div id="showProdPage" tabindex="-1" aria-hidden="true"
     class="hidden animated-element overflow-y-auto overflow-x-hidden  absolute pb-8 bg-gray-800 bg-opacity-70 flex justify-center items-center w-full md:inset-0 h-screen md:h-full">
    <div id="showProdContainer" class=" relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Show Product Details
                </h3>


                <button type="button" id="closeShowModal" onclick="closeShowModal()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-target="showProdPage">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>


            <!-- Modal body -->
            <div id="updateProdForm">

                <input type="hidden" name="id">

                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" readonly
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Product1">
                    </div>

                    <div>
                        <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</p>
                        <div
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div id="category"></div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>


<script>
    function closeShowModal() {
        let showPage = document.getElementById('showProdPage')
        showPage.classList.remove('fadeInDown');
        showPage.classList.add('fadeOutUp');

        setTimeout(function () {
            showPage.classList.add('hidden');
            showPage.classList.remove('fadeOutUp');
        }, 1000);

    }

</script>
