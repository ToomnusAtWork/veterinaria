@extends('layouts.app', ['title' => 'User Profile'])

@section('content')
    {{-- <div class="flex-auto block py-9 px-9 md:ml-[300px]">
        <form action="#" method="post" class="group/form">
            <div class="flex flex-col mb-3">
                <h1 class="font-semibold text-3xl text-dark font-display">My Profile</h1>
                <div class="flex flex-row">
                    <p class="text-lg text-gray-800 dark:text-gray-100 font-semibold">Personal Information</p>
                    <div class="ml-2 my-2 justify-center align-center cursor-pointer text-gray-600 dark:text-gray-400">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg" alt="info">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                    </div>
                </div>
                <span class="text-lg font-medium text-muted block"> Feel free to reach out to us with any questions or inquiries. We'll be happy to assist you! </span>
            </div>
            <div class="mx-auto flex flex-col mb-10">
                <div class="rounded relative my-5  h-48">
                    <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form1.jpg" alt=""
                        class="w-full h-full object-cover rounded absolute shadow" />
                    <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded"></div>
                    <div class="flex items-center px-3 py-2 rounded absolute right-0 mr-4 mt-4 cursor-pointer">
                        <p class="text-xs text-gray-100">Change Cover Photo</p>
                        <div class="ml-2 text-gray-100">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg" alt="Edit">
                        </div>
                    </div>
                    <div
                        class="w-28 h-28 rounded-full bg-cover bg-center bg-no-repeat absolute bottom-0 -mb-10 ml-12 shadow flex items-center justify-center">
                        <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form2.jpg" alt=""
                            class="absolute z-0 h-full w-full object-cover rounded-full shadow top-0 left-0 bottom-0 right-0" />
                        <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded-full z-0"></div>
                        <div class="cursor-pointer flex flex-col justify-center items-center z-10 text-gray-100">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg" alt="Edit">
                            <p class="text-xs text-gray-100">Edit Picture</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-5 -mx-3">
                <div class="w-1/2 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="FirstName"> First Name
                    </label>
                    <input type="text" name="Name" id="Name" value=""
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your full name" required="">
                </div>
                <div class="w-1/2 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="LastName"> LastName </label>
                    <input type="email" name="Email" id="Email"
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your email address" required="">
                </div>
            </div>
            <div class="w-full mb-5">
                <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="Email"> Email Address </label>
                <input type="email" name="Email" id="Email"
                    class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                    placeholder="Enter your email address" required="">
            </div>
            <div class="w-full mb-5">
                <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="Subject"> Phone No. </label>
                <input type="text" name="Subject" id="Subject"
                    class="w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                    placeholder="Enter the subject">
            </div>
            <div class="flex flex-wrap mb-5 -mx-3">
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="FirstName"> Address 1
                        (บ้านเลขที่) </label>
                    <input type="text" name="Name" id="Name" value=""
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your full name" required="">
                </div>
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="LastName"> Address 2 </label>
                    <input type="email" name="Email" id="Email"
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your email address" required="">
                </div>
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="FirstName"> Alley (ซอย)
                    </label>
                    <input type="text" name="Name" id="Name" value=""
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your full name" required="">
                </div>
            </div>
            <div class="flex flex-wrap mb-5 -mx-3">
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="FirstName"> Avenue (ถนน)
                    </label>
                    <input type="text" name="Name" id="Name" value=""
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your full name" required="">
                </div>
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="LastName"> Sub-district
                        (ตำบล) </label>
                    <input type="email" name="Email" id="Email"
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your email address" required="">
                </div>
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="FirstName"> District
                        (อำเภอ) </label>
                    <input type="text" name="Name" id="Name" value=""
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your full name" required="">
                </div>
            </div>
            <div class="flex flex-wrap mb-5 -mx-3">
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="LastName"> State / Province
                    </label>
                    <input type="email" name="Email" id="Email"
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your email address" required="">
                </div>
                <div class="w-1/3 px-3">
                    <label class="inline-block mb-2 text-[1.15rem] font-medium text-dark" for="FirstName"> Zip / Postal
                        Code
                    </label>
                    <input type="text" name="Name" id="Name" value=""
                        class="peer w-full px-4 py-3 text-base/normal rounded-xl font-medium block transition-colors duration-200 ease-in-out bg-secondary-light focus:bg-secondary/40 text-stone-500 border focus:outline-none"
                        placeholder="Enter your full name" required="">
                </div>
            </div>
            <div class="text-end px-5">
                <button
                    class="inline-block mx-5 text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-xl transition-colors duration-150 ease-in-out text-white bg-gray-400 shadow-none border-0 px-5 py-4 hover:bg-dark-dark active:bg-dark-dark focus:bg-dark-dark ms-auto">Cancel</button>
                <button
                    class="inline-block text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-xl transition-colors duration-150 ease-in-out text-white bg-blue-500 shadow-none border-0 px-5 py-4 hover:bg-dark-dark active:bg-dark-dark focus:bg-dark-dark ms-auto"
                    type="submit">Save</button>
            </div>
        </form>
    </div> --}}

    <div class="flex-auto max-w-7xl block py-9 px-9 md:ml-[300px]">
        <form action="#" method="post" class="group/form">
            <div class="flex flex-col mb-5">
                <a href="{{ route('profile.show') }}">
                    <h1 class="font-semibold text-3xl text-dark font-display">My Profile</h1>
                </a>
                {{-- <span class="text-lg font-medium text-muted block"> Feel free to reach out to us with any questions or inquiries. We'll be happy to assist you! </span> --}}
            </div>
            <div class="border-black border mx-auto  rounded-lg my-5">
                <div class="flex items-center gap-4 py-10 mx-10">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
                        class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform" />
                    <div class="ml-8 w-full flex justify-between duration-500">
                        <div>
                            <h1 class="text-gray-600 dark:text-gray-200 font-bold text-3xl">Mary Phiri
                            </h1>
                            <p class="text-gray-400">Senior Developer</p>
                            <p class="text-xs text-gray-500 dark:text-gray-200">mary@gmail.com</p>
                        </div>
                        <div> 
                            <button
                                class="flex p-2 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="md:flex mx-1 hidden">Edit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-black border mx-auto rounded-lg my-5">
                <div class="mx-5">
                    <div class="px-4 sm:px-0 flex justify-between">
                        <div class="my-5">
                            <div class="flex flex-row">
                                <p class="text-xl text-gray-800 dark:text-gray-100 font-semibold">Personal Information</p>
                                <div
                                    class="ml-2 my-2 justify-center align-center cursor-pointer text-gray-600 dark:text-gray-400">
                                    <img class="dark:hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                                        alt="info">
                                    <img class="dark:block hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg"
                                        alt="info">
                                </div>
                            </div>
                            <p class="max-w-2xl text-md leading-6 text-gray-500">Personal details and application.</p>
                        </div>
                        <div class="my-5">
                            <button
                                class="flex p-2 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="md:flex mx-1 hidden">Edit</span>
                            </button>
                        </div>
                    </div>
                    <div class="mt-3 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Full name</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Margot Foster</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Email address</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    margotfoster@example.com</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Phone</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">091-2345678</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Identification Number</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">123XXXXXXXXXXX</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="border border-black mx-auto rounded-lg">
                <div class="mx-5">
                    <div class="px-4 sm:px-0 my-5">
                        <h3 class="font-semibold leading-7 text-lg text-gray-900">Address</h3>
                        <p class="mt-1 max-w-2xl text-lg leading-6 text-gray-500">Personal details and application.</p>
                    </div>

                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Address 1</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Margot Foster</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Address 2</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    margotfoster@example.com</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">City</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">091-2345678</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">District</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">123XXXXXXXXXXX</dd>
                            </div>
                            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-lg font-medium leading-6 text-gray-900">Province</dt>
                                <dd class="mt-1 text-lg leading-6 text-gray-700 sm:col-span-2 sm:mt-0">123XXXXXXXXXXX</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
