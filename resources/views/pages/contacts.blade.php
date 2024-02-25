@extends('layouts.app')
@section('content')
    <div class="container pt-[4rem] pb-32"
        style="background-image: url('{{ asset('/images/background.jpg') }}');  background-size: cover; background:fullscreen;">

        <div class="main">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.5987638196266!2d85.31750507492164!3d27.667883027231895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c82b81d77d%3A0x879326313b815595!2sApp%20Technologies%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1707028435671!5m2!1sen!2snp"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div>
                <h3 class="txt font-bold text-xl mt-10">Get Connected</h3>
                <span>Follow us on social media</span>
                <ul class="list flex space-x-5 mt-5">
                    @php
                        $array = [
                            [
                                'icon' => ' fa-facebook',
                                'color' => 'bg-red-100',
                            ],
                            [
                                'icon' => '  fa-instagram',
                                'color' => 'bg-red-100',
                            ],

                            [
                                'icon' => ' fa-whatsapp',
                                'color' => 'bg-red-100',
                            ],
                            [
                                'icon' => ' fa-twitter',
                                'color' => 'bg-red-100',
                            ],
                        ];

                    @endphp
                    @each('components.contact', $array, 'contact', 'components.null')
                </ul>
                <h3 class="txt font-bold text-xl  mt-10">Get Connected</h3>
                <div class="about-page-wrap p-3 pl-24 pr-24  rounded-md bg-right"
                    style="background-image: url({{ asset('/images/contactbg.png') }}); background:cover; height:800px;">
                    <div class="grid grid-cols-3 gap-x-5">
                        <div class="first bg-orange-100 p-5 rounded-3xl hover:bg-white hover:text-blue-800">
                            <small>E-mail:</small>
                            <a href="mailto:aprishtamang77@gmail.com">aprishtamang77@gmail.com</p>

                        </div>
                        <div class="first bg-red-100  p-5 rounded-3xl">
                            <small>Phone no:</small>
                            <a href="mobile:+977-9808055990">+977-9808055990</p>

                        </div>
                        <div class="first bg-neutral-400 p-5 rounded-3xl">
                            <small>Address:</small>
                            <a href="mailto:aprishtamang77@gmail.com">Suryabinayak-4, Bhaktapur</a>

                        </div>


                    </div>
                    <div class="form h-52 w-60 space-y-8  border-black rounded-2xl">
                        <form action="/contacts" method="POST"
                            class="form py-5 w-[100%] space-y-8 border-2 border-black rounded-2xl bg-sky-100">
                            @csrf
                            <h3 class="txt font-bold text-center">Inquiry Form</h3>

                            <input type="text" name="name" class="fname ml-[1.75rem] rounded-sm "
                                placeholder="First-Name" required>

                            <input type="text" name="lname" class="fname ml-[1.75rem] rounded-sm "
                                placeholder="Last-Name" required>

                            <input type="email" class="fname ml-[1.75rem] rounded-sm " placeholder="E-mail" required>
                            <div class="textarea relative">
                                <div position="position:relative;">
                                    <textarea name="desc" id="" rows="4" placeholder="Further more quiries" class="px-2 w-[89%] ml-3"> </textarea>
                                    <button class="btn absolute bg-slate-600"
                                        style="top: 80%; right: 25px; transform: translateY(-50%);"><a
                                            href="#">Edit</a></button>
                                </div>
                            </div>

                            <button class="btn bg-slate-600 rounded-3xl p-2 ml-14 px-6 hover:bg-white hover:text-black"
                                type="submit">Submit</button>
                        </form>



                    </div>






                </div>

            </div>

        </div>

    </div>

    </div>
@endsection
