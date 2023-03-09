
    @include ('layouts._frontpage-header')

    <header class="container-fluid mx-auto mt-20">
        <img src="{{ asset('images/bg-cover.jpg') }}" alt="" class="w-full h-96 object-cover">
    </header>

    <section class="container px-4 sm:mx-auto max-w-4xl py-16">
        <h2 class="text-2xl tracking-wide text-indigo-700 mb-8">關於協會/About Us</h2>

        <p class="tracking-wide leading-8">
            我們是一個跑步社團，每個月都有團練，每年還有賽事和跑步訓練營。我們的使命是幫助更多人認識跑步，讓大家都能擁有健康的生活方式。我們歡迎所有水平的跑步者加入我們，不論你是初學者還是專業選手。與我們一起踏上健康的旅程吧！

        </p>
        <h3 class="text-xl mt-4 text-indigo-700">我們的使命</h3>
        <p class="tracking-wide leading-8 mt-6">

            舉辦一年一度的高雄馬拉松活動，質量為我們的贊助商和我們服務的社區點贊。我們鼓勵所有技能水平的跑步者，步行者和志願者參與。
        </p>

        <h3 class="text-xl mt-4 text-indigo-700">歷史</h3>
        <p class="tracking-wide leading-8 mt-6">

            高馬協始於2000年，當時一群朋友決定舉辦自己的跑步活動。最初只有不到38名跑步者參加了第一屆，


            講一下....每個月團練/賽事/訓練營</p>

    </section>
    <section class="container px-4 mx-auto max-w-4xl py-16">
        <h2 class="text-2xl tracking-wide text-indigo-700 mb-8">理監事介紹/Board</h2>

        <div class="flex flex-wrap mt-4 -mx-4">
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-蔡聖佶.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">蔡聖佶</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-許寬柏.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">許寬柏</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-陳西坤.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">陳西坤</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-程至謙.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">程至謙</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-黃川瑞.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">黃川瑞</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-黃木昇.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">黃木昇</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-黃冠勳.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">黃冠勳</h4>
            </div>
            <div class="w-full sm:w-3/12 px-4 mt-8">
                <img src="{{ asset('images/khh-羅大惟.jpg') }}" alt="" class="w-full mb-4  shadow rounded-full border border-gray-200 h-48 w-48">
                <h4 class="text-xl text-gray-600 text-center">羅大惟</h4>
            </div>


        </div>
    </section>
    <section class="container px-4 mx-auto max-w-4xl py-16">
        <h2 class="text-2xl tracking-wide text-indigo-700 mb-8">歷年理事長/History</h2>

        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-md">
            <table class="w-full text-center border-collapse rounded-sm">
                <thead class="bg-indigo-100">
                    <tr>
                        <th class="w-2/5 py-2">理事長</th>
                        <th class="w-3/5 ">任期</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2">AAA</td>
                        <td>2000-2004</td>
                    </tr>
                    <tr>
                        <td class="py-2">AAA</td>
                        <td>2000-2004</td>
                    </tr>
                    <tr>
                        <td class="py-2">AAA</td>
                        <td>2000-2004</td>
                    </tr>
                    <tr>
                        <td class="py-2">AAA</td>
                        <td>2000-2004</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>

    @include ('layouts._frontpage-footer')

    </body>
</html>
