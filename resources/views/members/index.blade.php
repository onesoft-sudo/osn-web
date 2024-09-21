@php use Illuminate\Pagination\LengthAwarePaginator; @endphp
@php
    /** @var LengthAwarePaginator $members */
@endphp

<x-app-layout>
    <div class="flex justify-center">
        <div class="px-3 lg:px-0 lg:w-2/3">
            <h1 class="text-3xl font-bold">Members</h1>
            <div class="mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($members as $member)
                    <div class="bg-neutral-200/30 dark:bg-neutral-700/50 p-3 mb-3 rounded-lg text-center shadow">
                        <img
                            src="{{ $member->avatar ?? "https://ui-avatars.com/api/?name=" . urlencode($member->name) . "&color=fff&background=EBF4FF00" }}"
                            alt="{{ $member->name }}"
                            class="w-20 h-20 mx-auto rounded-full mb-3 bg-neutral-300 dark:bg-neutral-600"
                        />
                        <h2 class="text-xl font-bold">{{ $member->name }}</h2>
                        <h6 class="text-neutral-500 dark:text-neutral-400">{{ $member->role }}</h6>
                        @php
                            $socials = [
                                $member->github ? ["github", "https://github.com/" . urlencode($member->github)] : null,
                                $member->discord ? ["discord", "https://discord.com/user/" . urlencode($member->discord)] : null,
                                $member->email ? ["email", "mailto:$member->email"] : null
                            ];

                            $socials = array_filter($socials);
                        @endphp

                        <div class="mt-3 flex justify-center gap-2">
                            @foreach($socials as $social)
                                <a href="{{ $social[1] }}"
                                   class="text-neutral-500 dark:text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-300">
                                    @if($social[0] === 'github')
                                        <x-fab-github class="w-6 h-6"/>
                                    @elseif($social[0] === 'discord')
                                        <x-fab-discord class="w-6 h-6"/>
                                    @elseif($social[0] === 'email')
                                        <x-fas-envelope class="w-6 h-6"/>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-5 flex items-center justify-center gap-2">
                @foreach($members->linkCollection() as $link)
                    <a
                        href="{{ $link['url'] }}"
                        class="{{
                            classNames(
                                "px-3 py-1 hover:bg-neutral-200 hover:dark:bg-neutral-800 rounded-md",
                                is_numeric($link['label']) && $members->currentPage() === (int) $link['label']
                                ? 'bg-neutral-200 dark:bg-neutral-800' : ''
                            )
                        }}"
                    >
                        {{
                            match ($link['label']) {
                                'pagination.previous' => 'Previous',
                                'pagination.next' => 'Next',
                                default => $link['label']
                            }
                        }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
