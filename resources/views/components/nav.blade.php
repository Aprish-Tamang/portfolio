<div>
    <div class="flex">
        <a href="{{ $nav['url'] }}" class="items px-10 py-5  rounded-md hover:bg-slate-400 hover:text-white focus:outline-none focus:ring focus:ring-black border-black {{ $nav['active'] ? 'bg-stone-300' : '' }}">
            <i class="fa-solid {{ $nav['icon'] }} mr-3"></i>
            {{ $nav['title'] }}</a>
    </div>
</div>