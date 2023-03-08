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
                    <h3 class="text-xl font-medium mb-6">新增方案</h3>
                        <form method="POST" action="/events/{{$event->id}}/pricepackages">
                        @csrf
                        <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">方案</label>
                        <div class="mt-1 sm:col-span-2 sm:mt-0 flex">
                            <div class=" w-2/12 mr-4 ">
                            <label class="block">價錢</label>
                            <input type="text" name="price" class="w-full block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm" >
                            </div>
                            <div class="w-9/12 ">
                            <label class="block">方案描述</label>
                            <input type="text" name="description" class="w-full block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500  sm:text-sm" >
                            </div>
                        </div>
                    </div>


                        <div class="py-3 text-right">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-4 px-8  font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">建立</button>
                        </div>
                        @include('layouts.error')

                        </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
