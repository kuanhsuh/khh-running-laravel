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
                    <button class="mb-6 text-blue-500" onclick="history.back()">回上一頁</button>
                    <h3 class="text-xl font-medium mb-6 pb-2 border-b-2 border-gray-800">更改使用者資料</h3>


    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="/users/{{$user->id}}" class="mt-6 space-y-6">
        @csrf
        {{method_field('PUT')}}

        <div>
            <x-input-label for="name" value="姓名" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" value="電子郵件" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="nation" value="國籍(ex. 台灣)" />
            <x-text-input name="nation" type="text" class="mt-1 block w-full" :value="old('nation', $user->nation)" required autofocus autocomplete="nation" />
            <x-input-error class="mt-2" :messages="$errors->get('nation')" />
        </div>
        <div>
            <x-input-label for="id_number" value="身分證" />
            <x-text-input name="id_number" type="text" class="mt-1 block w-full" :value="old('id_number', $user->id_number)" required autofocus autocomplete="id_number" />
            <x-input-error class="mt-2" :messages="$errors->get('id_number')" />
        </div>
        <div class="flex">
            <div class="w-2/6">
            {{-- <x-input-label for="area_code" value="郵遞區號" />
            <x-text-input name="area_code" type="text" class="mt-1 block w-full" :value="old('area_code', $user->area_code)" required autofocus autocomplete="area_code" /> --}}

            <label for="area_code">郵遞區號</label>
            <select name="area_code" id="area_code" class="mt-1 block w-full shadow-sm border-gray-300 rounded-md">
                <option value="800" {{ $user->area_code == '800' ? 'selected' : '' }}>800新興區</option>
                <option value="801" {{ $user->area_code == '801' ? 'selected' : '' }}>801前金區</option>
                <option value="802" {{ $user->area_code == '802' ? 'selected' : '' }}>802苓雅區</option>
                <option value="803" {{ $user->area_code == '803' ? 'selected' : '' }}>803鹽埕區</option>
                <option value="804" {{ $user->area_code == '804' ? 'selected' : '' }}>804鼓山區</option>
                <option value="805" {{ $user->area_code == '805' ? 'selected' : '' }}>805旗津區</option>
                <option value="806" {{ $user->area_code == '806' ? 'selected' : '' }}>806前鎮區</option>
                <option value="807" {{ $user->area_code == '807' ? 'selected' : '' }}>807三民區</option>
                <option value="811" {{ $user->area_code == '811' ? 'selected' : '' }}>811楠梓區</option>
                <option value="812" {{ $user->area_code == '812' ? 'selected' : '' }}>812小港區</option>
                <option value="813" {{ $user->area_code == '813' ? 'selected' : '' }}>813左營區</option>
                <option value="814" {{ $user->area_code == '814' ? 'selected' : '' }}>814仁武區</option>
                <option value="815" {{ $user->area_code == '815' ? 'selected' : '' }}>815大社區</option>

                <option value="820" {{ $user->area_code == '820' ? 'selected' : '' }}>820岡山區</option>
                <option value="821" {{ $user->area_code == '821' ? 'selected' : '' }}>821路竹區</option>
                <option value="822" {{ $user->area_code == '822' ? 'selected' : '' }}>822阿蓮區</option>
                <option value="823" {{ $user->area_code == '823' ? 'selected' : '' }}>823田寮區</option>
                <option value="824" {{ $user->area_code == '824' ? 'selected' : '' }}>824燕巢區</option>
                <option value="825" {{ $user->area_code == '825' ? 'selected' : '' }}>825橋頭區</option>
                <option value="826" {{ $user->area_code == '826' ? 'selected' : '' }}>826梓官區</option>
                <option value="827" {{ $user->area_code == '827' ? 'selected' : '' }}>827彌陀區</option>
                <option value="828" {{ $user->area_code == '828' ? 'selected' : '' }}>828永安區</option>
                <option value="829" {{ $user->area_code == '829' ? 'selected' : '' }}>829湖內區</option>
                <option value="830" {{ $user->area_code == '830' ? 'selected' : '' }}>830鳳山區</option>
                <option value="831" {{ $user->area_code == '831' ? 'selected' : '' }}>831大寮區</option>
                <option value="832" {{ $user->area_code == '832' ? 'selected' : '' }}>832林園區</option>
                <option value="833" {{ $user->area_code == '833' ? 'selected' : '' }}>833鳥松區</option>

                <option value="840" {{ $user->area_code == '840' ? 'selected' : '' }}>840大樹區</option>
                <option value="842" {{ $user->area_code == '842' ? 'selected' : '' }}>842旗山區</option>
                <option value="843" {{ $user->area_code == '843' ? 'selected' : '' }}>843美濃區</option>
                <option value="844" {{ $user->area_code == '844' ? 'selected' : '' }}>844六龜區</option>
                <option value="845" {{ $user->area_code == '845' ? 'selected' : '' }}>845內門區</option>
                <option value="846" {{ $user->area_code == '846' ? 'selected' : '' }}>846杉林區</option>
                <option value="847" {{ $user->area_code == '846' ? 'selected' : '' }}>847甲仙區</option>
                <option value="848" {{ $user->area_code == '848' ? 'selected' : '' }}>848桃源區</option>
                <option value="849" {{ $user->area_code == '849' ? 'selected' : '' }}>849那瑪夏區</option>
                <option value="851" {{ $user->area_code == '851' ? 'selected' : '' }}>851茂林區</option>
                <option value="852" {{ $user->area_code == '852' ? 'selected' : '' }}>852茄萣區</option>
            </select>

            <x-input-error class="mt-2" :messages="$errors->get('area_code')" /></div>
            <div class="w-4/6 pl-4">
            <x-input-label for="address" value="地址" />
            <x-text-input name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" /></div>
        </div>
        <div class="flex">
            <div class="w-1/6 pr-2">
            <label for="gender">性別</label>
            <select name="gender" id="gender" class="mt-1 block w-full shadow-sm border-gray-300 rounded-md">
                <option value="男" {{ $user->gender == '男' ? 'selected' : '' }}>男</option>
                <option value="女" {{ $user->gender == '女' ? 'selected' : '' }}>女</option>
            </select>

            <x-input-error class="mt-2" :messages="$errors->get('gender')" /></div>
            <div class="w-5/6 pl-2">
            <x-input-label for="birthdate" value="生日(ex. 1986.08.24)" />
            <x-text-input name="birthdate" type="text" class="mt-1 block w-full" :value="old('birthdate', $user->birthdate)" required autofocus autocomplete="birthdate" />
            <x-input-error class="mt-2" :messages="$errors->get('birthdate')" /></div>
        </div>
        <div class="flex">
            <div class="w-3/6 pr-2">
            <x-input-label for="cellphone" value="手機電話(ex. 0988-888-777)" />
            <x-text-input name="cellphone" type="text" class="mt-1 block w-full" :value="old('cellphone', $user->cellphone)" required autofocus autocomplete="cellphone" />
            <x-input-error class="mt-2" :messages="$errors->get('cellphone')" /></div>
            <div class="w-3/6 pl-2">
            <x-input-label for="housephone" value="家裡電話(ex. 07-333-5555)" />
            <x-text-input name="housephone" type="text" class="mt-1 block w-full" :value="old('housephone', $user->housephone)" autofocus autocomplete="housephone" />
            <x-input-error class="mt-2" :messages="$errors->get('housephone')" /></div>
        </div>
        <div class="flex">
            <div class="w-2/6 pr-2">
            <x-input-label for="emergency_name" value="緊急聯絡人-姓名" />
            <x-text-input name="emergency_name" type="text" class="mt-1 block w-full" :value="old('emergency_name', $user->emergency_name)" required autofocus autocomplete="emergency_name" />
            <x-input-error class="mt-2" :messages="$errors->get('emergency_name')" /></div>
            <div class="w-2/6 pr-2">
            <x-input-label for="emergency_phone" value="緊急聯絡人-電話" />
            <x-text-input name="emergency_phone" type="text" class="mt-1 block w-full" :value="old('emergency_phone', $user->emergency_phone)" required autofocus autocomplete="emergency_phone" />
            <x-input-error class="mt-2" :messages="$errors->get('emergency_phone')" /></div>
            <div class="w-2/6">
            <x-input-label for="emergency_relationship" value="緊急聯絡人-關係" />
            <x-text-input name="emergency_relationship" type="text" class="mt-1 block w-full" :value="old('emergency_relationship', $user->emergency_relationship)" required autofocus autocomplete="nation" />
            <x-input-error class="mt-2" :messages="$errors->get('emergency_relationship')" /></div>
        </div>
        <div>
            <x-input-label for="recommendation" value="推薦人(可填寫無)" />
            <x-text-input name="recommendation" type="text" class="mt-1 block w-full" :value="old('recommendation', $user->recommendation)" autofocus autocomplete="recommendation" />
            <x-input-error class="mt-2" :messages="$errors->get('recommendation')" />
        </div>
        <div>
            <x-input-label for="shirt_size" value="馬拉松衣服尺寸(報比賽需要，到時候可以改)" />
            <x-text-input name="shirt_size" type="text" class="mt-1 block w-full" :value="old('shirt_size', $user->shirt_size)" autofocus autocomplete="shirt_size" />
            <x-input-error class="mt-2" :messages="$errors->get('shirt_size')" />
        </div>

        <label for="pickup_location">分組</label>
        <select name="pickup_location" id="pickup_location" class="mt-1 block w-full shadow-sm border-gray-300 rounded-md">
            <option value="800" {{ $user->pickup_location == '800' ? 'selected' : '' }}>800新興區</option>
            <option value="801" {{ $user->pickup_location == '801' ? 'selected' : '' }}>801前金區</option>
            <option value="802" {{ $user->pickup_location == '802' ? 'selected' : '' }}>802苓雅區</option>
        </select>



        <div class="flex items-center gap-4">
            <x-primary-button>存檔</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >已存檔</p>
            @endif
        </div>
    </form>




                </div>
            </div>
        </div>
    </div>


</x-app-layout>
