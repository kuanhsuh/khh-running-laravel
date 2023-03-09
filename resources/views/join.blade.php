
    @include ('layouts._frontpage-header')

    <header class="container-fluid mx-auto mt-20">
        <img src="https://via.placeholder.com/1200x350" alt="" class="w-full">
    </header>

    <section class="container mx-auto max-w-6xl mt-24 py-16 bg-gray-100 px-4 sm:px-16 rounded-md shadow">
        <h2 class="mb-4 text-2xl tracking-wide text-green-700">加入我們 / Join Us</h2>
        <p class="mb-2">感謝您的耐心填寫，表單送出後我們會盡快安排人員與您聯繫，謝謝！</p>


        <form action="" class="mt-8">
            <h3 class="mb-4 text-xl tracking-wide text-green-700">基本資料</h3>
            <div class="flex flex-wrap mt-6 sm:-mx-4">
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label class="label mb-2">你的大名</label>
                    <input type="text"
                        class="block w-full rounded-md p-2 border border-gray-100 shadow-sm focus:border-indigo-300 focus:ring-indigo-500 sm:text-sm">
                </div>
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label class="label mb-2">電話</label>
                    <input type="text"
                        class="block w-full rounded-md p-2 border border-gray-100 shadow-sm focus:border-indigo-300 focus:ring-indigo-500 sm:text-sm">
                </div>
            </div>
            <div class="flex flex-wrap mt-6 sm:-mx-4">
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label class="label mb-2">Line ID</label>
                    <input type="text"
                        class="block w-full rounded-md p-2 border border-gray-100 shadow-sm focus:border-indigo-300 focus:ring-indigo-500 sm:text-sm">
                </div>
            </div>



            <div class="w-full flex justify-center px-4 mb-4 sm:mb-0 mt-8">
                <button class="p-4 bg-green-800 text-white w-32 rounded shadow">送出</button>
            </div>
            </div>
        </form>
    </section>

    @include ('layouts._frontpage-footer')

    </body>
</html>
