<section id="feedBack" class="tw-h-[830px] tw-bg-cover tw-bg-center"
    style="background-image: url('../assets/feedback-bg.png');">
    <div
        class="tw-container tw-mx-auto tw-flex tw-h-full tw-flex-col tw-gap-50px tw-px-15px tw-pb-50px tw-pt-100px lg:tw-px-0">
        <div>
            <p class="tw-flex tw-items-center tw-justify-center tw-gap-7px">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_8_937)">
                        <path
                            d="M18.8119 3.37015C21.3293 3.36331 23.2283 4.61443 24.07 6.57841C24.4836 7.5311 24.6033 8.58547 24.4138 9.60656C24.2244 10.6277 23.7344 11.569 23.0065 12.3102C20.7398 14.6052 18.4716 16.9001 16.1555 19.1427C14.6614 20.5966 12.8307 21.0004 10.855 20.3551C8.8792 19.7098 7.66458 18.2849 7.29997 16.2374C6.99612 14.5171 7.45189 12.957 8.68854 11.6998C10.9502 9.39899 13.2313 7.11717 15.5319 4.85433C16.5399 3.85374 17.7796 3.37698 18.8119 3.37015ZM10.9697 14.6431C11.3508 13.4869 12.1139 12.4945 13.1338 11.8289C14.2504 12.5933 15.01 13.5917 15.3618 14.8747C15.7135 16.1577 15.5676 17.3989 14.9819 18.7017C16.1593 17.5052 17.2456 16.3998 18.3166 15.3119L12.4836 9.48073C12.4578 9.49251 12.4337 9.50784 12.4122 9.52628C11.4186 10.517 10.4167 11.5001 9.43752 12.5053C9.01785 12.9296 8.7099 13.4513 8.54118 14.0236C9.51728 14.1671 9.76871 14.1762 10.9697 14.6431ZM12.5269 19.1405C12.732 17.238 10.125 14.858 8.349 15.2861C8.14466 17.0497 9.78543 19.164 11.5211 19.3386C10.9458 18.6948 10.5296 17.9251 10.3058 17.0914C11.0259 17.7937 11.6222 18.6197 12.5269 19.1405ZM22.6464 6.36508C21.3376 4.16348 18.145 3.78997 16.2596 5.63096C15.4096 6.4615 14.688 7.12122 13.8425 7.95555C13.6906 8.10739 13.5068 8.31616 13.2424 8.56745L13.8957 9.24159L16.6979 6.43265C17.395 5.71798 18.3418 5.30065 19.3398 5.26808C20.5826 5.20583 21.6643 5.62109 22.6464 6.36508ZM12.8588 16.3862L13.0753 15.1214C13.5858 16.1698 13.6731 17.2866 13.7445 18.4618C14.7898 16.9563 14.5528 14.5657 13.1209 13.2675C12.6279 13.7048 12.318 14.2544 12.0627 14.8618C11.8949 15.2565 11.8789 15.334 12.2101 15.6422C12.4395 15.8525 12.6484 16.1516 12.8588 16.3892V16.3862Z"
                            fill="#fff" />
                        <path
                            d="M6.66974 16.8418C5.08063 15.2916 3.35782 13.7383 1.78694 12.0438C-0.0361307 10.0738 0.115793 6.91942 2.00115 4.97441C3.90019 3.01499 7.03056 2.77281 9.09291 4.54244C10.1047 5.40942 10.9494 6.47074 11.8822 7.45767L11.1887 8.14093C10.4025 7.34759 9.61856 6.56033 8.8392 5.77003C8.25549 5.166 7.50769 4.74587 6.68797 4.56142C5.01682 4.18184 3.10487 4.97441 2.31108 6.40394C2.64986 6.19289 2.95219 5.98108 3.27579 5.80647C4.83224 4.96378 7.01764 5.01769 8.43432 6.55274C9.12785 7.30432 9.87759 8.002 10.6053 8.72321C9.86696 9.471 9.1552 10.2066 8.42825 10.9248C7.13083 12.2093 6.44641 13.7459 6.50642 15.5823C6.52162 16.0447 6.62416 16.5032 6.66974 16.8418Z"
                            fill="#fff" />
                    </g>
                    <defs>
                        <clipPath id="clip0_8_937">
                            <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="tw-text-xl tw-font-medium tw-uppercase tw-leading-28px tw-text-white">OUR CUSTOMERS
                    FEEDBACKS</span>
            </p>
            <p
                class="tw-mt-4px tw-text-center tw-text-48px tw-font-semibold tw-capitalize tw-leading-52px tw-text-white">
                Beauty's Best Kept Secret
            </p>
        </div>
        <div class="tw-flex-1">
            <div class="swiper feedbackSwiper tw-h-full">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="swiper-slide">
                            <img class="tw-mx-auto tw-h-125px tw-w-125px tw-object-cover"
                                src="{{ asset('assets/avatar.png') }}" alt="">
                            <div
                                class="-tw-mt-62px tw-rounded-[15px] tw-bg-white tw-px-38px tw-pb-30px tw-pt-80px tw-text-center">
                                <p class="tw-uppercaset tw-text-20px tw-font-semibold tw-leading-24px">Jame.st</p>
                                <p class="tw-mt-4px tw-text-base tw-font-normal tw-capitalize tw-leading-24px">freelance
                                    model</p>
                                <div class="tw-flex tw-items-center"></div>
                                <p class="tw-mt-19px tw-text-base tw-leading-24px tw-text-gray3">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing
                                    elit, sed diam
                                    nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                                    at vero eros et accumsan</p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
@pushonce('module-script')
    <script>
        var swiper = new Swiper(".feedbackSwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    </script>
@endpushonce
