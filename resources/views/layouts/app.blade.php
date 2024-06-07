<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @include('components.navbar')
         
        {{-- The navbar with `sticky` and `full-width` --}}
        {{-- <x-mary-nav sticky full-width>
     
            <x-slot:brand>
           
                <label for="main-drawer" class="lg:hidden mr-3">
                    <x-mary-icon name="o-bars-3" class="cursor-pointer" />
                </label>
     
            
                <div>App</div>
            </x-slot:brand>
     
            <x-slot:actions>
                <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Dossier" icon="o-inbox" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Notifications" icon="o-currency-dollar" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Notifications" icon="fab.facebook" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Notifications" icon="o-trash" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Notifications" icon="o-folder" link="###" class="btn-ghost btn-sm" responsive />
            </x-slot:actions>
        </x-mary-nav> --}}
     
        {{-- The main content with `full-width` --}}
        <x-mary-main with-nav full-width>
     
            {{-- This is a sidebar that works also as a drawer on small screens --}}
            {{-- Notice the `main-drawer` reference here --}}
            <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">
     
                @if($user = auth()->user())
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
                        <x-slot:actions>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>
                            
                            <x-mary-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" no-wire-navigate link="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" />
                            

                        </x-slot:actions>
                    </x-mary-list-item>
     
                    <x-mary-menu-separator />
                @endif
     

                <x-mary-menu activate-by-route>
                    <x-mary-menu-item title="Home" icon="o-home" link="###" />
                    <x-mary-menu-item title="Messages" icon="o-envelope" link="###" />
                    <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                        <x-mary-menu-item title="Wifi" icon="o-wifi" link="####" />
                        <x-mary-menu-item title="Archives" icon="o-archive-box" link="####" />
                    </x-mary-menu-sub>
                </x-mary-menu>
            </x-slot:sidebar>
        
            <x-slot:content>
                {{ $slot }}
            </x-slot:content>
        </x-main>
     
        <x-mary-toast />
        @stack('modals')

        @livewireScripts
    </body>
</html>
