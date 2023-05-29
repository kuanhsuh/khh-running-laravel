
    @include ('layouts._frontpage-header')

    <header class="container mx-auto max-w-6xl mt-20">
        <img src="{{ asset('images/bg-cover.jpg') }}" alt="" class="w-full object-cover">

    </header>

    <section class="container mx-auto max-w-6xl py-16">
        <h2 class="text-2xl tracking-wide text-green-700 px-4">最近賽事/Race</h2>

        <div class="flex flex-wrap mt-8">
            <div class="w-full sm:w-6/12 px-4 mb-8 sm:mb-0">
                <img src="https://via.placeholder.com/600x350" alt="" class="w-full mb-4">
                <p>高雄國際馬拉松</p>
                <p>賽事日期 | 2022.5.21</p>
                <p>報名截止 | 2022.1.20</p>
            </div>
            <div class="w-full sm:w-6/12 px-4 mb-8 sm:mb-0">
                <img src="https://via.placeholder.com/600x350" alt="" class="w-full mb-4">
                <p>高雄國際馬拉松</p>
                <p>賽事日期 | 2022.5.21</p>
                <p>報名截止 | 2022.1.20</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto max-w-6xl py-16">
        <h2 class="text-2xl tracking-wide text-green-700 px-4">視障跑步練習</h2>

        <div class="flex flex-wrap mt-8">
            <div class="w-full sm:w-6/12 px-4 mb-8 sm:mb-0">
                <img src="{{ asset('images/eye-practive-1.jpg') }}" alt="" class="w-full mb-4">
            </div>
            <div class="w-full sm:w-6/12 px-4 mb-8 sm:mb-0">
                <img src="{{ asset('images/eye-practive-2.jpg') }}" alt="" class="w-full mb-4">
            </div>
            <div class="w-full sm:w-6/12 px-4 mb-8 sm:mb-0">
                <img src="{{ asset('images/eye-practive-3.jpg') }}" alt="" class="w-full mb-4">
            </div>
            <div class="w-full sm:w-6/12 px-4 mb-8 sm:mb-0">
                <img src="{{ asset('images/eye-practive-4.jpg') }}" alt="" class="w-full mb-4">
            </div>
        </div>
    </section>

    <section class=" py-16 bg-neutral-100">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-6/12 px-4">
                    <img src="https://via.placeholder.com/600x350" alt="" class="w-full">
                </div>

                <div class="w-full sm:w-6/12 px-4 mt-8 sm:mt-0">
                    <h2 class="text-2xl tracking-wide text-green-700 mb-6">關於我們/Why Us</h2>
                    <p class="mb-6">
                        我們是一個跑步社團，每個月都有團練，每年還有賽事和跑步訓練營。我們的使命是幫助更多人認識跑步，讓大家都能擁有健康的生活方式。我們歡迎所有水平的跑步者加入我們，不論你是初學者還是專業選手。與我們一起踏上健康的旅程吧!!
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include ('layouts._frontpage-footer')

    </body>
</html>
