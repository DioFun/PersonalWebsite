@extends('layouts.public')

@section('title', "About")

@section('content')
    <main class="mx-auto w-5/6 my-10 flex-grow flex xl:place-content-center">
            
        <div class="block lg:grid lg:grid-cols-4 lg:gap-6 w-full xl:w-3/4">
            <div class="lg:col-span-3">
                <div id="experiences">
                    <div class="text-3xl small-caps w-full text-center lg:text-left font-semibold">Experiences</div>
                    <hr class="bg-primary-light dark:bg-primary-dark">
                    <div class="w-full h-auto text-center md:h-48 flex-col md:flex-row flex bg-primary-light dark:bg-primary-dark my-6 rounded-xl overflow-hidden content-center p-6 md:px-6 md:py-0 md:text-left text-white">
                        <div class="md:shrink-0 flex md:block place-content-center mb-2 md:mb-0">
                            <img class="h-1/4 md:h-auto md:w-48 md:mt-[50%] md:-translate-y-1/2" src="https://www.orano.group/images/default-source/default-album/system/orano-logo-black45ba6dfee0744a7192abfcba9b8bf3cc.png?sfvrsn=68f19995_2&MaxWidth=150&MaxHeight=150&ScaleUp=false&Quality=High&Method=ResizeFitToAreaArguments&Signature=F9C289F25A9068F04BEECA58EECF42608AAAAC77" alt="Orano Logo">
                        </div>
                        <div class="md:ml-8 flex flex-col place-content-center">
                            <h1 class="text-2xl font-semibold">Job Title Example</h1>
                            <div class="text-red-800 font-semibold mb-2">January 2022 - Decembre 2023</div>
                            <p class="text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, dolores aliquam velit dolore expedita odio! Autem id non illum nihil explicabo cupiditate tempore harum quos ratione dicta. Facilis, facere a.</p>
                        </div>
                    </div>
                </div>
                <div id="studies" class="">
                    <div class="text-3xl small-caps w-full text-center lg:text-left font-semibold">Studies</div>
                    <hr class="bg-primary-light dark:bg-primary-dark">
                    <div class="w-full h-auto text-center md:h-48 flex-col md:flex-row flex bg-primary-light dark:bg-primary-dark my-6 rounded-xl overflow-hidden content-center p-6 md:px-6 md:py-0 md:text-left text-white">
                        <div class="md:shrink-0 flex md:block place-content-center mb-2 md:mb-0">
                            <img class="h-1/4 md:h-auto md:w-48 md:mt-[50%] md:-translate-y-1/2" src="https://www.orano.group/images/default-source/default-album/system/orano-logo-black45ba6dfee0744a7192abfcba9b8bf3cc.png?sfvrsn=68f19995_2&MaxWidth=150&MaxHeight=150&ScaleUp=false&Quality=High&Method=ResizeFitToAreaArguments&Signature=F9C289F25A9068F04BEECA58EECF42608AAAAC77" alt="Orano Logo">
                        </div>
                        <div class="md:ml-8 flex flex-col place-content-center">
                            <h1 class="text-2xl font-semibold">School Name Example</h1>
                            <div class="text-red-800 font-semibold mb-2">January 2022 - Decembre 2023</div>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, dolores aliquam velit dolore expedita odio! Autem id non illum nihil explicabo cupiditate tempore harum quos ratione dicta. Facilis, facere a.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1">
                <div id="certificates">
                    <div class="text-3xl small-caps w-full text-center lg:text-left font-semibold">Certificates</div>
                    <hr class="bg-primary-light dark:bg-primary-dark">
                    <div class="w-full h-auto text-center md:h-auto flex-col flex bg-primary-light dark:bg-primary-dark my-6 rounded-xl overflow-hidden content-center p-6 text-white">
                        <div class="flex flex-col place-content-center">
                            <h1 class="text-2xl font-semibold">Baccalauréat</h1>
                            <div class="text-red-800 font-semibold mb-2">2021</div>
                            <p class="">Mathematics & Physics<br>European section</p>
                        </div>
                    </div>
                    <div class="w-full h-auto text-center md:h-auto flex-col flex bg-primary-light dark:bg-primary-dark my-6 rounded-xl overflow-hidden content-center p-6 text-white">
                        <div class="md:shrink-0 flex place-content-center mb-2">
                            <img class="h-24 max-h-48" src="https://img.search.brave.com/zewzpjJM3s8HPEL5jWShOHf_SFmbiylCs9xX9jbo3UM/rs:fit:1040:809:1/g:ce/aHR0cHM6Ly93d3cu/YnNpZ3JvdXAuY29t/L0xvY2FsRmlsZXMv/ZW4tR0Ivb3VyLXNl/cnZpY2VzL3RyYWlu/aW5nLWNvdXJzZXMv/aW5mb3JtYXRpb24t/c2VjdXJpdHkvQ0VI/LnBuZw" alt="">
                        </div>
                        <div class="flex flex-col place-content-center">
                            <h1 class="text-2xl font-semibold">Diploma Test Name</h1>
                            <div class="text-red-800 font-semibold mb-2">2021</div>
                            <p class="">Short description of the diploma</p>
                        </div>
                    </div>
                </div>
                <div id="languages">
                    <div class="text-3xl small-caps w-full text-center lg:text-left font-semibold">Languages</div>
                    <hr class="bg-primary-light dark:bg-primary-dark">
                    <div class="w-full h-auto text-center md:h-auto flex-col flex bg-primary-light dark:bg-primary-dark my-6 rounded-xl overflow-hidden content-center p-4 text-white">
                        <h1 class="text-2xl font-semibold mb-2">English</h1>
                        <div class="w-full h-4 border-solid border border-white">
                            <div class="h-full w-4/5 bg-white"><div class="sr-only">80%</div></div>
                        </div>
                    </div>
                </div>
                <div id="skills">
                    <div class="text-3xl small-caps w-full text-center lg:text-left font-semibold">Skills</div>
                    <hr class="bg-primary-light dark:bg-primary-dark">
                </div>
            </div>
        </div>

    </main>
@endsection