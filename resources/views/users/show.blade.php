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
                    <button class="mb-6 text-blue-500" onclick="history.back()">回上一頁</button>
                    <h3 class="text-xl font-medium mb-6 pb-2 border-b-2 border-gray-800">使用者資料</h3>

                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 pl-6 pr-3 text-center text-sm font-semibold text-gray-900">項目</th>
                            <th scope="col" class="px-3 py-3 text-center text-sm font-semibold text-gray-900">資料</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">姓名</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->name }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">國籍</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->nation }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">身分證</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->id_number }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">郵遞區號+地址</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->area_code }} {{ $register_user->address }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">性別</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->gender }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">生日</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->birthdate }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">手機</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->cellphone }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">室內電話</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->housephone }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">緊急聯絡人-姓名 / 關係</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->emergency_name }} / {{ $register_user->emergency_relationship }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">緊急聯絡人-電話</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->emergency_phone }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">比賽衣服尺寸</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->shirt_size }}</td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">取貨分組</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $register_user->pickup_location }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <h3 class="text-xl font-medium mb-8 pb-2 border-b-2 border-gray-800 mt-8">報名賽事</h3>

                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 pl-6 pr-3 text-center text-sm font-semibold text-gray-900">賽事</th>
                            <th scope="col" class="px-3 py-3 text-center text-sm font-semibold text-gray-900">方案</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($register_user->events as $event)
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 text-center">{{ $event->event_name }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                                {{$register_user->getPricePackageDescriptionForEvent($event)}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
