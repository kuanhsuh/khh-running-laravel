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
                                    <th class="py-4">名字</th>
                                    <th>連結</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $i => $user)
                                    <tr class="{{ $i % 2 === 1 ? 'bg-slate-100' : '' }}">
                                        <td class="py-4">{{ $user->name }}
                                            <span class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 @if ($user->hasRole('Admin')) bg-purple-100  @else bg-green-100  @endrole">@if ($user->hasRole('Admin')) 管理者@else 一般會員 @endrole</span>
                                        </td>
                                        <td><a class="text-blue-500" href="{{ route('users.show', ['user' => $user->id]) }}">連結</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
