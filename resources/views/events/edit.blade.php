<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-medium mb-6">更新賽事</h3>
                        <form method="POST" action="/events/{{$event->id}}">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="event_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">賽事名稱</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="text" name="event_name" value="{{$event->event_name}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="enrollment_limit" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">比賽人數</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="text" name="enrollment_limit" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="event_description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">賽事描述</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <textarea class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm h-48" name="event_description">{{$event->event_description}}</textarea>
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="race_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">比賽日</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="date" value="{{$event->race_date}}" name="race_date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="register_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">報名截止日</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <input type="date" value="{{$event->register_date}}" name="register_date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm">
                            </div>
                        </div>

                        <div class="py-3 text-right">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-4 px-8  font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">更新</button>
                        </div>
        @include('layouts.error')

                        </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
