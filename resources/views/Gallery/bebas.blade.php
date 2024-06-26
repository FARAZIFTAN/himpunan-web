@extends('Partials.layout')
@section('title', 'Gallery')
@section('content')

    <main class="pt-10">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Gallery</h1>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://source.unsplash.com/random/600x360">
                            <div
                                class="px-8 py-20 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Tanggal</h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Deskripsi</h1>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://source.unsplash.com/random/602x362">
                            <div
                                class="px-8 py-20 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">2020-2023
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">(nama ketua)</h1>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://source.unsplash.com/random/605x365">
                            <div
                                class="px-8 py-20 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">2020-2023
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">(nama ketua)</h1>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://source.unsplash.com/random/606x366">
                            <div
                                class="px-8 py-20 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">2020-2023
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">(nama ketua)</h1>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
