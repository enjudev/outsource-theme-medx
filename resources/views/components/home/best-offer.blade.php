<section id="bestOffer" class="tw-min-h-[947px] tw-bg-cover tw-bg-center"
    style="background-image: url('../assets/best_offer_bg.png');">
    <div class="tw-container tw-mx-auto tw-py-100px">
        <p class="tw-flex tw-items-center tw-justify-center tw-gap-7px">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_8_937)">
                    <path
                        d="M18.8119 3.37015C21.3293 3.36331 23.2283 4.61443 24.07 6.57841C24.4836 7.5311 24.6033 8.58547 24.4138 9.60656C24.2244 10.6277 23.7344 11.569 23.0065 12.3102C20.7398 14.6052 18.4716 16.9001 16.1555 19.1427C14.6614 20.5966 12.8307 21.0004 10.855 20.3551C8.8792 19.7098 7.66458 18.2849 7.29997 16.2374C6.99612 14.5171 7.45189 12.957 8.68854 11.6998C10.9502 9.39899 13.2313 7.11717 15.5319 4.85433C16.5399 3.85374 17.7796 3.37698 18.8119 3.37015ZM10.9697 14.6431C11.3508 13.4869 12.1139 12.4945 13.1338 11.8289C14.2504 12.5933 15.01 13.5917 15.3618 14.8747C15.7135 16.1577 15.5676 17.3989 14.9819 18.7017C16.1593 17.5052 17.2456 16.3998 18.3166 15.3119L12.4836 9.48073C12.4578 9.49251 12.4337 9.50784 12.4122 9.52628C11.4186 10.517 10.4167 11.5001 9.43752 12.5053C9.01785 12.9296 8.7099 13.4513 8.54118 14.0236C9.51728 14.1671 9.76871 14.1762 10.9697 14.6431ZM12.5269 19.1405C12.732 17.238 10.125 14.858 8.349 15.2861C8.14466 17.0497 9.78543 19.164 11.5211 19.3386C10.9458 18.6948 10.5296 17.9251 10.3058 17.0914C11.0259 17.7937 11.6222 18.6197 12.5269 19.1405ZM22.6464 6.36508C21.3376 4.16348 18.145 3.78997 16.2596 5.63096C15.4096 6.4615 14.688 7.12122 13.8425 7.95555C13.6906 8.10739 13.5068 8.31616 13.2424 8.56745L13.8957 9.24159L16.6979 6.43265C17.395 5.71798 18.3418 5.30065 19.3398 5.26808C20.5826 5.20583 21.6643 5.62109 22.6464 6.36508ZM12.8588 16.3862L13.0753 15.1214C13.5858 16.1698 13.6731 17.2866 13.7445 18.4618C14.7898 16.9563 14.5528 14.5657 13.1209 13.2675C12.6279 13.7048 12.318 14.2544 12.0627 14.8618C11.8949 15.2565 11.8789 15.334 12.2101 15.6422C12.4395 15.8525 12.6484 16.1516 12.8588 16.3892V16.3862Z"
                        fill="#80B4FF" />
                    <path
                        d="M6.66974 16.8418C5.08063 15.2916 3.35782 13.7383 1.78694 12.0438C-0.0361307 10.0738 0.115793 6.91942 2.00115 4.97441C3.90019 3.01499 7.03056 2.77281 9.09291 4.54244C10.1047 5.40942 10.9494 6.47074 11.8822 7.45767L11.1887 8.14093C10.4025 7.34759 9.61856 6.56033 8.8392 5.77003C8.25549 5.166 7.50769 4.74587 6.68797 4.56142C5.01682 4.18184 3.10487 4.97441 2.31108 6.40394C2.64986 6.19289 2.95219 5.98108 3.27579 5.80647C4.83224 4.96378 7.01764 5.01769 8.43432 6.55274C9.12785 7.30432 9.87759 8.002 10.6053 8.72321C9.86696 9.471 9.1552 10.2066 8.42825 10.9248C7.13083 12.2093 6.44641 13.7459 6.50642 15.5823C6.52162 16.0447 6.62416 16.5032 6.66974 16.8418Z"
                        fill="#80B4FF" />
                </g>
                <defs>
                    <clipPath id="clip0_8_937">
                        <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                    </clipPath>
                </defs>
            </svg>
            <span class="tw-leading-28px tw-text-xl tw-font-medium tw-uppercase tw-text-blue1">Best offers</span>
        </p>
        <p class="tw-leading-52px tw-mt-4px tw-text-center tw-text-48px tw-font-semibold tw-capitalize tw-text-gray2">
            Best Vitamin Offer For Our Customers
        </p>
        <div class="tw-mt-40px tw-flex tw-gap-78px">
            <div class="tw-overflow-hidden">
                <img class="tw-swiper-button-down-prev tw-mx-auto tw-cursor-pointer" src="../assets/up-next.svg"
                    alt="" />
                <div thumbsSlider="" class="swiper bestOfferThumbSwiper tw-mt-20px tw-h-[600px]">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="swiper-slide">
                                <img class="tw-h-full tw-object-cover" src="../assets/best_offter1.png" />
                            </div>
                        @endfor
                    </div>
                </div>
                <img class="tw-swiper-button-up-next tw-mx-auto tw-mt-20px tw-cursor-pointer"
                    src="../assets/down-next.svg" alt="" />
            </div>
            <div class="tw-w-full tw-flex-1 tw-overflow-hidden">
                <div class="swiper bestOfferSwiper tw-h-full">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="swiper-slide">
                                <div class="tw-flex tw-gap-78px">
                                    <img class="tw-w-[45%] tw-object-cover" src="../assets/big_offer.png"
                                        alt="" />
                                    <div class="tw-flex tw-flex-1">
                                        <div
                                            class="tw-z-10 -tw-mr-50px tw-mb-48px tw-mt-48px tw-flex tw-w-100px tw-flex-col tw-items-center tw-justify-center tw-gap-20px tw-rounded-full tw-bg-blue1">
                                            <div>
                                                <p class="tw-leading-40px tw-text-34px tw-font-semibold tw-text-white">
                                                    12
                                                </p>
                                                <p class="tw-leading-28px tw-text-xl tw-font-semibold tw-text-white">
                                                    Days
                                                </p>
                                            </div>
                                            <p class="tw-h-1px tw-w-[40%] tw-bg-white"></p>
                                            <div>
                                                <p class="tw-leading-40px tw-text-34px tw-font-semibold tw-text-white">
                                                    08
                                                </p>
                                                <p class="tw-leading-28px tw-text-xl tw-font-semibold tw-text-white">
                                                    Hours
                                                </p>
                                            </div>
                                            <p class="tw-h-1px tw-w-[40%] tw-bg-white"></p>
                                            <div>
                                                <p class="tw-leading-40px tw-text-34px tw-font-semibold tw-text-white">
                                                    54
                                                </p>
                                                <p class="tw-leading-28px tw-text-xl tw-font-semibold tw-text-white">
                                                    Mins
                                                </p>
                                            </div>
                                            <p class="tw-h-1px tw-w-[40%] tw-bg-white"></p>
                                            <div>
                                                <p class="tw-leading-40px tw-text-34px tw-font-semibold tw-text-white">
                                                    57
                                                </p>
                                                <p class="tw-leading-28px tw-text-xl tw-font-semibold tw-text-white">
                                                    Sec
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="tw-rounded-15px tw-flex-1 tw-bg-white tw-py-50px tw-pl-74px tw-pr-30px tw-drop-shadow-lg">
                                            <p class="tw-leading-40px tw-text-34px tw-font-semibold tw-text-gray2">
                                                Vitamin C 100 vegetarian
                                            </p>
                                            <div class="tw-mt-20px tw-flex tw-items-center tw-gap-6px">
                                                <p
                                                    class="tw-leading-52px tw-text-48px tw-font-semibold tw-capitalize tw-text-blue1">
                                                    $28.72
                                                </p>
                                                <p
                                                    class="tw-leading-28px tw-text-26px tw-font-normal tw-text-gray3 tw-line-through">
                                                    $35.90
                                                </p>
                                            </div>
                                            <p class="tw-leading-24px tw-mt-40px tw-text-base tw-text-gray3">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy
                                                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit
                                                lobortis nisl ut aliquip ex ea commodo consequat.
                                                Duis autem vel eum iriure dolor
                                            </p>
                                            <div class="tw-mt-40px tw-flex tw-items-center tw-gap-15px">
                                                <div
                                                    class="tw-flex tw-cursor-pointer tw-items-center tw-gap-4px tw-rounded-full tw-bg-blue1 tw-px-32px tw-py-16px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                        height="20" viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.97266 17.1499C5.87012 17.1499 6.59766 16.4224 6.59766 15.5249C6.59766 14.6274 5.87012 13.8999 4.97266 13.8999C4.07519 13.8999 3.34766 14.6274 3.34766 15.5249C3.34766 16.4224 4.07519 17.1499 4.97266 17.1499Z"
                                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M14.0723 17.1499C14.9697 17.1499 15.6973 16.4224 15.6973 15.5249C15.6973 14.6274 14.9697 13.8999 14.0723 13.8999C13.1748 13.8999 12.4473 14.6274 12.4473 15.5249C12.4473 16.4224 13.1748 17.1499 14.0723 17.1499Z"
                                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M13.7477 13.9001H4.94766V2.8501H3.34766" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M5.29785 4.1499L16.3479 4.9624L15.5586 10.6499H5.29785"
                                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <p class="tw-text-base tw-font-semibold tw-text-white">
                                                        ADD TO CART
                                                    </p>
                                                </div>
                                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                                    width="57" height="56" viewBox="0 0 57 56" fill="none">
                                                    <g clip-path="url(#clip0_1_816)">
                                                        <path
                                                            d="M38.9367 28.7216L29.3583 38L19.7799 28.7216M19.7799 28.7216C19.1481 28.1203 18.6505 27.3976 18.3183 26.5989C17.9862 25.8003 17.8267 24.943 17.8499 24.0811C17.8731 23.2192 18.0785 22.3713 18.4532 21.5909C18.8279 20.8104 19.3638 20.1143 20.027 19.5464C20.6903 18.9784 21.4666 18.551 22.3071 18.2909C23.1476 18.0308 24.034 17.9438 24.9106 18.0352C25.7871 18.1267 26.6348 18.3947 27.4003 18.8223C28.1658 19.2499 28.8324 19.828 29.3583 20.52C29.8864 19.833 30.5539 19.26 31.3188 18.8369C32.0837 18.4138 32.9297 18.1497 33.8039 18.0611C34.678 17.9725 35.5614 18.0613 36.3987 18.322C37.2361 18.5827 38.0095 19.0096 38.6705 19.5761C39.3314 20.1425 39.8657 20.8363 40.2399 21.614C40.6141 22.3918 40.8201 23.2366 40.8451 24.0958C40.8701 24.955 40.7135 25.8099 40.3851 26.6072C40.0567 27.4044 39.5636 28.1268 38.9367 28.7291"
                                                            stroke="#80B4FF" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <rect x="1.34766" y="0.5" width="55" height="55"
                                                        rx="4.5" stroke="#D6D6D6" />
                                                    <defs>
                                                        <clipPath id="clip0_1_816">
                                                            <rect x="0.847656" width="56" height="56"
                                                                rx="5" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                                    width="57" height="56" viewBox="0 0 57 56"
                                                    fill="none">
                                                    <g clip-path="url(#clip0_1_819)">
                                                        <path d="M38.0976 35.5833H17.5978" stroke="#80B4FF"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M21.0144 27.6114L17.5978 24.1947L21.0144 20.7781"
                                                            stroke="#80B4FF" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.5978 24.1946H38.0976" stroke="#80B4FF"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M34.6806 39L38.0972 35.5834L34.6806 32.1667"
                                                            stroke="#80B4FF" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <rect x="1.34766" y="0.5" width="55" height="55"
                                                        rx="4.5" stroke="#D6D6D6" />
                                                    <defs>
                                                        <clipPath id="clip0_1_819">
                                                            <rect x="0.847656" width="56" height="56"
                                                                rx="5" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@pushonce('module-script')
    <script>
        var bestOfferThumbSwiper = new Swiper(".bestOfferThumbSwiper", {
            spaceBetween: 20,
            direction: "vertical",
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-up-next",
                prevEl: ".swiper-button-down-prev",
            },
        });
        var bestOfferSwiper = new Swiper(".bestOfferSwiper", {
            thumbs: {
                swiper: bestOfferThumbSwiper,
            },
        });
    </script>
@endpushonce
