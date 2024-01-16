@extends('components.layout')
@section('css')
    <style>
        label input:checked+span:after {
            opacity: 1;
        }
    </style>
@endsection
@section('header')
    <x-header />
@endsection
@section('content')
    <div class="tw-flex tw-flex-col tw-pb-100px lg:tw-gap-100px">
        <x-blog.banner />
        <section class="tw-px-15px lg:tw-px-0">
            <div class="tw-container tw-mx-auto tw-grid tw-grid-cols-1 tw-gap-30px lg:tw-grid-cols-4">
                <div class="lg:tw-col-span-3">
                    <img class="tw-w-full tw-object-contain" src="{{ asset('assets/blog1.png') }}" alt="" />
                    <div class="tw-mt-26px tw-flex tw-items-center tw-gap-8px">
                        <p class="tw-text-16px tw-font-medium tw-text-gray1">By: Admin</p>
                        <p class="tw-text-16px tw-font-medium tw-text-gray1">|</p>
                        <p class="tw-text-16px tw-font-medium tw-text-gray1">October 25, 2022</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M15.5556 10C15.5556 7.2375 12.9694 5 9.77778 5C6.58611 5 4 7.2375 4 10C4 11.0719 4.39167 12.0594 5.05556 12.875C4.68333 13.8188 4.06944 14.5687 4.06111 14.5781C4 14.65 3.98333 14.7563 4.01944 14.85C4.05556 14.9438 4.13333 15 4.22222 15C5.23889 15 6.08056 14.6156 6.68611 14.2188C7.58056 14.7094 8.63889 15 9.77778 15C12.9694 15 15.5556 12.7625 15.5556 10ZM18.9444 16.875C19.6083 16.0625 20 15.0719 20 14C20 11.9094 18.5139 10.1187 16.4083 9.37187C16.4333 9.57812 16.4444 9.7875 16.4444 10C16.4444 13.3094 13.4528 16 9.77778 16C9.47778 16 9.18611 15.975 8.89722 15.9406C9.77222 17.7375 11.8278 19 14.2222 19C15.3611 19 16.4194 18.7125 17.3139 18.2188C17.9194 18.6156 18.7611 19 19.7778 19C19.8667 19 19.9472 18.9406 19.9806 18.85C20.0167 18.7594 20 18.6531 19.9389 18.5781C19.9306 18.5687 19.3167 17.8219 18.9444 16.875Z"
                                fill="#898989" />
                        </svg>
                        <p class="tw-text-16px tw-font-medium tw-text-gray1">4 Comments</p>
                    </div>
                    <p class="tw-mt-26px tw-text-48px tw-font-semibold tw-leading-58px tw-text-gray1">The Family During the
                        COVID-19 Pandemic</p>
                    <div class="tw-mt-26px">
                        Ckeditor content
                    </div>
                    <div class="tw-mt-30px tw-flex tw-items-center">
                        <div class="tw-flex tw-gap-10px">
                            <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">Tag</p>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-blue1 tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-white">
                                Health
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-blue1 tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-white">
                                Vitamins
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-blue1 tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-white">
                                Covid
                            </a>
                        </div>
                        <div class="tw-ml-auto tw-flex tw-items-center tw-gap-10px">
                            <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">Tag</p>
                            <a href="" class="tw-rounded-full tw-bg-blue3 tw-p-11px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path
                                        d="M17 12.352C17 15.264 15.264 17 12.352 17H11.4C10.96 17 10.6 16.64 10.6 16.2V11.584C10.6 11.368 10.776 11.184 10.992 11.184L12.4 11.16C12.512 11.152 12.608 11.072 12.632 10.96L12.912 9.43201C12.936 9.28801 12.824 9.152 12.672 9.152L10.968 9.176C10.744 9.176 10.568 9.00001 10.56 8.78401L10.528 6.824C10.528 6.696 10.632 6.58401 10.768 6.58401L12.688 6.552C12.824 6.552 12.928 6.44801 12.928 6.31201L12.896 4.39199C12.896 4.25599 12.792 4.152 12.656 4.152L10.496 4.18401C9.168 4.20801 8.11201 5.296 8.13601 6.624L8.176 8.824C8.184 9.048 8.00801 9.22401 7.78401 9.23201L6.824 9.248C6.688 9.248 6.58401 9.35199 6.58401 9.48799L6.60801 11.008C6.60801 11.144 6.712 11.248 6.848 11.248L7.80801 11.232C8.03201 11.232 8.20799 11.408 8.21599 11.624L8.28799 16.184C8.29599 16.632 7.93599 17 7.48799 17H5.648C2.736 17 1 15.264 1 12.344V5.648C1 2.736 2.736 1 5.648 1H12.352C15.264 1 17 2.736 17 5.648V12.352V12.352Z"
                                        fill="#454545" />
                                </svg>
                            </a>
                            <a href="" class="tw-rounded-full tw-bg-blue3 tw-p-11px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M15.3577 4H8.65032C5.73687 4 4 5.736 4 8.648V15.344C4 18.264 5.73687 20 8.65032 20H15.3497C18.2631 20 20 18.264 20 15.352V8.648C20.008 5.736 18.2711 4 15.3577 4ZM12.004 15.104C10.2911 15.104 8.89844 13.712 8.89844 12C8.89844 10.288 10.2911 8.896 12.004 8.896C13.7168 8.896 15.1095 10.288 15.1095 12C15.1095 13.712 13.7168 15.104 12.004 15.104ZM16.7423 7.904C16.7023 8 16.6463 8.088 16.5743 8.168C16.4942 8.24 16.4062 8.296 16.3101 8.336C16.2141 8.376 16.11 8.4 16.006 8.4C15.7899 8.4 15.5898 8.32 15.4377 8.168C15.3657 8.088 15.3096 8 15.2696 7.904C15.2296 7.808 15.2056 7.704 15.2056 7.6C15.2056 7.496 15.2296 7.392 15.2696 7.296C15.3096 7.192 15.3657 7.112 15.4377 7.032C15.6218 6.848 15.9019 6.76 16.1581 6.816C16.2141 6.824 16.2621 6.84 16.3101 6.864C16.3582 6.88 16.4062 6.904 16.4542 6.936C16.4942 6.96 16.5342 7 16.5743 7.032C16.6463 7.112 16.7023 7.192 16.7423 7.296C16.7824 7.392 16.8064 7.496 16.8064 7.6C16.8064 7.704 16.7824 7.808 16.7423 7.904Z"
                                        fill="#454545" />
                                </svg>
                            </a>
                            <a href="" class="tw-rounded-full tw-bg-blue3 tw-p-11px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M17 8.94701C16.632 9.10701 16.237 9.21701 15.822 9.26501C16.246 9.01501 16.57 8.61901 16.724 8.14801C16.32 8.38348 15.8791 8.54913 15.42 8.63801C15.2269 8.43558 14.9945 8.27462 14.7372 8.16493C14.4798 8.05524 14.2028 7.99913 13.923 8.00001C12.79 8.00001 11.872 8.90501 11.872 10.02C11.872 10.178 11.89 10.332 11.925 10.48C11.1123 10.4414 10.3166 10.2338 9.58865 9.87055C8.86068 9.50726 8.21643 8.99621 7.697 8.37001C7.51456 8.67711 7.41851 9.02781 7.419 9.38501C7.419 10.085 7.782 10.705 8.332 11.066C8.00644 11.0558 7.68786 10.9691 7.402 10.813V10.838C7.40509 11.3075 7.5708 11.7613 7.87092 12.1224C8.17103 12.4834 8.587 12.7292 9.048 12.818C8.74536 12.898 8.42869 12.9096 8.121 12.852C8.25513 13.2559 8.51167 13.608 8.85502 13.8594C9.19837 14.1108 9.61148 14.2491 10.037 14.255C9.30696 14.8176 8.41064 15.1215 7.489 15.119C7.324 15.119 7.161 15.109 7 15.091C7.94047 15.6863 9.03096 16.0016 10.144 16C13.918 16 15.981 12.922 15.981 10.252L15.974 9.99001C16.3763 9.70729 16.7239 9.35389 17 8.94701V8.94701Z"
                                        fill="#454545" />
                                    <path
                                        d="M12 19.2C13.9096 19.2 15.7409 18.4414 17.0912 17.0912C18.4414 15.7409 19.2 13.9096 19.2 12C19.2 10.0904 18.4414 8.25909 17.0912 6.90883C15.7409 5.55857 13.9096 4.8 12 4.8C10.0904 4.8 8.25909 5.55857 6.90883 6.90883C5.55857 8.25909 4.8 10.0904 4.8 12C4.8 13.9096 5.55857 15.7409 6.90883 17.0912C8.25909 18.4414 10.0904 19.2 12 19.2V19.2ZM12 21C7.0293 21 3 16.9707 3 12C3 7.0293 7.0293 3 12 3C16.9707 3 21 7.0293 21 12C21 16.9707 16.9707 21 12 21Z"
                                        fill="#454545" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tw-flex tw-flex-col tw-gap-30px">
                    <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                        <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-gray1">Categories</p>
                        <div class="tw-mt-30px tw-flex tw-flex-col">
                            <a href="#" class="tw-flex tw-items-center tw-py-15px">
                                <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">All categories</p>
                                <p class="tw-ml-auto tw-text-16px tw-font-normal tw-leading-24px tw-text-gray3">(32)</p>
                            </a>
                            <a href="#" class="tw-flex tw-items-center tw-py-15px">
                                <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">Vitamin C</p>
                                <p class="tw-ml-auto tw-text-16px tw-font-normal tw-leading-24px tw-text-gray3">(04)</p>
                            </a>
                            <a href="#" class="tw-flex tw-items-center tw-py-15px">
                                <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">Healthcare</p>
                                <p class="tw-ml-auto tw-text-16px tw-font-normal tw-leading-24px tw-text-gray3">(10)</p>
                            </a>
                            <a href="#" class="tw-flex tw-items-center tw-py-15px">
                                <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">Medicine</p>
                                <p class="tw-ml-auto tw-text-16px tw-font-normal tw-leading-24px tw-text-gray3">(09)</p>
                            </a>
                            <a href="#" class="tw-flex tw-items-center tw-py-15px">
                                <p class="tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">Nutrition</p>
                                <p class="tw-ml-auto tw-text-16px tw-font-normal tw-leading-24px tw-text-gray3">(8)</p>
                            </a>
                        </div>
                    </div>
                    <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                        <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-gray1">Recent Posts</p>
                        <div class="tw-mt-30px tw-flex tw-flex-col tw-gap-30px">
                            @for ($i = 0; $i < 6; $i++)
                                <a class="tw-flex tw-w-full tw-flex-row tw-gap-20px">
                                    <img class="tw-h-auto tw-w-100px tw-object-contain"
                                        src="{{ asset('assets/blog1.png') }}" alt="" />
                                    <div class="tw-flex-1">
                                        <p class="tw-text-14px tw-font-normal tw-text-gray3">January 20, 2023</p>
                                        <p class="tw-line-clamp-2 tw-text-16px tw-font-medium tw-text-gray1">Healthcare Look
                                            Like in a Post-COVID-19 Healthcare Look
                                            Like
                                            in a Post-COVID-19
                                        </p>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                    <div class="tw-rounded-15px tw-bg-blue3 tw-p-30px">
                        <p class="tw-text-20px tw-font-semibold tw-leading-24px tw-text-gray1">Tag</p>
                        <div class="tw-mt-30px tw-flex tw-flex-wrap tw-gap-12px">
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-blue1 tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-white">
                                Health
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-white tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">
                                Vitamins
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-white tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">
                                Treatment
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-white tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">
                                Alternatives
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-white tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">
                                Nutrients
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-white tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">
                                Clinical
                            </a>
                            <a href="#"
                                class="tw-inline-block tw-rounded-full tw-bg-white tw-px-12px tw-py-4px tw-text-16px tw-font-medium tw-leading-24px tw-text-gray1">
                                Shortage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    <x-footer />
@endsection
@section('script')
@endsection
