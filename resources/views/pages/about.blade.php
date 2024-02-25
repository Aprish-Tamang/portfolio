@extends('layouts.app')
@section('content')
    <div class="container" style="background-image: url('{{ asset('/images/background.jpg') }}');  background-size: cover;">
        <div class="about-page-wrap pt-24 pl-24 pr-24 bg-transparent rounded-md">
            <div class="page-title-2-wrap">
                <div class="row flex-wrap">
                    <div class="col-12">
                        <div class="about-page-title-wrap mb-24">
                            <h2 class="page-title relative inline-block" style=" font-size:32px;">"About Me" <div
                                    class=" border-red-600 border-2 absolute w-48 h-0 mb-10"></div>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="about-me-2-wrap">
                <div class="row flex">
                    <div class="col-lg-4 col-md-8">
                        <div class="about-personal-info-img">
                            <img src="{{ asset('/images/aprish.jpg') }}" alt="" height="100%" width="100%"
                                style="border-radius: 10%">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 ml-20">
                        <div class="about-personal-info-wrap">
                            <h4 style="font-size: 32px; font:bold;">Who am i?</h4>
                            <p class="about-personal-info-bio">I'm Creative Director and UI/UX Designer from Sydney,
                                Australia,
                                working in web development and print media. I enjoy turning complex problems
                                into simple, beautiful and intuitive designs.</p>
                            <p class="about-personal-info-bio">
                                My aim is to bring across your message and identity in the most creative way.
                                I created web design for many famous brand companies.
                            </p>
                            <div class="about-personal-info-connect ">
                                <h3 style="font-size:32px; margin-top:50px;">Personal Info</h3>
                                <div class="grid grid-rows-2 grid-cols-2">
                                    @php
                                        $collection = [
                                            [
                                                'title' => 'Phone',
                                                'value' => '9876543210',
                                                'icon'=>'fa-phone',
                                            ],
                                            [
                                                'title' => 'Email',
                                                'value' => 'info@test.com',
                                                'icon'=>'fa-envelope',
                                            ],
                                            [
                                                'title' => 'Address',
                                                'value' => 'Suryabinayak-4, Bhaktapur',
                                                'icon'=>'fa-location-crosshairs',
                                            ],
                                            [
                                                'title' => 'Birthday',
                                                'value' => '2002-02-08',
                                                'icon'=>'fa-calendar-days',
                                            ],
                                        ];
                                    @endphp
                                    @each('components.about', $collection, 'data', 'view.null')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 style="font-size: 32px;  margin-top:50px;">What do i do...</h3>
        <div class="cards mt-10 pb-10">
            <div class="grid  grid-cols-3 gap-10 h-5/6">

                <div class="one bg-slate-100 rounded-3xl">
                    <p class="text-center"><b>App Development</b></p>
                    <p class="p-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facilis harum quidem nesciunt
                        voluptatum ipsum, esse
                    </p>
                </div>
                <div class="two bg-slate-100 rounded-3xl">
                    <p class="text-center"><b>App Development</b></p>
                    <p class="p-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facilis harum quidem nesciunt
                        voluptatum ipsum, esse
                    </p>
                </div>
                <div class="three bg-slate-100 rounded-3xl">
                    <p class="text-center"><b>Photography</b></p>
                    <p class="p-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facilis harum quidem nesciunt
                        voluptatum ipsum, esse
                    </p>
                </div>
                <div class="four bg-slate-100 rounded-3xl">
                    <p class="text-center"><b>Graphic Design</b></p>
                    <p class="p-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facilis harum quidem nesciunt
                        voluptatum ipsum, esse
                    </p>
                </div>
                <div class="five bg-slate-100 rounded-3xl">
                    <p class="text-center"><b>Management</b></p>
                    <p class="p-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facilis harum quidem nesciunt
                        voluptatum ipsum, esse
                    </p>
                </div>
                <div class="six bg-slate-100 rounded-3xl">
                    <p class="text-center"><b>Web-Development</b></p>
                    <p class="p-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque facilis harum quidem nesciunt
                        voluptatum ipsum, esse
                    </p>
                </div>
            </div>


        </div>
    </div>
@endsection
