<div class="flex flex-row flex-wrap justify-center items-center mb-5 mr-3 lg:mb-0"> 
    <span  class=" flex text-dark font-semibold text-2xl justify-center">Page / &nbsp;</span> 
    <span {{ $attributes->merge(['class' => 'pt-1 text-secondary-dark text-[0.95rem] font-regular'] )}}>
         {{ $slot }} 
    </span> 
</div>