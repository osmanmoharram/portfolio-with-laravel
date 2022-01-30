<!-- Slider main container -->
<div class="swiper lg:h-[400px]">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper h-fit">
        <!-- Slides -->
        @foreach ($images as $image)
            <div class="swiper-slide bg-center bg-cover rounded-[10px] border dark:border-none overflow-hidden">
                <img src="{{ $image }}" alt="" class="h-full">
            </div>
        @endforeach
    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
