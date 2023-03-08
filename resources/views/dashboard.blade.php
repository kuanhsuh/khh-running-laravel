<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            後台
        </h2>
    </x-slot>

    @if(auth()->user()->hasNullAttributes())
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-400 shadow overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white ">
                    請填寫您的個人資料，以協助總務報名您所感興趣的賽事。<a href="{{route('profile.edit')}}" class="text-yellow-200">連結</a>
                </div>
            </div>
        </div>
    </div>
    @endif

        <div>
            <header class="container max-w-7xl mx-auto">
                <div class="mx-auto  px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-700 px-4">後台</h1>
                </div>
            </header>
            <main class="mt-8 max-w-7xl mx-auto">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <!-- Replace with your content -->
                    <div class="flex flex-wrap">
                        <div class="w-full sm:w-4/12 px-4">
                            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                                <dt class="truncate text-sm font-medium text-gray-500">剩餘金額</dt>
                                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $user->credit }}</dd>
                            </div>
                        </div>
                        <div class="w-full sm:w-4/12 px-4">
                            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                                <dt class="truncate text-sm font-medium text-gray-500">已報名賽事</dt>
                                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $user->events->count() }}</dd>
                            </div>
                        </div>
                    </div> <!-- end flex-->

                    <div class="flex flex-wrap mt-8">
                        <div class="px-4 w-full">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-xl font-semibold text-gray-900">未來賽事</h1>
                                </div>

                            </div>
                            <div class="mt-4 flex flex-col">
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div
                                            class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                                            賽事名稱</th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            狀態</th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            報名日期</th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            賽事日期</th>
                                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 w-1/12">
                                                            狀態
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                @foreach ($events as $event)
                                                        <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            <a class="text-blue-600" href="{{route('events.show', ['event' => $event->id])}}">
                                                            {{ $event->event_name}}</a></td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            @if (!$event->hasRegistrationPassedToday())
                                                            開放報名中
                                                            @else
                                                            報名已截止
                                                            @endif
                                                            </td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">

                                                            {{ $event->register_date}}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $event->race_date}}</td>

                                                        <td
                                                            class="relative whitespace-nowrap py-4 text-right text-sm font-medium pr-6">
                                                            @if (!$event->hasRegistrationPassedToday())
                                                                <a class="text-blue-600" href="{{ route('events.show', ['event' => $event->id]) }}">
                                                                    更多資訊
                                                                </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="flex justify-end mt-4">
                                            <a class="text-indigo-600" href="{{route('events.index')}}">所有賽事&#x2192;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end flex-->

                    <div class="flex flex-wrap">
                        <div class="px-4 w-full">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-xl font-semibold text-gray-900">儲值紀錄</h1>
                                </div>

                            </div>
                            <div class="mt-4 flex flex-col">
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div
                                            class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
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
                                                            {{ $transaction->description }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $transaction->transaction_date }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $transaction->amount }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $transaction->confirmed ? '確認' : '未確認' }}
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="flex justify-end mt-4">
                                            <a class="text-indigo-600" href="{{route('transactions.index')}}">所有儲值紀錄&#x2192;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end flex-->

                     <div class="flex flex-wrap">
                        <div class="px-4 w-full">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-xl font-semibold text-gray-900">其他紀錄</h1>
                                </div>

                            </div>
                            <div class="mt-4 flex flex-col">
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div
                                            class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>

                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            描述</th>
                                                        <th scope="col"
                                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                            日期</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @foreach ($activities as $activity)
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{$activity->description}}</td>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 ">
                                                            {{ $activity->created_at }}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end flex-->
                </div>
            </main>
        </div>
</x-app-layout>
