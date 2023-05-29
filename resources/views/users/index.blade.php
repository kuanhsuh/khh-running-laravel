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
                    <h3 class="text-xl font-medium mb-6">所有使用者</h3>
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-md">
                        <table class="w-full text-center border-collapse rounded-sm">
                            <thead class="bg-indigo-200">
                                <tr>
                                    <th class="py-4 w-4/12">名字</th>
                                    <th><a class="flex  justify-center" href="{{ route('users.index', ['orderBy' => 'area_code', 'orderDirection' => $orderDirection == 'asc' ? 'desc' : 'asc']) }}">地區<img class="ml-2 w-6" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABKklEQVR4nO2VPWvDMBCGn6FTlyTt6qF/vFPXLqFDodAh6ZIvJ1PaQofkn1wRXECYREnsYJ3xPSDwl8Q9vPIJHMdxHKcZe0BaGF81apsAS2si0xoioqPziIsYQzwRY0gvE9lnPitMikxzilhGXMQY4okYQ3qZyK+hc6ORyI+hc6NKP7eWZcRFjCGeSIs8A2ugaJBIAWyBz3DzekW7/QbubyTypmv+JWQkIVLo3PD+Izx4uUJke0ORATA/IyMnRGKJua6VlVDATAvaAU8XiMQSJfCAEVIyUhExK3Fsm+0imVgkllhblEjJiI7OSBwYAauoAUjleqXfdIIhsDjSMTfAY2rie6LdhhjvaJ+R/syHOspLkhgnRMpMIuh/UFrtTnW22TB3EY7jOA6n+Ae7LhQ5vSEpHQAAAABJRU5ErkJggg=="></a></th>
                                    <th>連結</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $i => $user)
                                    <tr class="{{ $i % 2 === 1 ? 'bg-slate-100' : '' }}">
                                        <td class="py-4">{{ $user->name }}
                                            <span class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 @if ($user->hasRole('Admin')) bg-purple-100  @else bg-green-100  @endrole">@if ($user->hasRole('Admin')) 管理者@else 一般會員 @endrole</span>
                                        </td>
                                        <td>{{ $user->area_code}}</td>
                                        <td><a class="text-blue-500" href="{{ route('users.show', ['user' => $user->id]) }}">連結</a> /
                                        @role('Admin')
                                            <a class="text-blue-500" href="{{ route('users.edit', ['user' => $user->id]) }}">編輯</a>
                                        @endrole
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
