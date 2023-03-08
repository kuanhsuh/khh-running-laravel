@php
    $userspackage = auth()->user()->price_packages->where('event_id',$event->id)->first()
@endphp

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
                    <h3 class="text-xl font-medium mb-6 pb-8 border-b-2 border-gray-800">{{ $event->event_name}}</h3>

                    <p class="text-xl ">
                        {{ $event->event_description}}
                    </p>

                    <div class="flex items-center mt-8"><h5 class="mr-4 text-xl font-medium">比賽日期</h5> {{ $event->race_date}}</div>
                    <div class="flex items-center mt-4 pb-6 border-b-2 border-gray-800"><h5 class="mr-4 text-xl font-medium">報名截止日</h5> {{ $event->register_date}}</div>
                    <div class="mt-4 pb-6 border-b-2 border-gray-800">
                    @if($event->isUserRegistered())
                        你已報名這場賽事 - 方案:
                        {{$userspackage->description}} - {{$userspackage->price}}$
                        @if(!$event->hasRegistrationPassedToday() || $event->isFull())
                        - <a href="{{ route('events.unregister', ['event' => $event->id, 'price_package' => $userspackage]) }}" class="unregisterLink rounded text-red-700 border border-red-700  hover:text-red-500 ease-in duration-100 bg-white rounded px-2 py-1 ml-3 text-sm">取消方案&賽事</a>
                        @endif
                    @endif
                    </div>
                    <div class="mt-4 pb-6 border-b-2 border-gray-800">
                    <h5 class="mr-4 text-xl font-medium">方案</h5>
                        @if($event->users->contains(auth()->user()))
                            <ul>
                                @foreach ($event->price_packages as $price_package)
                                <li class="flex items-center mb-2">方案-1 - 金額{{$price_package->price }} / 描述 {{$price_package->description }}
                                @role('Admin')
                                    @if(!$event->hasRegistrationPassedToday() || $event->isFull())
                                    <form method="POST" action="/events/{{$event->id}}/pricepackages/{{$price_package->id }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="rounded text-red-700 border border-red-700  hover:text-red-500 ease-in duration-100 bg-white rounded px-2 py-1 ml-3 text-sm" value="刪除方案"/>
                                    </form>
                                    @endif
                                @endrole
                                </li>
                                @endforeach
                            <ul>
                        @else
                            <ul>
                                @foreach ($event->price_packages as $price_package)
                                <li class="flex items-center mb-2">方案-1 - 金額{{$price_package->price }} / 描述 {{$price_package->description }}
                                @if($price_package->isPriceLessThanUserCredit())
                                <a href="{{ route('events.register', ['event' => $event->id, 'price_package' => $price_package->id]) }}" class="px-2 inline-block py-1 ml-2 rounded  text-white text-sm bg-indigo-500 hover:bg-indigo-700 registerLink">馬上報名</a>
                                @else
                                    <a href="{{route('transactions.create')}}" class="border border-indigo-500 rounded text-indigo-500 px-2 py-1 ml-2">請先儲值</a>
                                @endif
                                @role('Admin')
                                    <form method="POST" action="/events/{{$event->id}}/pricepackages/{{$price_package->id }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="rounded text-red-700 border border-red-700  hover:text-red-500 ease-in duration-100 bg-white rounded px-2 py-1 ml-3 text-sm" value="刪除方案"/>
                                    </form>
                                @endrole
                                </li>
                                @endforeach
                            <ul>

                        @endif

                    </div>
                    @role('Admin')
                    <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="px-4 inline-block mt-6 py-2 rounded  text-white bg-indigo-500 hover:bg-indigo-700">編輯</a>
                    <a href="{{ route('pricepackage.create', ['event' => $event->id]) }}" class="px-4 inline-block mt-6 ml-4 py-2 rounded text-white bg-indigo-500 hover:bg-indigo-700">新增方案</a>
                    <form method="POST" action="/events/{{$event->id}}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class=" mt-6 rounded text-red-700 border border-red-700  hover:text-red-500 ease-in duration-100 bg-white rounded px-4 py-2" data-toggle="tooltip" title='刪除'>刪除</button>

                    </form>
                    @endrole


                    <h5 class="mr-4 text-xl font-medium mt-6">報名人員</h5>
                    <ul>
                        @foreach ($event->users as $user)
                        <li class="my-2">{{$user->name}}
                            @role('Admin')
                            - <a class="text-blue-500" href="{{route('users.show', ['user' => $user->id])}}">顯示使用者資料</a>
                            @endrole
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

        var unregisterLink = document.querySelector('.unregisterLink');
        var registerLink = document.querySelector('.registerLink');

        registerLink.addEventListener('click', function(event){
            event.preventDefault();
                Swal.fire({
                    title: '請問你確認要報名賽事',
                    text: "報名賽事後，你的點數會扣款.",
                    icon: "success",
                    confirmButtonText: '確認',
                    cancelButtonText: '取消',
                    showCancelButton: true,
                    showConfirmButton: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location = registerLink.href
                    }
                });
        })
        unregisterLink.addEventListener('click', function(event){
            event.preventDefault();
                Swal.fire({
                    title: '請問你確認要取消報名',
                    text: "如果你取消，你的名額將被取代.",
                    icon: "warning",
                    confirmButtonText: '確認',
                    cancelButtonText: '取消',
                    showCancelButton: true,
                    showConfirmButton: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location = unregisterLink.href
                    }
                });
        })
    </script>

</x-app-layout>
