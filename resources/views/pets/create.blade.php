@extends('layouts.app', ['title' => 'Create New Pet Information'])

@section('content')
<div class="w-full max-w-7xl mx-auto p-8">
    <h1 class="font-bold text-3xl">Pet Information</h1>
    <form href="{{ route('customer-pet.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-4 gap-6 lg:grid lg:grid-cols-2">
            <div>
                <label class="block text-xl font-medium text-black">
                    Your Pet Image
                </label>

                <div class="mt-2 flex justify-center px-6 py-32 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mt-2 mx-auto h-24 w-24 text-gray-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2491 2.00002L16.4346 2C16.9438 2 17.442 2.14135 17.8752 2.40794L20.6431 4.11125C20.8649 4.24775 21 4.48955 21 4.75V6.25C21 7.49264 19.9926 8.5 18.75 8.5H18.5V17.5469C19.497 17.6807 20.1945 18.1015 20.5946 18.8224C20.8179 19.2247 20.9126 19.6625 20.9569 20.0651C21.0001 20.4561 21 20.8643 21 21.2247V21.25C21 21.6642 20.6642 22 20.25 22H16.2508H5.83333C3.71624 22 2 20.2838 2 18.1667C2 16.7686 2.74891 15.5462 3.86385 14.8774C4.21907 14.6644 4.67975 14.7796 4.89281 15.1348C5.10587 15.49 4.99062 15.9507 4.63541 16.1638C3.95359 16.5727 3.5 17.3171 3.5 18.1667C3.5 19.4553 4.54467 20.5 5.83333 20.5C6.15188 20.5 6.34997 20.4168 6.48162 20.3242C6.62082 20.2262 6.72963 20.0859 6.81348 19.9168C6.89798 19.7464 6.94675 19.5671 6.97352 19.4243C6.98658 19.3546 6.99358 19.2981 6.9972 19.2617C6.99876 19.246 6.99967 19.2343 7.00015 19.2273L7.00059 19.1925C7.00115 19.1586 7.00224 19.1104 7.00436 19.0493C7.00859 18.9273 7.01695 18.7535 7.03348 18.5397C7.06646 18.1132 7.13235 17.5223 7.26464 16.8627C7.52372 15.5707 8.06051 13.8945 9.21612 12.7232C10.0641 11.8638 10.525 10.6045 10.7634 9.35923C10.9991 8.12815 11 7.00801 11 6.5V4.25002C11 3.00796 12.0059 2.00003 13.2491 2.00002ZM7.75 19.25C8.49958 19.275 8.49956 19.2757 8.49956 19.2757L8.49948 19.2781L8.49932 19.2819L8.49888 19.2919L8.49726 19.3205C8.4958 19.3433 8.49348 19.3735 8.48984 19.4101C8.48259 19.4831 8.46993 19.5829 8.44783 19.7007C8.40796 19.9134 8.33458 20.2001 8.19703 20.5H15.4473C15.3561 20.0064 15.1078 19.4939 14.4335 19.1799C14.4224 19.1748 14.4115 19.1694 14.4008 19.1637C14.3486 19.1363 14.1994 19.0871 13.9516 19.0479C13.7216 19.0116 13.4674 18.9931 13.25 18.9931C13.1964 18.9931 13.0783 18.9947 12.9672 18.9965L12.8256 18.9988L12.7665 18.9999L12.7655 18.9999C12.3513 19.0075 12.0095 18.6779 12.0019 18.2637C11.9943 17.8496 12.3239 17.5077 12.738 17.5001L12.7995 17.499L12.9435 17.4966C13.0511 17.4949 13.1822 17.4931 13.25 17.4931C13.4846 17.4931 13.7453 17.5086 14 17.5402V15.2528C14 14.8386 14.3358 14.5028 14.75 14.5028C15.1642 14.5028 15.5 14.8386 15.5 15.2528V18.0573C16.5648 18.7386 16.8739 19.7599 16.9635 20.5H19.4875C19.4825 20.407 19.4756 20.317 19.466 20.2294C19.4328 19.9286 19.3719 19.7103 19.2831 19.5504C19.153 19.3159 18.8498 19 17.75 19C17.3358 19 17 18.6642 17 18.25V7.75C17 7.33579 17.3358 7 17.75 7H18.75C19.1642 7 19.5 6.66421 19.5 6.25V5.16909L17.089 3.68543C16.8918 3.56405 16.6657 3.5 16.4346 3.5L13.2491 3.50002C12.8355 3.50002 12.5 3.83523 12.5 4.25002V6.48171C12.5128 6.71048 12.592 6.90709 12.7051 7.03567C12.8062 7.15046 12.9658 7.25 13.25 7.25C13.5368 7.25 13.7027 7.14866 13.8057 7.031C13.9206 6.89967 14 6.69587 14 6.45C14 6.03579 14.3358 5.7 14.75 5.7C15.1642 5.7 15.5 6.03579 15.5 6.45C15.5 7.00412 15.3227 7.57533 14.9343 8.01899C14.534 8.47634 13.9499 8.75 13.25 8.75C12.938 8.75 12.6513 8.69566 12.3945 8.59601C12.3568 8.92795 12.3058 9.27987 12.2366 9.64132C11.975 11.0074 11.4359 12.6092 10.2839 13.7768C9.43949 14.6326 8.97628 15.9563 8.73536 17.1576C8.61765 17.7446 8.55854 18.2736 8.52902 18.6554C8.5143 18.8458 8.50703 18.9982 8.50346 19.1013C8.50167 19.1529 8.5008 19.192 8.50039 19.2173L8.50004 19.2446L8.5 19.25C8.5 19.2582 8.49983 19.2675 8.49956 19.2757L7.75 19.25Z" fill="currentColor"/>
                        </svg>
                        <div class="flex text-xl text-gray-600">
                            <label for="image"
                                class="relative cursor-pointer bg-white rounded-md font-bold text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span class="">Upload a file</span>
                                <input name="image" type="file" id="image" required="true">
                            </label>
                            <p class="pl-1 text-black">or drag and drop</p>
                        </div>
                        <p class="text-md text-gray-400">
                            PNG, JPG, GIF up to 10MB
                        </p>
                    </div>
                </div>
            </div>

            <div class=" mx-5 my-10">ขอความกรุณาเจ้าของสัตว์เลี้ยงช่วยกรอกข้อมูลของน้องๆเบื้องต้นเพื่อบันทึกข้้อมูลการรักษาลงในระบบสำหรับให้บุคลากรทางการแพทย์ได้วินิจฉัยและตรวจสอบโรคและอาการของน้องสัตว์ก่อนพบตรวจจริงด้วยนะครับ ขอบคุณครับ</div>

            <div>
                <label class="text-black dark:text-gray-200" for="name">Pet name</label>
                <input id="name" type="text" name="name"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-black dark:text-gray-200" for="date_of_birth">Date Of Birth</label>
                <input id="date_of_birth" type="date" name="date_of_birth"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            {{-- <div>
                <label class="text-black dark:text-gray-200" for="passwordConfirmation">Select Gender</label>
                <select
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div> --}}

            <div>
                <label class="text-black dark:text-gray-200" for="passwordConfirmation">Approximate Weight (Kg.)</label>
                <input id="weight" name="weight"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-black dark:text-gray-200" for="petType">Select Animal Type</label>
                <select name="pet_type_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            
            <div>
                <label class="text-black dark:text-gray-200" for="breed">Select Animal Breed</label>
                <select name="breed_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <div class="col-span-2">
                <label class="text-black dark:text-gray-200" for="allergen">Allergen</label>
                <input name="allergen" type="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="col-span-2">
                <label class="text-black dark:text-gray-200" for="note">Note</label>
                <textarea name="note" type="textarea"
                    class="block w-full px-4 h-36 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
        </div>

        <div class="flex justify-end mt-6 space-x-3">
            <a href="{{ route('customer-pet') }}" class="text-center bg-zinc-200 px-4 py-2 rounded">
                Cancel
            </a>
            <button type="submit"
                class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-purple-500 rounded-md hover:bg-purple-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</div>
@endsection
