<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            後台
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-medium mb-6">所有儲值紀錄</h3>


                                        <div class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-md">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                                            使用者</th>
                                                        <th scope="col"
                                                            class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide w-4/12 text-gray-500 sm:pl-6">
                                                            項目</th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            更新日期</th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            變動金額
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            確認</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @foreach ($transactions as $transaction)
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{ $transaction->user->name }}</td>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{ $transaction->description }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $transaction->transaction_date }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $transaction->amount }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                                                                                                                                            @if (!$transaction->confirmed)
                                                                <a href="{{ route('transactions.confirm', ['transaction' => $transaction->id]) }}"
                                                                class="bg-indigo-600 hover:bg-indigo-900 text-white py-2 px-4 rounded">管理者請確認</a>
                                                            @else
                                                                已確認
                                                            @endif

                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                    </div>
                    <div class="pagination mt-4">
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
