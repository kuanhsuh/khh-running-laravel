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
                    <h3 class="text-xl font-medium mb-6">所有賽事</h3>


                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-md">
                        <table class="w-full text-center border-collapse rounded-sm">
                            <thead class="bg-indigo-200">
                                <tr>
                                    <th class="py-4">賽事</th>
                                    <th>比賽日期</th>
                                    <th>報名截止日</th>
                                    <th>報名</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $i => $event)
                                <tr class="{{ $i % 2 === 1 ? 'bg-slate-100' : '' }}">
                                    <td class="py-4">{{ $event->event_name }}</td>
                                    <td>{{ $event->race_date }}</td>
                                    <td>{{ $event->register_date }}</td>
                                    <td>
                                    <a class="text-blue-500" href="{{ route('events.show', ['event' => $event->id]) }}">連結</a>
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
