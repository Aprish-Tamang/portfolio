@extends('layouts.app')
@section('content')
    <div class="container" style="background-image: url('{{ asset('/images/background.jpg') }}');  background-size: cover;">



        <div class="items bg-transparent rounded-3xl  h-screen w-full">
            <h3 style=" font-size:32px; margin-left:100px; padding-top:70px;">Blogs</h3>
            <div class=" border-red-600 ml-[4rem] border-2 absolute w-60 h-0 mb-10"></div>
            <div class="grid gap-5 grid-cols-3 max-w-2xl gap-x-8 gap-y-16 mt-10 ml-16">

                <div class="1  bg-red-300 rounded-2xl overflow-hidden">
                    <img src="{{ asset('/images/R.jpeg') }}" alt="" class="img rounded-2xl hover:scale-125 ">
                    <small>2023 Jan 04 </small>
                    <h3 class="tex mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 ml-6"> <a
                            href="">
                            How to own your audiance
                        </a></h3>
                </div>
                <div class="1  bg-red-300 rounded-2xl overflow-hidden  ">
                    <img src="{{ asset('/images/R.jpeg') }}" alt="" class="img rounded-2xl hover:scale-125">
                    <small>2023 Jan 04 </small>
                    <h3 class="tex mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 ml-6"> <a
                            href="">
                            How to own your audiance
                        </a></h3>
                </div>
                <div class="1  bg-red-300 rounded-2xl overflow-hidden">
                    <img src="{{ asset('/images/R.jpeg') }}" alt="" class="img rounded-2xl  hover:scale-125">
                    <small>2023 Jan 04 </small>
                    <h3 class="tex mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 ml-6"> <a
                            href="">
                            How to own your audiance
                        </a></h3>
                </div>
                <div class="1  bg-red-300 rounded-2xl overflow-hidden">
                    <img src="{{ asset('/images/R.jpeg') }}" alt="" class="img rounded-2xl  hover:scale-125">
                    <small>2023 Jan 04 </small>
                    <h3 class="tex mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 ml-6"> <a
                            href="">
                            How to own your audiance
                        </a></h3>
                </div>
                <div class="1  bg-red-300 rounded-2xl overflow-hidden">
                    <img src="{{ asset('/images/R.jpeg') }}" alt="" class="img rounded-2xl  hover:scale-125">
                    <small>2023 Jan 04 </small>
                    <h3 class="tex mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 ml-6"> <a
                            href="">
                            How to own your audiance
                        </a></h3>
                </div>
                <div class="1  bg-red-300 rounded-2xl overflow-hidden">
                    <img src="{{ asset('/images/R.jpeg') }}" alt=""class="img rounded-2xl  hover:scale-125">
                    <small>2023 Jan 04 </small>
                    <h3 class="tex mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 ml-6"> <a
                            href="">
                            How to own your audiance
                        </a></h3>
                </div>


            </div>
        </div>

    </div>
@endsection


















{{-- <div class="about-page-wrap pt-24 pl-24 pr-24 bg-transparent rounded-md" style="background-image: url('{{ asset('/images/blogbg.png') }}');  background-size: cover;">
            <div class="blogh">
                <h3 class="page-title relative inline-block" style=" font-size:32px;">Blogs</h3>
                <div class=" border-red-600 border-2 absolute w-48 h-0 mb-10"></div>
                <div class="grid grid-cols-2 w-[45%] ">
                    <div class="one">hey</div>
                    <div class="two">hey</div>
                    <div class="three">hey</div>
                    <div class="four">hey</div>
                </div>
            </div> --}}
{{-- <div class="grid grid-cols-2 border-2 border-black row-span-5 rounded-2xl w-[45%]" >
                <div class="on h-[20rem] w-[20rem] rounded-3xl">
                    <img class="img m-5" src="{{ asset('/images/back.png') }}" alt=""  >
                    <p class="text-center">hello</p>
                </div>
                <div class="two rounded-3xl">
                    <img class="img m-5  h-[15rem] w-[20rem]" src="{{ asset('/images/back.png') }}" alt="">
                    <p class="text-center">hello</p>
                </div>
                <div class="three  rounded-3xl">
                    <img class="img  h-[20rem] w-[20rem] m-5" src="{{ asset('/images/back.png') }}" alt="">
                    <p class="text-center">hello</p>
                </div>
                <div class="four rounded-3xl">
                    <img class="img  h-[20rem] w-[20rem] m-5" src=" {{ asset('/images/back.png') }}" alt="">
                    <p class="text-center">hello</p>
                </div>
               
            </div> --}}





{{-- </div> --}}
