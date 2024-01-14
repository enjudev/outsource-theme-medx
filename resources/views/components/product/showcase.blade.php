<section class="tw-py-50px lg:tw-py-100px">
    <div class="tw-container tw-mx-auto tw-grid tw-grid-cols-1 tw-gap-30px tw-px-15px lg:tw-grid-cols-2 lg:tw-px-0">
        <div>
            <div class="swiper mainProductSwiper">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 8; $i++)
                        <div
                            class="swiper-slide tw-relative tw-aspect-square tw-w-full tw-overflow-hidden tw-rounded-15px">
                            <img class="tw-h-full tw-w-full tw-object-cover"
                                src="{{ asset('assets/mainProduct.png') }}" />
                            <div
                                class="tw-absolute tw-left-30px tw-top-30px tw-z-10 tw-rounded-10px tw-bg-orange1 tw-p-16px">
                                <p class="tw-leadng-32px tw-text-24px tw-font-semibold tw-text-white">-15%</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div thumbsSlider="" class="swiper thumbSwiper tw-mt-40px">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 8; $i++)
                        <div
                            class="swiper-slide tw-relative tw-aspect-square tw-w-full tw-overflow-hidden tw-rounded-15px">
                            <img class="tw-h-full tw-w-full tw-object-cover"
                                src="{{ asset('assets/mainProduct.png') }}" />
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="tw-flex tw-flex-col tw-gap-20px">
            <p class="tw-text-26px tw-font-medium tw-leading-44px tw-text-gray2">Lauder Idealist Pore Minimizing
                Skin</p>
            <div class="tw-flex tw-gap-19px" style="gap:19px">
                <div class="tw-flex tw-items-center tw-justify-center tw-gap-4px">
                    @for ($i = 0; $i < 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path
                                d="M6.08155 1.13274C6.42863 0.326777 7.57137 0.326779 7.91845 1.13274L8.92819 3.47746C9.07296 3.81363 9.38984 4.04385 9.7543 4.07765L12.2963 4.31342C13.17 4.39446 13.5232 5.48127 12.8639 6.06042L10.946 7.74529C10.671 7.98686 10.55 8.35937 10.6304 8.71644L11.1917 11.2069C11.3847 12.0629 10.4602 12.7346 9.70564 12.2866L7.51056 10.9832C7.19584 10.7963 6.80416 10.7963 6.48944 10.9832L4.29436 12.2866C3.53983 12.7346 2.61533 12.0629 2.80827 11.2069L3.36956 8.71644C3.45004 8.35937 3.329 7.98686 3.05402 7.74529L1.13609 6.06042C0.476825 5.48127 0.829953 4.39446 1.70372 4.31342L4.24571 4.07765C4.61016 4.04385 4.92704 3.81363 5.07181 3.47746L6.08155 1.13274Z"
                                fill="#FFCC00" />
                        </svg>
                    @endfor
                </div>
                <p class="tw-text-base tw-leading-24px tw-text-gray1"><span class="tw-font-medium">3</span> Customer
                    reviews</p>
                <p class="tw-text-base tw-leading-24px tw-text-gray1">|</p>
                <p class="tw-text-base tw-leading-24px tw-text-gray1">Sold:<span class="tw-font-medium">32</span></p>
            </div>
            <p class="tw-text-base tw-leading-24px tw-text-gray3">consectetuer adipiscing elit, sed diam
                nonummy nibh
                euismod tincidunt
                ut laoreet
                dolore magna aliquam
                erat volutpat. Ut wisi enim ad minim</p>
            <ul class="tw-list-inside tw-list-disc">
                <li class="tw-text-base tw-leading-24px tw-text-gray3">DPI Selection: 2600/2000/1600/1200/800</li>
                <li class="tw-text-base tw-leading-24px tw-text-gray3">Touch Screen Running Windows</li>
                <li class="tw-text-base tw-leading-24px tw-text-gray3">Battery Indicator Light</li>
                <li class="tw-text-base tw-leading-24px tw-text-gray3">Connects Directly To The Suspension</li>
            </ul>
            <div class="tw-flex tw-gap-10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path
                        d="M12.0039 24C18.6313 24 24.0039 18.6274 24.0039 12C24.0039 5.37258 18.6313 0 12.0039 0C5.37649 0 0.00390625 5.37258 0.00390625 12C0.00390625 18.6274 5.37649 24 12.0039 24Z"
                        fill="url(#paint0_radial_491_5658)" />
                    <path
                        d="M16.4483 20.0148C16.3051 19.8079 16.2498 19.5528 16.2943 19.3051C16.3389 19.0575 16.4798 18.8376 16.6861 18.6936C17.0334 18.4524 17.3647 18.189 17.6779 17.905C17.7681 17.8103 17.8769 17.7352 17.9974 17.6844C18.118 17.6336 18.2477 17.6082 18.3785 17.6098C18.5094 17.6114 18.6384 17.64 18.7577 17.6938C18.877 17.7475 18.9839 17.8253 19.0717 17.9223C19.1595 18.0192 19.2264 18.1333 19.2682 18.2572C19.3099 18.3812 19.3257 18.5125 19.3144 18.6428C19.3031 18.7732 19.2651 18.8998 19.2026 19.0147C19.1402 19.1297 19.0547 19.2306 18.9516 19.311C18.5779 19.65 18.1828 19.9645 17.7687 20.2526C17.5618 20.3955 17.3069 20.4507 17.0594 20.4062C16.812 20.3616 16.5923 20.2209 16.4483 20.0148Z"
                        fill="white" fill-opacity="0.3" />
                    <path
                        d="M19.9053 16.7118C19.6775 16.6052 19.5013 16.4127 19.415 16.1765C19.3288 15.9402 19.3397 15.6794 19.4453 15.4511C19.7222 14.8513 19.9254 14.2201 20.0506 13.5713C20.113 13.3387 20.2613 13.1383 20.4657 13.0108C20.6701 12.8833 20.9153 12.8381 21.1517 12.8843C21.3881 12.9305 21.5982 13.0647 21.7395 13.2598C21.8808 13.4549 21.9429 13.6963 21.9131 13.9354C21.7573 14.7348 21.505 15.5124 21.1617 16.251C21.0552 16.4778 20.8635 16.6534 20.6282 16.7397C20.393 16.826 20.1332 16.816 19.9053 16.7118Z"
                        fill="white" fill-opacity="0.3" />
                    <path
                        d="M8.0772 16.9928L4.5666 12.9747C4.31813 12.6904 4.19275 12.3191 4.21805 11.9424C4.23057 11.7559 4.27971 11.5737 4.36266 11.4061C4.44561 11.2386 4.56075 11.0891 4.70149 10.966C4.84224 10.843 5.00584 10.7489 5.18296 10.6891C5.36007 10.6293 5.54723 10.6049 5.73375 10.6175C6.11045 10.6428 6.46167 10.8167 6.71014 11.1009L9.28169 14.0408L17.4296 6.87178C17.5696 6.7464 17.733 6.64999 17.9104 6.58812C18.0879 6.52624 18.2759 6.50012 18.4635 6.51126C18.6511 6.52241 18.8346 6.5706 19.0035 6.65305C19.1724 6.7355 19.3232 6.85058 19.4474 6.99165C19.5716 7.13272 19.6666 7.29698 19.7269 7.47496C19.7873 7.65294 19.8118 7.84111 19.799 8.0286C19.7863 8.2161 19.7365 8.39922 19.6526 8.56739C19.5687 8.73556 19.4524 8.88544 19.3102 9.0084L10.0902 17.1251C9.94939 17.2488 9.78561 17.3435 9.6082 17.4038C9.43078 17.4641 9.24322 17.4888 9.05624 17.4765C8.86927 17.4642 8.68655 17.4152 8.51855 17.3322C8.35056 17.2492 8.20057 17.1339 8.0772 16.9928Z"
                        fill="white" />
                    <defs>
                        <radialGradient id="paint0_radial_491_5658" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse" gradientTransform="translate(12.005 11.9971) scale(12.001)">
                            <stop offset="0.02" stop-color="#8CEABD" />
                            <stop offset="1" stop-color="#06C270" />
                        </radialGradient>
                    </defs>
                </svg>
                <p class="tw-text-base tw-font-medium tw-leading-24px tw-text-green1">In Stock</p>
            </div>
            <div>
                <p class="tw-text-base tw-leading-24px tw-text-gray3">Hurry! Only <span
                        class="tw-font-medium tw-text-red-500">21</span>
                    left in Stock</p>
                <div
                    class="tw-relative tw-mt-6px tw-h-10px tw-w-full tw-overflow-hidden tw-rounded-40px tw-bg-[#F0F0F0]">
                    <div class="tw-absolute tw-h-full tw-w-[60%] tw-rounded-40px tw-bg-orange1"></div>
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap tw-items-start tw-gap-16px">
                <p class="tw-gray-1 tw- tw-text-base tw-font-semibold tw-leading-24px">Classification</p>
                <p
                    class="tw-rounded-5px tw-border-1px tw-border-orange1 tw-px-8px tw-py-3px tw-text-base tw-font-medium tw-text-orange1">
                    300 pills</p>
                <p
                    class="tw-rounded-5px tw-border-1px tw-border-gray5 tw-px-8px tw-py-3px tw-text-base tw-font-medium tw-text-gray5 tw-shadow-md">
                    600 pills</p>
                <p
                    class="tw-rounded-5px tw-border-1px tw-border-gray5 tw-px-8px tw-py-3px tw-text-base tw-font-medium tw-text-gray5 tw-shadow-md">
                    1000 pills</p>
            </div>
            <div class="tw-flex tw-items-center">
                <p class="tw-text-26px tw-font-semibold tw-leading-36px tw-text-blue1">$28.76</p>
                <p class="tw-ml-4px tw-text-base tw-leading-24px tw-text-gray3 tw-line-through">$34.99</p>
                <p class="tw-mx-12px tw-text-gray3">|</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                    fill="none">
                    <path
                        d="M19.5044 13.0625C19.6502 13.0625 19.7648 13.1081 19.8481 13.1992C19.9523 13.2721 20.0044 13.3724 20.0044 13.5V13.9375C20.0044 14.0651 19.9523 14.1745 19.8481 14.2656C19.7648 14.3385 19.6502 14.375 19.5044 14.375H18.0044C18.0044 15.1042 17.7127 15.724 17.1294 16.2344C16.5461 16.7448 15.8377 17 15.0044 17C14.1711 17 13.4627 16.7448 12.8794 16.2344C12.2961 15.724 12.0044 15.1042 12.0044 14.375H8.00439C8.00439 15.1042 7.71273 15.724 7.12939 16.2344C6.54606 16.7448 5.83773 17 5.00439 17C4.17106 17 3.46273 16.7448 2.87939 16.2344C2.29606 15.724 2.00439 15.1042 2.00439 14.375H1.75439C1.27523 14.375 0.858561 14.2292 0.504395 13.9375C0.171061 13.6276 0.00439453 13.263 0.00439453 12.8438V4.53125C0.00439453 4.11198 0.171061 3.75651 0.504395 3.46484C0.858561 3.15495 1.27523 3 1.75439 3H11.2544C11.7336 3 12.1398 3.15495 12.4731 3.46484C12.8273 3.75651 13.0044 4.11198 13.0044 4.53125V5.625H14.1294C14.7544 5.625 15.2856 5.81641 15.7231 6.19922L18.3481 8.49609C18.7856 8.87891 19.0044 9.34375 19.0044 9.89062V13.0625H19.5044ZM3.94189 15.3047C4.23356 15.5599 4.58773 15.6875 5.00439 15.6875C5.42106 15.6875 5.77523 15.5599 6.06689 15.3047C6.35856 15.0495 6.50439 14.7396 6.50439 14.375C6.50439 14.0104 6.35856 13.7005 6.06689 13.4453C5.77523 13.1901 5.42106 13.0625 5.00439 13.0625C4.58773 13.0625 4.23356 13.1901 3.94189 13.4453C3.65023 13.7005 3.50439 14.0104 3.50439 14.375C3.50439 14.7396 3.65023 15.0495 3.94189 15.3047ZM11.5044 13.0625V4.53125C11.5044 4.38542 11.4211 4.3125 11.2544 4.3125H1.75439C1.58773 4.3125 1.50439 4.38542 1.50439 4.53125V12.8438C1.50439 12.9896 1.58773 13.0625 1.75439 13.0625H2.41064C2.68148 12.6615 3.04606 12.3424 3.50439 12.1055C3.96273 11.8685 4.46273 11.75 5.00439 11.75C5.54606 11.75 6.04606 11.8685 6.50439 12.1055C6.96273 12.3424 7.32731 12.6615 7.59814 13.0625H11.5044ZM13.0044 6.9375V9.125H16.9419L14.6606 7.12891C14.5148 7.0013 14.3377 6.9375 14.1294 6.9375H13.0044ZM13.9419 15.3047C14.2336 15.5599 14.5877 15.6875 15.0044 15.6875C15.4211 15.6875 15.7752 15.5599 16.0669 15.3047C16.3586 15.0495 16.5044 14.7396 16.5044 14.375C16.5044 14.0104 16.3586 13.7005 16.0669 13.4453C15.7752 13.1901 15.4211 13.0625 15.0044 13.0625C14.5877 13.0625 14.2336 13.1901 13.9419 13.4453C13.6502 13.7005 13.5044 14.0104 13.5044 14.375C13.5044 14.7396 13.6502 15.0495 13.9419 15.3047ZM17.5044 12.9258V10.4375H13.0044V12.4336C13.5877 11.9779 14.2544 11.75 15.0044 11.75C16.0669 11.75 16.9002 12.1419 17.5044 12.9258Z"
                        fill="#80B4FF" />
                    <path
                        d="M19.5044 13.0625C19.6502 13.0625 19.7648 13.1081 19.8481 13.1992C19.9523 13.2721 20.0044 13.3724 20.0044 13.5V13.9375C20.0044 14.0651 19.9523 14.1745 19.8481 14.2656C19.7648 14.3385 19.6502 14.375 19.5044 14.375H18.0044C18.0044 15.1042 17.7127 15.724 17.1294 16.2344C16.5461 16.7448 15.8377 17 15.0044 17C14.1711 17 13.4627 16.7448 12.8794 16.2344C12.2961 15.724 12.0044 15.1042 12.0044 14.375H8.00439C8.00439 15.1042 7.71273 15.724 7.12939 16.2344C6.54606 16.7448 5.83773 17 5.00439 17C4.17106 17 3.46273 16.7448 2.87939 16.2344C2.29606 15.724 2.00439 15.1042 2.00439 14.375H1.75439C1.27523 14.375 0.858561 14.2292 0.504395 13.9375C0.171061 13.6276 0.00439453 13.263 0.00439453 12.8438V4.53125C0.00439453 4.11198 0.171061 3.75651 0.504395 3.46484C0.858561 3.15495 1.27523 3 1.75439 3H11.2544C11.7336 3 12.1398 3.15495 12.4731 3.46484C12.8273 3.75651 13.0044 4.11198 13.0044 4.53125V5.625H14.1294C14.7544 5.625 15.2856 5.81641 15.7231 6.19922L18.3481 8.49609C18.7856 8.87891 19.0044 9.34375 19.0044 9.89062V13.0625H19.5044ZM3.94189 15.3047C4.23356 15.5599 4.58773 15.6875 5.00439 15.6875C5.42106 15.6875 5.77523 15.5599 6.06689 15.3047C6.35856 15.0495 6.50439 14.7396 6.50439 14.375C6.50439 14.0104 6.35856 13.7005 6.06689 13.4453C5.77523 13.1901 5.42106 13.0625 5.00439 13.0625C4.58773 13.0625 4.23356 13.1901 3.94189 13.4453C3.65023 13.7005 3.50439 14.0104 3.50439 14.375C3.50439 14.7396 3.65023 15.0495 3.94189 15.3047ZM11.5044 13.0625V4.53125C11.5044 4.38542 11.4211 4.3125 11.2544 4.3125H1.75439C1.58773 4.3125 1.50439 4.38542 1.50439 4.53125V12.8438C1.50439 12.9896 1.58773 13.0625 1.75439 13.0625H2.41064C2.68148 12.6615 3.04606 12.3424 3.50439 12.1055C3.96273 11.8685 4.46273 11.75 5.00439 11.75C5.54606 11.75 6.04606 11.8685 6.50439 12.1055C6.96273 12.3424 7.32731 12.6615 7.59814 13.0625H11.5044ZM13.0044 6.9375V9.125H16.9419L14.6606 7.12891C14.5148 7.0013 14.3377 6.9375 14.1294 6.9375H13.0044ZM13.9419 15.3047C14.2336 15.5599 14.5877 15.6875 15.0044 15.6875C15.4211 15.6875 15.7752 15.5599 16.0669 15.3047C16.3586 15.0495 16.5044 14.7396 16.5044 14.375C16.5044 14.0104 16.3586 13.7005 16.0669 13.4453C15.7752 13.1901 15.4211 13.0625 15.0044 13.0625C14.5877 13.0625 14.2336 13.1901 13.9419 13.4453C13.6502 13.7005 13.5044 14.0104 13.5044 14.375C13.5044 14.7396 13.6502 15.0495 13.9419 15.3047ZM17.5044 12.9258V10.4375H13.0044V12.4336C13.5877 11.9779 14.2544 11.75 15.0044 11.75C16.0669 11.75 16.9002 12.1419 17.5044 12.9258Z"
                        fill="black" fill-opacity="0.5" />
                </svg>
                <p class="tw-ml-8px tw-font-medium tw-text-blue2">Free delivery from $45</p>
            </div>
            <div class="tw-flex tw-flex-wrap tw-gap-20px">
                <div
                    class="tw-flex tw-items-center tw-gap-28px tw-rounded-100px tw-border-1px tw-border-gray5 tw-px-20px tw-py-14px">
                    <div class="tw-px-4px tw-py-8px"><svg xmlns="http://www.w3.org/2000/svg" width="10"
                            height="2" viewBox="0 0 10 2" fill="none">
                            <path
                                d="M9.79167 0C9.93056 0 10 0.111111 10 0.333333V1.66667C10 1.88889 9.93056 2 9.79167 2H0.208333C0.0694444 2 0 1.88889 0 1.66667V0.333333C0 0.111111 0.0694444 0 0.208333 0H9.79167Z"
                                fill="#727272" />
                        </svg>
                    </div>
                    <p>1</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                                d="M9.79167 4C9.93056 4 10 4.11111 10 4.33333V5.66667C10 5.88889 9.93056 6 9.79167 6H0.208333C0.0694444 6 0 5.88889 0 5.66667V4.33333C0 4.11111 0.0694444 4 0.208333 4H9.79167Z"
                                fill="#454545" />
                            <path
                                d="M6 9.79167C6 9.93056 5.88889 10 5.66667 10H4.33333C4.11111 10 4 9.93056 4 9.79167L4 0.208333C4 0.0694444 4.11111 -9.71341e-09 4.33333 0L5.66667 5.8282e-08C5.88889 6.79956e-08 6 0.0694445 6 0.208333L6 9.79167Z"
                                fill="#454545" />
                        </svg>
                    </div>
                </div>
                <div class="tw-flex tw-items-center tw-gap-4px tw-rounded-full tw-bg-blue1 tw-px-32px tw-py-16px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M5.125 17.1499C6.02246 17.1499 6.75 16.4224 6.75 15.5249C6.75 14.6274 6.02246 13.8999 5.125 13.8999C4.22754 13.8999 3.5 14.6274 3.5 15.5249C3.5 16.4224 4.22754 17.1499 5.125 17.1499Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M14.2246 17.1499C15.1221 17.1499 15.8496 16.4224 15.8496 15.5249C15.8496 14.6274 15.1221 13.8999 14.2246 13.8999C13.3271 13.8999 12.5996 14.6274 12.5996 15.5249C12.5996 16.4224 13.3271 17.1499 14.2246 17.1499Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.9 13.9001H5.1V2.8501H3.5" stroke="white" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.4502 4.1499L16.5002 4.9624L15.7109 10.6499H5.4502" stroke="white"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="tw-text-16px tw-font-semibold tw-leading-24px tw-text-white">ADD TO CART</p>
                </div>
                <div class="tw-flex tw-items-center tw-gap-12px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"
                        fill="none">
                        <g clip-path="url(#clip0_86_2065)">
                            <rect width="54" height="54" rx="27" fill="white" />
                            <path
                                d="M36.0055 28.3081L27.0102 36.4499L18.0149 28.3081M18.0149 28.3081C17.4215 27.7805 16.9542 27.1463 16.6422 26.4455C16.3303 25.7446 16.1805 24.9924 16.2023 24.2361C16.2241 23.4797 16.417 22.7357 16.7689 22.0509C17.1208 21.3661 17.624 20.7552 18.2469 20.2569C18.8698 19.7585 19.5989 19.3834 20.3882 19.1552C21.1775 18.927 22.01 18.8506 22.8332 18.9308C23.6564 19.0111 24.4525 19.2462 25.1714 19.6215C25.8903 19.9967 26.5163 20.5039 27.0102 21.1112C27.5062 20.5083 28.133 20.0056 28.8514 19.6343C29.5697 19.263 30.3642 19.0313 31.1851 18.9535C32.006 18.8758 32.8357 18.9537 33.6221 19.1825C34.4085 19.4112 35.1348 19.7859 35.7555 20.2829C36.3762 20.78 36.878 21.3888 37.2294 22.0712C37.5808 22.7537 37.7743 23.495 37.7978 24.249C37.8212 25.0029 37.6742 25.7531 37.3658 26.4527C37.0574 27.1523 36.5943 27.7862 36.0055 28.3147"
                                stroke="#727272" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <rect x="0.5" y="0.5" width="53" height="53" rx="26.5" stroke="#D6D6D6" />
                        <defs>
                            <clipPath id="clip0_86_2065">
                                <rect width="54" height="54" rx="27" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div
                        class="tw-flex tw-h-54px tw-w-54px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18"
                            fill="none">
                            <path d="M19.7747 14.062H1.5498" stroke="#727272" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.58729 6.97488L1.5498 3.93739L4.58729 0.899902" stroke="#727272"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.5498 3.9375H19.7747" stroke="#727272" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.7373 17.0999L19.7748 14.0624L16.7373 11.0249" stroke="#727272"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="tw-flex tw-flex-col tw-gap-15px">
                <p class="tw-text-base tw-leading-24px tw-text-gray2">Product Capacity :<span
                        class="tw-font-semibold tw-text-gray1">80ml</span>
                </p>
                <p class="tw-text-base tw-leading-24px tw-text-gray2">Origin :<span
                        class="tw-font-semibold tw-text-gray1">American</span>
                </p>
                <p class="tw-text-base tw-leading-24px tw-text-gray2">Product Code :<span
                        class="tw-font-semibold tw-text-gray1">AE-009</span>
                </p>
                <p class="tw-text-base tw-leading-24px tw-text-gray2">Tag :<span
                        class="tw-font-semibold tw-text-gray1">Medicine, Health</span>
                </p>
            </div>
        </div>
    </div>
    <div class="tw-container tw-mx-auto tw-my-50px tw-px-15px lg:tw-mt-100px lg:tw-px-0">
        <div
            class="tw-flex tw-flex-col tw-items-stretch tw-overflow-hidden tw-rounded-10px tw-shadow-lg lg:tw-flex-row">
            <div class="clsPill tw-flex tw-flex-1 tw-items-center tw-justify-center tw-bg-blue1 tw-p-16px"
                onclick="toggleSection('item1',this)">
                <p class="tw-cursor-pointer tw-text-20px tw-font-medium tw-uppercase tw-leading-28px tw-text-white">
                    Description</p>
            </div>
            <div class="clsPill tw-flex tw-flex-1 tw-items-center tw-justify-center tw-bg-white tw-p-16px"
                data-id="item2" onclick="toggleSection('item2',this)">
                <p class="tw-cursor-pointer tw-text-20px tw-font-medium tw-uppercase tw-leading-28px tw-text-blue1">
                    additional
                    information</p>
            </div>
            <div class="clsPill tw-flex tw-flex-1 tw-items-center tw-justify-center tw-bg-white tw-p-16px"
                onclick="toggleSection('item3',this)">
                <p class="tw-cursor-pointer tw-text-20px tw-font-medium tw-uppercase tw-leading-28px tw-text-blue1">
                    Reviews (1)</p>
            </div>
        </div>
        <div class="clsItem tw-py-50px" id="item1">
            <p class="tw-text-base tw-font-normal tw-leading-24px tw-text-gray2">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat
            </p>
            <p class="tw-mt-20px tw-text-base tw-font-normal tw-leading-24px tw-text-gray2">
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                iriure dolor in hendrerit in vulputate velit esse molestie consequat
            </p>
            <p class="tw-mt-20px tw-text-base tw-font-normal tw-leading-24px tw-text-gray2">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
            </p>
            <img class="tw-my-30px tw-aspect-video tw-w-full tw-object-cover"
                src="{{ asset('assets/dummyProduct.png') }}" alt="">
            <p class="tw-mt-20px tw-text-base tw-font-normal tw-leading-24px tw-text-gray2">
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                iriure dolor in hendrerit in vulputate velit esse molestie consequat
            </p>
            <img class="tw-my-30px tw-aspect-video tw-w-full tw-object-cover"
                src="{{ asset('assets/dummyProduct2.png') }}" alt="">
            <p class="tw-mt-20px tw-text-base tw-font-normal tw-leading-24px tw-text-gray2">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
                dolore te feugait nulla facilisi.
                Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            </p>

        </div>
        <div class="clsItem tw-hidden tw-py-50px" id="item2">
            item2
        </div>
        <div class="clsItem tw-hidden tw-py-50px" id="item3">
            item3
        </div>
    </div>
</section>
@pushonce('module-script')
    <script>
        var thumbSwiper = new Swiper(".thumbSwiper", {
            spaceBetween: 20,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var mainProductSwiper = new Swiper(".mainProductSwiper", {
            spaceBetween: 10,
            thumbs: {
                swiper: thumbSwiper,
            },
        });
        const toggleSection = (item, elem) => {
            const clsItem = document.querySelectorAll('.clsItem');
            const clsPill = document.querySelectorAll('.clsPill');
            clsPill.forEach((pill) => {
                pill.classList.remove('tw-bg-blue1');
                pill.classList.add('tw-bg-white');
                pill.querySelector('p').classList.remove('tw-text-white');
                pill.querySelector('p').classList.add('tw-text-blue1');
            });
            elem.classList.add('tw-bg-blue1');
            elem.querySelector('p').classList.add('tw-text-white');
            elem.classList.remove('tw-bg-white', 'tw-text-blue1');
            clsItem.forEach((item) => {
                item.classList.add('tw-hidden');
            });
            const main = document.getElementById(item);
            main.classList.remove('tw-hidden');
        }
    </script>
@endpushonce
