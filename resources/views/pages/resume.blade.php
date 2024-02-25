@extends('layouts.app')
@section('content')
    <div class="container" style="background-image: url('{{ asset('/images/background.jpg') }}');  background-size: cover;">
        <div class="about-page-wrap pt-24 pl-24 pr-24 rounded-md flex">
            {{-- style="background-image: url({{ asset('/images/resumebg.png') }}); background-size: cover; " --}}

            <div class="section1 w-50% ">
                <hr  class="hr border-2 border-black">
                <h1 class="text-5xl font-bold">Aprish Tamang</h1>
                <hr class="hr border-2 border-black">
                <div class="details h-72 mt-5">
                  Hello, I'm Aprish Tamang, a forward-thinking Software Engineering student with a strong focus on Laravel
                    framework development. Currently pursuing a Bsc.Hons in Software Engineering at NAMI college affiliate
                    to University of Northamption, I bring a passion for crafting innovative and efficient web solutions.
                </div>
                <h3 class="text-3xl font-bold ">Skills</h3>
                <div class="grid grid-cols-2 mt-10 gap-8 ">
                    <div class="one bg-red-100 rounded-2xl text-center p-10">Laravel Framework</div>
                    <div class="two bg-orange-100 rounded-2xl text-center p-10">PHP, MySQL</div>
                    <div class="three bg-amber-100 rounded-2xl text-center p-10">HTML, CSS, JavaScript</div>
                    <div class="four bg-lime-100 rounded-2xl text-center p-10">Collaboration and Teamwork</div>
                </div>
                <h3 class="text-3xl font-bold mt-10">Awards</h3>
                <div class="grid mt-10 gap-8 grid-cols-2">
                    <div class="one bg-slate-300 rounded-2xl text-center p-5">Laravel Framework</div>
                    <div class="two bg-blue-300 rounded-2xl text-center p-5">PHP, MySQL</div>
                    <div class="three bg-cyan-300 rounded-2xl text-center p-5">HTML, CSS, JavaScript</div>
                    <div class="four bg-violet-400 rounded-2xl text-center p-5">Collaboration and Teamwork</div>
                </div>
                <div class="cert mt-10 ">
                    <h3 class="text-3xl font-bold">Certifications</h3>
                    <p class="cert mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate, esse ea ullam pariatur iusto
                        reiciendis quod corporis fugit ut, est dolorem eaque alias error sapiente impedit rerum quasi autem.
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam est quasi exercitationem tempore
                        nisi veritatis quidem distinctio cumque? Consequuntur, ea voluptatem maiores iure aut et architecto
                        molestiae odit optio officia?</p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit eaque delectus reiciendis cum, dolore autem similique ipsam sequi provident dolorem voluptate fugit tempore facere quam? Modi provident vel saepe sapiente.
                </div>
            </div>
            <div class="section2 w-50% ml-10 border-l-1 border-black border-dashed">
                
                <h3 class="text-3xl font-bold">Educations</h3>
                <h3 class="text-xl font-bold mt-5">Nami college</h3>

               <ul class="edu mt-5">
                <li>Bachelor of Science in Software Engineering.</li>
                <li>Expected Graduation: 2026.</li>
                <li>Relevant Coursework: List a few relevant courses, e.g., Web Development, Database Management, etc.</li>
             
               </ul>
                <h3 class="text-3xl font-bold mt-10">Work Experience</h3>
                <div class="lists  mt-5">
                    <h3 class="text-xl font-bold  mt-5">Laravel Developer- App Technology</h3>
                    <small>January 2024-Present</small>
                    <smalL>Description: As a Laravel Developer at App Technology, I play a key role in Front-End development.</smalL>
                    <ul class="work  mt-5">
                        <li> Spearheading the development and maintenance of dynamic web applications using Laravel framework.</li>
                        <li>Collaborating with cross-functional teams to analyze project requirements and deliver high-quality, scalable solutions.</li>
                        <li>Implementing robust and efficient backend processes, ensuring optimal performance and user experience.</li>
                        <li>Contributing to the full software development lifecycle, from concept to deployment.</li>
                        
                    </ul>
                </div>
            </div>
            </div>

        </div>
    </div>
@endsection
