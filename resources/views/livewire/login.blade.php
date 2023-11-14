<div class="w-full h-[100vh] relative">
    <div style="background-image: url(/login-bg.png); background-size: contain; backdrop-filter: blur(30px)" class="text-slate-200 bg-slate-900 h-[inherit] flex flex-col gap-2 xs:gap-0 justify-center items-center">
        <form wire:submit.prevent="doLogin" class="xs:w-full xs:h-full w-[350px] bg-slate-800 shadow-xl px-6 py-8 rounded-md flex xs:justify-center flex-col gap-4">
            <h1 class="text-xl text-center font-bold">Login</h1>
            @if (session()->has('error'))
                <div class="text-sm text-center text-red-500">
                    &nbsp{{ session()->get('error') }}
                </div>
            @endif
            <div>
                <label class="block text-sm pb-1 text-grey-300">Username</label>
                <input wire:model="username" placeholder="Input username" class="border-2 border-slate-500 text-sm bg-slate-600 w-full px-2 py-3 rounded outline-none @error('username') border-red-500 @enderror " type="text" />
            </div>
            <div>
                <Label class="block text-sm pb-1 text-grey-300">Password</Label>
                <input wire:model="password" placeholder="Input password" class="border-2 border-slate-500 text-sm bg-slate-600 w-full px-2 py-3 rounded outline-none" type="password" />
                @error('password') <span class="error">{{ $message }}</span> @enderror 
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white rounded w-full p-3 text-sm hover:bg-blue-400">Masuk</button>
            </div>
        </form>
        <div class="xs:bg-slate-800 xs:w-full text-center p-2">
            <span class="text-xs text-grey-100">&copy; Copyright 2023 Kalytera Project</span>
        </div>
    </div>
</div>
