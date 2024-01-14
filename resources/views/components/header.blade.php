<section id="headerMobile" class="tw-block lg:tw-hidden">
    <div class="tw-fixed tw-left-0 tw-top-0 tw-z-[9999] tw-flex tw-w-full tw-bg-white tw-px-15px tw-py-15px">
        <a href="" class="tw-h-auto tw-w-150px">
            <img src="{{ asset('assets/Logo.svg') }}" class="object-contain" alt="" />
        </a>
    </div>
</section>
<section id="headerPc" class="hidden lg:block tw-relative">
    <div
        class="tw-fixed tw-left-30px tw-top-30px tw-z-50 tw-h-110px tw-w-[calc(100%-60px)] tw-rounded-15px tw-bg-white tw-shadow-md">
        <div class="tw-container tw-mx-auto tw-flex tw-h-full tw-items-center tw-gap-100px">
            <a href="">
                <img src="{{ asset('assets/Logo.svg') }}" class="object-contain" alt="" />
            </a>
            <div class="tw-mx-auto tw-flex tw-h-full tw-flex-1 tw-items-center tw-gap-50px">
                <a href="" class="tw-text-xl tw-font-medium tw-uppercase tw-text-blue1">Home</a>
                <div class="tw-group tw-flex tw-h-full tw-cursor-pointer tw-items-center">
                    <div
                        class="tw-flex tw-cursor-pointer tw-items-center tw-gap-1 tw-text-xl tw-font-medium tw-uppercase tw-text-gray1">
                        <span>Personal Care</span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2971)">
                                <path d="M7.5 9L12.5 14L17.5 9" stroke="#454545" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_2971">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div
                        class="tw-duration-400 tw-absolute tw-left-0 tw-top-[100%] tw-hidden tw-w-full tw-translate-x-4 tw-transition-all tw-ease-in-out group-hover:tw-block group-hover:tw-translate-x-0 group-hover:tw-opacity-100">
                        <div
                            class="tw-container tw-mx-auto tw-grid tw-grid-cols-4 tw-gap-30px tw-rounded-bl-lg tw-rounded-br-lg tw-bg-white tw-p-30px tw-drop-shadow-2xl">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="tw-block">
                                    <a href="">
                                        <img src="../assets/category1.svg" class="tw-w-full tw-object-cover"
                                            alt="" />
                                    </a>
                                    <p class="tw-mt-20px tw-text-lg tw-font-semibold tw-text-gray1">
                                        Lorem De Dorus
                                    </p>
                                    <div class="tw-mt-15px tw-flex tw-flex-col tw-gap-10px">
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="tw-group tw-flex tw-h-full tw-cursor-pointer tw-items-center">
                    <div
                        class="tw-flex tw-cursor-pointer tw-items-center tw-gap-1 tw-text-xl tw-font-medium tw-uppercase tw-text-gray1">
                        <span>Family Care</span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2971)">
                                <path d="M7.5 9L12.5 14L17.5 9" stroke="#454545" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_2971">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div
                        class="tw-duration-400 tw-absolute tw-left-0 tw-top-[100%] tw-hidden tw-w-full tw-translate-x-4 tw-transition-all tw-ease-in-out group-hover:tw-block group-hover:tw-translate-x-0 group-hover:tw-opacity-100">
                        <div
                            class="tw-container tw-mx-auto tw-grid tw-grid-cols-4 tw-gap-30px tw-rounded-bl-lg tw-rounded-br-lg tw-bg-white tw-p-30px tw-drop-shadow-2xl">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="tw-block">
                                    <a href="">
                                        <img src="../assets/category1.svg" class="tw-w-full tw-object-cover"
                                            alt="" />
                                    </a>
                                    <p class="tw-mt-20px tw-text-lg tw-font-semibold tw-text-gray1">
                                        Lorem De Dorus
                                    </p>
                                    <div class="tw-mt-15px tw-flex tw-flex-col tw-gap-10px">
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="tw-group tw-flex tw-h-full tw-cursor-pointer tw-items-center">
                    <div
                        class="tw-flex tw-cursor-pointer tw-items-center tw-gap-1 tw-text-xl tw-font-medium tw-uppercase tw-text-gray1">
                        <span>Blog</span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2971)">
                                <path d="M7.5 9L12.5 14L17.5 9" stroke="#454545" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_2971">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div
                        class="tw-duration-400 tw-absolute tw-left-0 tw-top-[100%] tw-hidden tw-w-full tw-translate-x-4 tw-transition-all tw-ease-in-out group-hover:tw-block group-hover:tw-translate-x-0 group-hover:tw-opacity-100">
                        <div
                            class="tw-container tw-mx-auto tw-grid tw-grid-cols-4 tw-gap-30px tw-rounded-bl-lg tw-rounded-br-lg tw-bg-white tw-p-30px tw-drop-shadow-2xl">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="tw-block">
                                    <a href="">
                                        <img src="../assets/category1.svg" class="tw-w-full tw-object-cover"
                                            alt="" />
                                    </a>
                                    <p class="tw-mt-20px tw-text-lg tw-font-semibold tw-text-gray1">
                                        Lorem De Dorus
                                    </p>
                                    <div class="tw-mt-15px tw-flex tw-flex-col tw-gap-10px">
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                        <a href="" class="tw-block tw-text-lg tw-text-gray1">Dincidunteros</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <a href=""
                    class="tw-text-xl tw-font-medium tw-uppercase tw-text-gray1 tw-transition tw-duration-300 hover:tw-text-blue1">Brand</a>
                <a href=""
                    class="tw-text-xl tw-font-medium tw-uppercase tw-text-gray1 tw-transition tw-duration-300 hover:tw-text-blue1">Pages</a>
            </div>

            <div class="tw-flex tw-items-center tw-gap-14px">
                <a href="" class="tw-inline-block">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g class="tw-clip-path" clip-path="url(#tw-clip0_1_2989)">
                            <path
                                d="M14.5 20C17.8137 20 20.5 17.3137 20.5 14C20.5 10.6863 17.8137 8 14.5 8C11.1863 8 8.5 10.6863 8.5 14C8.5 17.3137 11.1863 20 14.5 20Z"
                                stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M24.5 24L19.5 19" stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="tw-clip0_1_2989">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="" class="tw-inline-block">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g class="tw-clip-path" clip-path="url(#tw-clip0_1_2993)">
                            <path
                                d="M16.5 15C18.7091 15 20.5 13.2091 20.5 11C20.5 8.79086 18.7091 7 16.5 7C14.2909 7 12.5 8.79086 12.5 11C12.5 13.2091 14.2909 15 16.5 15Z"
                                stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M10.5 25V23C10.5 21.9391 10.9214 20.9217 11.6716 20.1716C12.4217 19.4214 13.4391 19 14.5 19H18.5C19.5609 19 20.5783 19.4214 21.3284 20.1716C22.0786 20.9217 22.5 21.9391 22.5 23V25"
                                stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="tw-clip0_1_2993">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="" class="tw-inline-block">
                    <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.99967 22.5335C8.19629 22.5335 9.16634 21.5635 9.16634 20.3669C9.16634 19.1702 8.19629 18.2002 6.99967 18.2002C5.80306 18.2002 4.83301 19.1702 4.83301 20.3669C4.83301 21.5635 5.80306 22.5335 6.99967 22.5335Z"
                            stroke="#454545" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.1333 22.5335C20.33 22.5335 21.3 21.5635 21.3 20.3669C21.3 19.1702 20.33 18.2002 19.1333 18.2002C17.9367 18.2002 16.9667 19.1702 16.9667 20.3669C16.9667 21.5635 17.9367 22.5335 19.1333 22.5335Z"
                            stroke="#454545" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.6997 18.2001H6.96634V3.4668H4.83301" stroke="#454545" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.43359 5.2002L22.1669 6.28353L21.1145 13.8669H7.43359" stroke="#454545"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>
