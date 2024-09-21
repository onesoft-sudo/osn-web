<nav class="grid grid-cols-[30%_auto_30%] lg:grid-cols-[10%_auto_10%] px-3 py-2 bg-white/30 dark:bg-neutral-800/40 backdrop-blur-3xl fixed w-screen z-[100000] shadow-sm shadow-neutral-300/90 dark:shadow-neutral-500/60">
    <button id="navbarToggle" class="lg:hidden">
        <x-gmdi-menu class="size-7" />
    </button>

    <x-brand />

    <ul class="flex flex-col lg:flex-row items-center lg:justify-center navbar-drawer px-3 py-2 lg:p-0" id="navbarDrawer">
        <li class="lg:hidden flex items-center justify-end mb-3 p-2">
            <button class="p-1 rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-100/20" id="navbarCloseButton">
                <x-gmdi-close class="size-6" />
            </button>
        </li>
        @foreach($links as $title => $link)
            <li>
                <a
                    href="{{ $link['url'] }}"
                    class="{{
                        classNames(
                            "text-neutral-800 dark:text-neutral-200 hover:text-black dark:hover:text-white py-1 my-0.5 lg:my-0 block lg:py-0 hover:bg-neutral-200/80 dark:hover:bg-neutral-100/15 lg:dark:hover:bg-transparent lg:hover:bg-transparent rounded-lg px-3",
                            url()->current() === $link['url'] ?
                                "font-semibold bg-neutral-200 dark:bg-neutral-100/15 lg:dark:bg-transparent lg:bg-transparent" :
                                ""
                        )
                    }}"
                >
                    {{ $title }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="block"></div>
    <div class="hidden h-screen w-screen top-0 left-0 fixed bg-black/50" id="navbarOverlay"></div>
</nav>
