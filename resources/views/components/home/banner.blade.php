<section id="banner">
    <div class="swiper bannerSwiper tw-h-[1022px]">
        <div class="swiper-wrapper">
            @for ($i = 0; $i < 3; $i++)
                <div class="swiper-slide tw-flex tw-items-center"
                    style="background-image: url({{ asset('assets/slider1.png') }});">
                    <div class="tw-container tw-mx-auto tw-text-end">
                        <div class="tw-ml-auto tw-w-1/2 tw-text-center">
                            <p class="tw-leading-40px tw-text-26px tw-font-semibold tw-uppercase tw-text-gray2">
                                Online medical supplies
                            </p>
                            <p
                                class="tw-mt-[26px] tw-text-96px tw-font-semibold tw-leading-[104px] tw-tracking-[-1.44px] tw-text-gray2">
                                Get Your Vitamins & Minerals
                            </p>
                            <a href=""
                                class="tw-leading-24px tw-mt-26px tw-inline-block tw-rounded-full tw-bg-blue1 tw-px-32px tw-py-16px tw-text-base tw-font-semibold tw-text-white">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="swiper-pagination !tw-bottom-60px"></div>
    </div>
</section>

@pushonce('module-script')
    <script>
        var bannerSwiper = new Swiper(".bannerSwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
@endpushonce
