<div class="flex min-h-[100vh] gap-5">
    <div class="flex-[40%] md:flex-1 shadow-xl rounded-xl">
        <form class="flex flex-col text-slate-700 min-h-[100vh]">
            <div class="flex-1 flex max-h-[100%] relative">
                <div class="w-full overflow-auto flex p-10 sm:p-5 flex-col gap-5">
                    @if ($errors->any()) 
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h1 class="text-2xl font-bold">Kritik & Saran</h1>
                    <p>Beri tanggapan, kritik dan saran seputar aplikasi kami?</p>
                    <ul class="flex justify-between gap-5">
                        <li style="background: url(/reaction/1.png); background-size: contain" wire:click="$set('reaction_id', 1)" class="@if($reaction_id === 1) scale-125 @else grayscale @endif transition hover:cursor-pointer w-14 h-14 xs:w-10 xs:h-10"></li>
                        <li style="background: url(/reaction/2.png); background-size: contain" wire:click="$set('reaction_id', 2)" class="@if($reaction_id === 2) scale-125 @else grayscale @endif transition hover:cursor-pointer w-14 h-14 xs:w-10 xs:h-10"></li>
                        <li style="background: url(/reaction/3.png); background-size: contain" wire:click="$set('reaction_id', 3)" class="@if($reaction_id === 3) scale-125 @else grayscale @endif transition hover:cursor-pointer w-14 h-14 xs:w-10 xs:h-10"></li>
                        <li style="background: url(/reaction/4.png); background-size: contain" wire:click="$set('reaction_id', 4)" class="@if($reaction_id === 4) scale-125 @else grayscale @endif transition hover:cursor-pointer w-14 h-14 xs:w-10 xs:h-10"></li>
                        <li style="background: url(/reaction/5.png); background-size: contain" wire:click="$set('reaction_id', 5)" class="@if($reaction_id === 5) scale-125 @else grayscale @endif transition hover:cursor-pointer w-14 h-14 xs:w-10 xs:h-10"></li>
                    </ul>
                    <div>
                        <p>Apakah anda memiliki suatu keluhan atau saran seputar aplikasi kami?</p>
                        @error('message') <span class="text-red-500 text-sm">* {{ $message }}</span> @enderror
                        <textarea wire:model="message" placeholder="Tulis kritik & saran anda disini" class="outline-none w-full rounded border-2 bg-slate-100 border-slate-300 p-3 my-5"></textarea>
                    </div>
                    <div>
                        <p>Pilih topik yang tepat untuk kritik & saran anda</p>
                        @error('topic_id') <span class="text-red-500 text-sm">* Topic tidak valid</span> @enderror
                        <select wire:model="topic_id" class="p-3 w-full rounded border-2 bg-slate-100 border-slate-300">
                            @foreach($topics as $topic)
                            <option :key="$topic->id" value="{{ $topic->id }}">{{ $topic->desc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <p>Apakah anda bersedia untuk menindak lanjuti saran anda?</p>
                        @error('follow') <span class="text-red-500 text-sm">* {{ $message }}</span> @enderror
                        <ul class="inline-flex gap-5 py-3">
                            <li class="flex items-center">
                                <input @if($follow) checked @endif wire:click="$set('follow', true)" class="w-5 h-5" id="follow1" type="radio" name="follow">
                                <label class="pl-2" for="follow1">Ya</label>
                            </li>
                            <li class="flex items-center">
                                <input @if(!$follow) checked @endif wire:click="$set('follow', false)" class="w-5 h-5" id="follow2" type="radio" name="follow">
                                <label class="pl-2" for="follow2">Tidak</label>
                            </li>
                        </ul>
                    </div>
                    @if ($follow)
                    <div class="px-5 py-6 flex flex-col gap-5 shadow rounded">
                        <div>
                            <label class="block">Nama Anda <span class="text-red-500">*</span></label>
                            @error('name') <span class="text-red-500 text-sm">* {{ $message }}</span> @enderror
                            <input type="text" class="w-full outline-none border-2 border-slate-300 bg-slate-100 rounded p-3" />
                        </div>
                        <div>
                            <label class="block">No. Whatsapp <span class="text-red-500">*</span></label>
                            @error('contact') <span class="text-red-500 text-sm">* {{ $message }}</span> @enderror
                            <input type="text" placeholder="+6282xxxxx" class="w-full outline-none border-2 border-slate-300 bg-slate-100 rounded p-3" />
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="flex gap-5 p-5 border-t-2 sm:p-5">
                <div wire:click="checkRule" class="hover:bg-blue-500 hover:cursor-pointer text-center flex-1 bg-blue-600 rounded p-4 sm:p-2 text-white font-bold">Kirim</div>
                <button class="text-center flex-1 rounded p-4 sm:p-2 border-2 text-slate-400 font-bold">Batal</button>
            </div>
        </form>
    </div>
    <div style="background-image: url(/login-bg.png); background-size: cover" class="md:hidden flex-[60%]">
        hello
    </div>
</div>