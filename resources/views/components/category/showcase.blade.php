<section>
    <div class="tw-container tw-mx-auto tw-grid tw-grid-cols-1 tw-gap-30px tw-px-15px lg:tw-grid-cols-4 lg:tw-px-0">
        <div class="tw-order-2 lg:tw-order-1 lg:tw-col-span-3">
            <div class="tw-flex tw-items-center tw-gap-40px">
                <div
                    class="tw-hidden tw-items-center tw-gap-20px tw-rounded-5px tw-border-1px tw-border-gray4 tw-bg-white tw-px-16px tw-py-18px lg:tw-flex">
                    <svg onclick="typeGrid3()" class="tw-cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" viewBox="0 0 20 20" fill="none">
                        <rect x="0.000610352" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="7.27283" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="14.5466" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="0.000610352" y="7.27295" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="7.27283" y="7.27295" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="14.5466" y="7.27295" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="0.000610352" y="14.5454" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="7.27283" y="14.5454" width="5.45457" height="5.45457" fill="#D9D9D9" />
                        <rect x="14.5466" y="14.5454" width="5.45457" height="5.45457" fill="#D9D9D9" />
                    </svg>
                    <svg onclick="typeGrid2()" class="tw-cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <rect width="9.09083" height="9.09083" fill="#D9D9D9" />
                        <rect x="10.9098" width="9.09083" height="9.09083" fill="#D9D9D9" />
                        <rect y="10.9092" width="9.09083" height="9.09083" fill="#D9D9D9" />
                        <rect x="10.9098" y="10.9092" width="9.09083" height="9.09083" fill="#D9D9D9" />
                    </svg>
                    <svg onclick="typeGrid4()" class="tw-cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <rect x="0.00109863" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="5.45532" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="10.9111" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="16.3652" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="0.00109863" y="5.45459" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="0.00109863" y="10.9092" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="0.00109863" y="16.3638" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="5.45532" y="5.45459" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="5.45532" y="10.9092" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="5.45532" y="16.3638" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="10.9111" y="5.45459" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="10.9111" y="10.9092" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="10.9111" y="16.3638" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="16.3652" y="5.45459" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="16.3652" y="10.9092" width="3.63641" height="3.63641" fill="#D9D9D9" />
                        <rect x="16.3652" y="16.3638" width="3.63641" height="3.63641" fill="#D9D9D9" />
                    </svg>
                </div>
                <p class="tw-text-base tw-font-medium tw-text-gray3">Showing 1-12 of 90 result</p>
                <div
                    class="tw-ml-auto tw-flex tw-cursor-pointer tw-items-center tw-gap-4px tw-rounded-5px tw-border-1px tw-border-gray4 tw-bg-white tw-px-16px tw-py-18px">
                    <p class="tw-text-base tw-font-medium tw-text-gray3">Default Sorting</p>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20" stroke="#898989" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M6 12H18" stroke="#898989" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M8 18H16" stroke="#898989" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div id="categoryContainer" class="tw-mt-50px tw-grid tw-grid-cols-2 tw-gap-30px lg:tw-grid-cols-3">
                @for ($i = 0; $i < 9; $i++)
                    <x-global.card />
                @endfor
            </div>
            <div class="tw-mt-30px tw-flex tw-items-center tw-justify-center tw-gap-12px">
                <a href=""
                    class="hover:text-white tw-flex tw-h-46px tw-w-46px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray5 tw-bg-blue1 tw-text-white">1</a>
                <a href=""
                    class="hover:text-white tw-flex tw-h-46px tw-w-46px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray5 tw-bg-white tw-transition hover:tw-bg-blue1">2</a>
                <a href=""
                    class="hover:text-white tw-flex tw-h-46px tw-w-46px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray5 tw-bg-white tw-transition hover:tw-bg-blue1">3</a>
                <a href=""
                    class="hover:text-white tw-flex tw-h-46px tw-w-46px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray5 tw-bg-white tw-transition hover:tw-bg-blue1">4</a>
                <a href=""
                    class="hover:text-white tw-flex tw-h-46px tw-w-46px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray5 tw-bg-white tw-transition hover:tw-bg-blue1">5</a>
                <a href=""
                    class="hover:text-white tw-flex tw-h-46px tw-w-46px tw-items-center tw-justify-center tw-rounded-full tw-border-1px tw-border-gray5 tw-bg-white tw-transition hover:tw-bg-blue1">6</a>
            </div>
        </div>
        <div class="tw-flex tw-flex-col tw-gap-30px">
            <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                <div class="tw-flex tw-cursor-pointer tw-items-center" onclick="toggleChildren('sortCategory1')">
                    <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-blue2">Categories</p>
                    <svg class="tw-ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_82_1562)">
                            <path d="M7 9L12 14L17 9" stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_82_1562">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div id="sortCategory1" class="tw-mt-15px tw-flex tw-flex-col tw-gap-15px">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="tw-flex tw-items-center tw-gap-9px">
                            <label for="category{{ $i }}" class="checkbox tw-relative">
                                <input type="radio" name="category" id="category{{ $i }}"
                                    class="!tw-hidden">
                                <span
                                    class="tw-w-15px tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[7.9px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">Vitamin1</span>
                            </label>
                            <p class="tw-text tw-ml-auto tw-text-base tw-text-gray3">(10)</p>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                <div class="tw-flex tw-cursor-pointer tw-items-center" onclick="toggleChildren('sortCategory2')">
                    <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-blue2">Price</p>
                    <svg class="tw-ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_82_1562)">
                            <path d="M7 9L12 14L17 9" stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_82_1562">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div id="sortCategory2" class="tw-mt-15px tw-flex tw-flex-col tw-gap-15px">
                    <div class="relative mb-6">
                        <label for="labels-range-input" class="sr-only">Price</label>
                        <input id="labels-range-input" type="range" value="1000" min="100" max="1500"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min
                            ($100)</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max
                            ($1500)</span>
                    </div>
                </div>
            </div>
            <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                <div class="tw-flex tw-cursor-pointer tw-items-center" onclick="toggleChildren('sortCategory3')">
                    <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-blue2">Classify</p>
                    <svg class="tw-ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_82_1562)">
                            <path d="M7 9L12 14L17 9" stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_82_1562">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div id="sortCategory3" class="tw-mt-15px tw-flex tw-flex-col tw-gap-15px">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="tw-flex tw-items-center tw-gap-9px">
                            <label for="classify{{ $i }}" class="checkbox tw-relative">
                                <input type="radio" name="classify" id="classify{{ $i }}"
                                    class="!tw-hidden">
                                <span
                                    class="tw-w-15px tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[7.9px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">for
                                    eyes</span>
                            </label>
                            <p class="tw-text tw-ml-auto tw-text-base tw-text-gray3">(10)</p>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                <div class="tw-flex tw-cursor-pointer tw-items-center" onclick="toggleChildren('sortCategory4')">
                    <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-blue2">Rating</p>
                    <svg class="tw-ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_82_1562)">
                            <path d="M7 9L12 14L17 9" stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_82_1562">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div id="sortCategory4" class="tw-mt-15px tw-flex tw-flex-col tw-gap-15px">
                    <div class="tw-flex tw-items-center tw-gap-9px">
                        <label for="star" class="checkbox tw-relative">
                            <input type="radio" name="star" id="star" class="!tw-hidden">
                            <span
                                class="tw-flex tw-w-full tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[4px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">
                                <div class="tw-flex tw-gap-2px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div class="tw-flex tw-items-center tw-gap-9px">
                        <label for="star1" class="checkbox tw-relative">
                            <input type="radio" name="star" id="star1" class="!tw-hidden">
                            <span
                                class="tw-flex tw-w-full tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[4px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">
                                <div class="tw-flex tw-gap-2px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div class="tw-flex tw-items-center tw-gap-9px">
                        <label for="star2" class="checkbox tw-relative">
                            <input type="radio" name="star" id="star2" class="!tw-hidden">
                            <span
                                class="tw-flex tw-w-full tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[4px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">
                                <div class="tw-flex tw-gap-2px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div class="tw-flex tw-items-center tw-gap-9px">
                        <label for="star3" class="checkbox tw-relative">
                            <input type="radio" name="star" id="star3" class="!tw-hidden">
                            <span
                                class="tw-flex tw-w-full tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[4px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">
                                <div class="tw-flex tw-gap-2px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#B7B7B7" />
                                    </svg>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div class="tw-flex tw-items-center tw-gap-9px">
                        <label for="star4" class="checkbox tw-relative">
                            <input type="radio" name="star" id="star4" class="!tw-hidden">
                            <span
                                class="tw-flex tw-w-full tw-text-16px tw-font-medium tw-text-gray1 before:tw-mr-4px before:tw-inline-block before:tw-h-18px before:tw-w-18px before:tw-rounded-5px before:tw-border-1px before:tw-border-gray4 before:tw-bg-white before:tw-align-middle after:tw-absolute after:tw-left-3px after:tw-top-[4px] after:tw-inline-block after:tw-h-12px after:tw-w-12px after:tw-rounded-3px after:tw-bg-blue1 after:tw-opacity-0 after:tw-transition">
                                <div class="tw-flex tw-gap-2px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M8.08155 1.13274C8.42863 0.326779 9.57137 0.326779 9.91845 1.13274L11.469 4.73316C11.6137 5.06934 11.9306 5.29956 12.2951 5.33336L16.1984 5.69538C17.0722 5.77642 17.4253 6.86323 16.766 7.44239L13.821 10.0296C13.546 10.2712 13.4249 10.6437 13.5054 11.0007L14.3673 14.8249C14.5602 15.6809 13.6357 16.3526 12.8812 15.9046L9.51056 13.9032C9.19584 13.7163 8.80416 13.7163 8.48944 13.9032L5.11879 15.9046C4.36426 16.3526 3.43976 15.6809 3.6327 14.8249L4.49459 11.0007C4.57506 10.6437 4.45403 10.2712 4.17904 10.0296L1.23398 7.44239C0.574713 6.86323 0.92784 5.77642 1.80161 5.69538L5.70494 5.33336C6.0694 5.29956 6.38627 5.06934 6.53105 4.73316L8.08155 1.13274Z"
                                            fill="#FFD400" />
                                    </svg>
                                </div>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                <div class="tw-flex tw-cursor-pointer tw-items-center" onclick="toggleChildren('sortCategory5')">
                    <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-blue2">Related Product</p>
                    <svg class="tw-ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_82_1562)">
                            <path d="M7 9L12 14L17 9" stroke="#454545" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_82_1562">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div id="sortCategory5" class="tw-mt-15px tw-flex tw-flex-col tw-gap-15px">
                    <div class="tw-flex tw-flex-col tw-gap-30px tw-py-20px">
                        <a href="#" class="tw-flex tw-items-stretch tw-gap-20px">
                            <img class="tw-block tw-h-100px tw-w-100px tw-object-cover"
                                src="{{ asset('assets/related-product.png') }}" alt="">
                            <div class="tw-flex tw-flex-col">
                                <p class="tw-text-base tw-font-medium tw-leading-24px tw-text-blue2">Power Gummies -
                                    Hair & Nail
                                    Vitamins</p>
                                <div class="tw-mt-auto tw-flex tw-items-center tw-gap-5px">
                                    <p class="tw-text-20px tw-font-semibold tw-leading-28px tw-text-blue1">$60.00</p>
                                    <p class="tw-text-base tw-leading-24px tw-text-gray6 tw-line-through">$75.00</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="tw-flex tw-items-stretch tw-gap-20px">
                            <img class="tw-block tw-h-100px tw-w-100px tw-object-cover"
                                src="{{ asset('assets/related-product.png') }}" alt="">
                            <div class="tw-flex tw-flex-col">
                                <p class="tw-text-base tw-font-medium tw-leading-24px tw-text-blue2">Power Gummies -
                                    Hair & Nail
                                    Vitamins</p>
                                <div class="tw-mt-auto tw-flex tw-items-center tw-gap-5px">
                                    <p class="tw-text-20px tw-font-semibold tw-leading-28px tw-text-blue1">$60.00</p>
                                    <p class="tw-text-base tw-leading-24px tw-text-gray6 tw-line-through">$75.00</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="tw-flex tw-items-stretch tw-gap-20px">
                            <img class="tw-block tw-h-100px tw-w-100px tw-object-cover"
                                src="{{ asset('assets/related-product.png') }}" alt="">
                            <div class="tw-flex tw-flex-col">
                                <p class="tw-text-base tw-font-medium tw-leading-24px tw-text-blue2">Power Gummies -
                                    Hair & Nail
                                    Vitamins</p>
                                <div class="tw-mt-auto tw-flex tw-items-center tw-gap-5px">
                                    <p class="tw-text-20px tw-font-semibold tw-leading-28px tw-text-blue1">$60.00</p>
                                    <p class="tw-text-base tw-leading-24px tw-text-gray6 tw-line-through">$75.00</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@pushonce('module-script')
    <script>
        const toggleChildren = (id) => {
            var children = document.getElementById(id);
            children.classList.toggle('tw-hidden');
        }
        const typeGrid2 = () => {
            console.log('123');
            const categoryContainer = document.getElementById('categoryContainer');
            categoryContainer.classList.remove('lg:tw-grid-cols-2', 'lg:tw-grid-cols-3', 'lg:tw-grid-cols-4');
            categoryContainer.classList.add('lg:tw-grid-cols-2');
        }
        const typeGrid3 = () => {
            const categoryContainer = document.getElementById('categoryContainer');
            categoryContainer.classList.remove('lg:tw-grid-cols-2', 'lg:tw-grid-cols-3', 'lg:tw-grid-cols-4');
            categoryContainer.classList.add('lg:tw-grid-cols-3');
        }
        const typeGrid4 = () => {
            const categoryContainer = document.getElementById('categoryContainer');
            categoryContainer.classList.remove('lg:tw-grid-cols-2', 'lg:tw-grid-cols-3', 'lg:tw-grid-cols-4');
            categoryContainer.classList.add('lg:tw-grid-cols-4');
        }
    </script>
@endpushonce
