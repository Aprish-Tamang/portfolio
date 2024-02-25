<nav class="top pt-2 pb-2 "
    style="background-image: url('{{ asset('/images/background.jpg') }}');  background-size: cover;">

    <div class="flex container justify-between">
        <div class="icon ">
            <img src="{{ asset('images/aprishcrop.png') }}" alt="" width="60px" height="60px"
                class="img rounded-md mr-52">
        </div>

        @php
            $array = [
                [
                    'icon' => 'fa-house',
                    'title' => 'Home',
                    'url' => '/',
                    'active' => Route::currentRouteName() == 'Home',
                ],
                [
                    'icon' => 'fa-id-card',
                    'title' => 'About',
                    'url' => '/about',
                    'active' => Route::currentRouteName() == 'About',
                ],
                [
                    'icon' => 'fa-file-lines',
                    'title' => 'Resume',
                    'url' => '/resume',
                    'active' => Route::currentRouteName() == 'Resume',
                ],
                [
                    'icon' => ' fa-blog',
                    'title' => 'Blogs',
                    'url' => '/blogs',
                    'active' => Route::currentRouteName() == 'Blog',
                ],
                [
                    'icon' => 'fa-address-book',
                    'title' => 'Contact',
                    'url' => '/contacts',
                    'active' => Route::currentRouteName() == 'Contact',
                ],
            ];

        @endphp
        @each('components.nav', $array, 'nav', 'components.null')


    </div>


</nav>
