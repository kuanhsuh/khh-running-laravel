<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            後台
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-medium mb-6">我要儲值</h3>
                        <form method="POST" action="/transactions">
                        @csrf
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="amount" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">儲值金額</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="text" name="amount" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last_five_digit" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">匯款後5碼</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="text" name="last_five_digit" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="transaction_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">匯款日期</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="date" name="transaction_date" id="transaction_date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>

                        <div class="py-3 text-right">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-4 px-8  font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">建立</button>
                        </div>
                        @include('layouts.error')

                        </form>
                        <div class="shadow-inner rounded-md p-4 bg-slate-50">
                            <h3 class="text-xl mb-4">匯款資料</h3>
                            <p class="mb-4">
                                高雄市馬拉松協進會<br/>
                                兆豐銀行<br/>
                                代號 017<br/>
                                帳號 01309050903
                            </p>
                            <p class="text-sm">
                                請在匯款後，立即通知財務長。當財務長確認匯款後，系統會自動更新點數顯示。感謝您的合作。
                            </p>
                        </div>
                        <script>
                            function getDate(){
                                var today = new Date();

                                document.getElementById("transaction_date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
                            }

                            getDate()
                        </script>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
