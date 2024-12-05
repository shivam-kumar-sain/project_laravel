@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="pc-container">
    <div class="pc-content"><!-- [ Main Content ] start -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="col-span-12">
                <div class="card welcome-banner bg-primary-800">
                    <div
                        class="absolute opacity-50 inset-0 z-10 bg-right-bottom bg-[length:100%] bg-no-repeat bg-[url('../images/widget/img-dropbox-bg.html')]">
                    </div>
                    <div class="card-body relative z-20">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 sm:col-span-6">
                                <div class="p-4">
                                    <h2 class="text-white">Explore Redesigned Able Pro</h2>
                                    <p class="text-white my-5">The Brand new User Interface with power of Bootstrap
                                        Components. Explore the Endless possibilities with Able Pro.</p><a
                                        href="https://1.envato.market/zNkqj6"
                                        class="btn text-white border-white">Exclusive on Themeforest</a>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 text-center"><img
                                    src="{{ asset('assets/images/widget/welcome-banner.png') }}" alt="img"
                                    class="img-fluid w-[200px] max-w-full mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <div
                                    class="w-10 h-10 rounded-xl inline-flex items-center justify-center bg-primary-500/10 text-primary-500">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M13 9H7" stroke="#4680FF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M22.0002 10.9702V13.0302C22.0002 13.5802 21.5602 14.0302 21.0002 14.0502H19.0402C17.9602 14.0502 16.9702 13.2602 16.8802 12.1802C16.8202 11.5502 17.0602 10.9602 17.4802 10.5502C17.8502 10.1702 18.3602 9.9502 18.9202 9.9502H21.0002C21.5602 9.9702 22.0002 10.4202 22.0002 10.9702Z"
                                            stroke="#4680FF" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.48 10.55C17.06 10.96 16.82 11.55 16.88 12.18C16.97 13.26 17.96 14.05 19.04 14.05H21V15.5C21 18.5 19 20.5 16 20.5H7C4 20.5 2 18.5 2 15.5V8.5C2 5.78 3.64 3.88 6.19 3.56C6.45 3.52 6.72 3.5 7 3.5H16C16.26 3.5 16.51 3.50999 16.75 3.54999C19.33 3.84999 21 5.76 21 8.5V9.95001H18.92C18.36 9.95001 17.85 10.17 17.48 10.55Z"
                                            stroke="#4680FF" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ltr:ml-3 rtl:mr-3">
                                <h6 class="mb-0">All Earnings</h6>
                            </div>
                            <div class="shrink-0">
                                <div class="dropdown"><a
                                        class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                        href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a
                                            class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-bodybg dark:bg-themedark-bodybg p-3 mt-4 rounded-lg">
                            <div class="mt-3 grid grid-cols-12 gap-4">
                                <div class="col-span-7">
                                    <div id="all-earnings-graph"></div>
                                </div>
                                <div class="col-span-5">
                                    <h5 class="mb-1">$30200</h5>
                                    <p class="text-primary-500 mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <div
                                    class="w-10 h-10 rounded-xl inline-flex items-center justify-center bg-warning-500/10 text-warning-500">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z"
                                            stroke="#E58A00" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.6" d="M14.5 4.5V6.5C14.5 7.6 15.4 8.5 16.5 8.5H18.5"
                                            stroke="#E58A00" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.6" d="M8 13H12" stroke="#E58A00" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.6" d="M8 17H16" stroke="#E58A00" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ltr:ml-3 rtl:mr-3">
                                <h6 class="mb-0">Page Views</h6>
                            </div>
                            <div class="shrink-0">
                                <div class="dropdown"><a
                                        class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                        href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a
                                            class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-bodybg dark:bg-themedark-bodybg p-3 mt-4 rounded-lg">
                            <div class="mt-3 grid grid-cols-12 gap-4">
                                <div class="col-span-7">
                                    <div id="page-views-graph"></div>
                                </div>
                                <div class="col-span-5">
                                    <h5 class="mb-1">290+</h5>
                                    <p class="text-warning-500 mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <div
                                    class="w-10 h-10 rounded-xl inline-flex items-center justify-center bg-success-500/10 text-success-500">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M3.5 9.08984H20.5" stroke="#2ca87f" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                            stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M15.6947 13.7002H15.7037" stroke="#2ca87f"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M15.6947 16.7002H15.7037" stroke="#2ca87f"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M11.9955 13.7002H12.0045" stroke="#2ca87f"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M11.9955 16.7002H12.0045" stroke="#2ca87f"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8.29431 13.7002H8.30329" stroke="#2ca87f"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8.29395 16.7002H8.30293" stroke="#2ca87f"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ltr:ml-3 rtl:mr-3">
                                <h6 class="mb-0">Total Task</h6>
                            </div>
                            <div class="shrink-0">
                                <div class="dropdown"><a
                                        class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                        href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a
                                            class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-bodybg dark:bg-themedark-bodybg p-3 mt-4 rounded-lg">
                            <div class="mt-3 grid grid-cols-12 gap-4">
                                <div class="col-span-7">
                                    <div id="total-task-graph"></div>
                                </div>
                                <div class="col-span-5">
                                    <h5 class="mb-1">14568</h5>
                                    <p class="text-success-500 mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <div
                                    class="w-10 h-10 rounded-xl inline-flex items-center justify-center bg-danger-500/10 text-danger-500">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="#DC2626" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8.4707 10.7402L12.0007 14.2602L15.5307 10.7402"
                                            stroke="#DC2626" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="grow ltr:ml-3 rtl:mr-3">
                                <h6 class="mb-0">Download</h6>
                            </div>
                            <div class="shrink-0">
                                <div class="dropdown"><a
                                        class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                        href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a
                                            class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-bodybg dark:bg-themedark-bodybg p-3 mt-4 rounded-lg">
                            <div class="mt-3 grid grid-cols-12 gap-4">
                                <div class="col-span-7">
                                    <div id="download-graph"></div>
                                </div>
                                <div class="col-span-5">
                                    <h5 class="mb-1">$30200</h5>
                                    <p class="text-danger-500 mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <h5 class="mb-0">Repeat customer rate</h5>
                            <div class="dropdown"><a
                                    class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                    href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-dots text-lg leading-none"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item"
                                        href="#">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="ltr:text-right rtl:text-left my-2">5.44% <span
                                class="badge bg-success-500 text-white">+2.6%</span></h5>
                        <div id="customer-rate-graph"></div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Project - Able Pro</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <p class="mb-2">Release v1.2.0 <span class="float-right">70%</span></p>
                            <div class="w-full bg-theme-bodybg rounded-lg h-2 mb-4 dark:bg-themedark-bodybg">
                                <div class="bg-primary-500 h-full rounded-lg" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="grid gap-3"><a href="#" class="btn btn-link-secondary">
                                <div class="flex align-items-center">
                                    <div class="shrink-0"><span
                                            class="rounded-full w-2.5 h-2.5 inline-block bg-warning-500"></span>
                                    </div>
                                    <div class="grow-1 mx-2">
                                        <p class="mb-0 grid text-left"><span class="truncate w-full">Horizontal
                                                Layout</span></p>
                                    </div>
                                    <div class="badge inline-flex gap-1 bg-secondary-500/10 text-secondary-500 text-sm">
                                        <i class="ti ti-paperclip text-sm"></i> 2
                                    </div>
                                </div>
                            </a><a href="#" class="btn btn-link-secondary">
                                <div class="flex align-items-center">
                                    <div class="shrink-0"><span
                                            class="rounded-full w-2.5 h-2.5 inline-block bg-warning-500"></span>
                                    </div>
                                    <div class="grow-1 mx-2">
                                        <p class="mb-0 grid text-left"><span class="truncate w-full">Invoice
                                                Generator</span></p>
                                    </div>
                                </div>
                            </a><a href="#" class="btn btn-link-secondary">
                                <div class="flex align-items-center">
                                    <div class="shrink-0"><span
                                            class="rounded-full w-2.5 h-2.5 inline-block bg-success-500"></span>
                                    </div>
                                    <div class="grow-1 mx-2">
                                        <p class="mb-0 grid text-left"><span class="truncate w-full">Figma Auto
                                                Layout</span></p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="grid mt-3"><button class="btn btn-primary flex items-center justify-center gap-3"><i
                                    class="ti ti-plus"></i> Add task</button></div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <h5 class="mb-0">Project overview</h5>
                            <div class="dropdown"><a
                                    class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                    href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-dots text-lg leading-none"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item"
                                        href="#">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-3">
                            <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                <div class="grid grid-cols-12 gap-4 self-center">
                                    <div class="col-span-6 self-center">
                                        <p class="text-muted mb-1">Total Tasks</p>
                                        <h5 class="mb-0">34,686</h5>
                                    </div>
                                    <div class="col-span-6 self-center">
                                        <div id="total-tasks-graph"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                <div class="grid grid-cols-12 gap-4 self-center">
                                    <div class="col-span-6 self-center">
                                        <p class="text-muted mb-1">Pending Tasks</p>
                                        <h5 class="mb-0">3,786</h5>
                                    </div>
                                    <div class="col-span-6 self-center">
                                        <div id="pending-tasks-graph"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 self-center">
                                <div class="grid"><button class="btn btn-primary dflex align-center justify-center"><i
                                            class="ti ti-plus"></i> Add project</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <div
                                    class="w-8 h-8 rounded-xl inline-flex items-center justify-center bg-primary-500/10 text-primary-500">
                                    <i class="ti ti-at text-xl leading-none"></i>
                                </div>
                            </div>
                            <div class="grow mx-3">
                                <h6 class="mb-0">Able pro</h6><small class="text-muted">@ableprodevelop</small>
                            </div>
                            <div class="shrink-0">
                                <div class="dropdown"><a
                                        class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                        href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a
                                            class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div
                                class="flex -space-x-2 overflow-hidden *:flex *:items-center *:justify-center *:rounded-full *:w-[30px] *:h-[30px] hover:*:z-10 *:border-2 *:border-white">
                                <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar"> <img
                                    src="../assets/images/user/avatar-3.jpg" alt="user-image" class="avtar"> <img
                                    src="../assets/images/user/avatar-4.jpg" alt="user-image" class="avtar"> <img
                                    src="../assets/images/user/avatar-5.jpg" alt="user-image" class="avtar"> <span
                                    class="avtar bg-theme-cardbg dark:bg-themedark-cardbg overflow-hidden"><span
                                        class="flex items-center justify-center w-full h-full bg-primary-500/10 text-primary-500">+2</span></span>
                            </div><a href="#"
                                class="w-10 h-10 inline-flex items-center justify-center btn btn-primary rounded-full"><i
                                    class="ti ti-plus text-xl leading-none"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="card">
                    <div class="card-body border-bottom pb-0">
                        <div class="flex items-center justify-between mb-3">
                            <h5 class="mb-0">Transactions</h5>
                            <div class="dropdown"><a
                                    class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                    href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item"
                                        href="#">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <ul
                            class="flex flex-wrap w-full text-center nav-tabs border-b border-theme-border dark:border-themedark-border">
                            <li class="group active"><a href="javascript:void(0);" data-pc-toggle="tab"
                                    data-pc-target="tran-1"
                                    class="inline-block mr-6 py-4 transition-all duration-300 ease-linear border-b-2 border-transparent group-[.active]:text-primary-500 group-[.active]:border-primary-500 hover:text-primary-500 active:text-primary-500">All
                                    Transaction</a></li>
                            <li class="group"><a href="javascript:void(0);" data-pc-toggle="tab" data-pc-target="tran-2"
                                    class="inline-block mr-6 py-4 transition-all duration-300 ease-linear border-b-2 border-transparent group-[.active]:text-primary-500 group-[.active]:border-primary-500 hover:text-primary-500 active:text-primary-500">Success</a>
                            </li>
                            <li class="group"><a href="javascript:void(0);" data-pc-toggle="tab" data-pc-target="tran-3"
                                    class="inline-block mr-6 py-4 transition-all duration-300 ease-linear border-b-2 border-transparent group-[.active]:text-primary-500 group-[.active]:border-primary-500 hover:text-primary-500 active:text-primary-500">Pending</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="block tab-pane" id="tran-1">
                            <ul
                                class="rounded-lg *:py-4 *:px-[25px] divide-y divide-inherit border-theme-border dark:border-themedark-border">
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                AI</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Apple Inc.</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">$210,000</h6>
                                                    <p class="text-danger-500 mb-0"><i
                                                            class="ti ti-arrow-down-left"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                SM</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Spotify Music</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">- 10,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-down-right"></i> 30.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                MD</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Medium</h6>
                                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">-26</h6>
                                                    <p class="text-warning-500 mb-0"><i
                                                            class="ti ti-arrows-left-right"></i> 5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                U</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Uber</h6>
                                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                OC</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Ola Cabs</h6>
                                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden tab-pane" id="tran-2">
                            <ul
                                class="rounded-lg *:py-4 *:px-[25px] divide-y divide-inherit border-theme-border dark:border-themedark-border">
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                SM</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Spotify Music</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">- 10,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-down-right"></i> 30.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                MD</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Medium</h6>
                                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">-26</h6>
                                                    <p class="text-warning-500 mb-0"><i
                                                            class="ti ti-arrows-left-right"></i> 5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                AI</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Apple Inc.</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">$210,000</h6>
                                                    <p class="text-danger-500 mb-0"><i
                                                            class="ti ti-arrow-down-left"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                U</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Uber</h6>
                                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                OC</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Ola Cabs</h6>
                                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden tab-pane" id="tran-3">
                            <ul
                                class="rounded-lg *:py-4 *:px-[25px] divide-y divide-inherit border-theme-border dark:border-themedark-border">
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                U</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Uber</h6>
                                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                OC</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Ola Cabs</h6>
                                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                AI</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Apple Inc.</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">$210,000</h6>
                                                    <p class="text-danger-500 mb-0"><i
                                                            class="ti ti-arrow-down-left"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                SM</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Spotify Music</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">- 10,000</h6>
                                                    <p class="text-success-500 mb-0"><i
                                                            class="ti ti-arrow-down-right"></i> 30.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <div
                                                class="w-10 h-10 rounded-xl inline-flex items-center justify-center border border-theme-border dark:border-themedark-border">
                                                MD</div>
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <h6 class="mb-0">Medium</h6>
                                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                                </div>
                                                <div class="col-span-6 ltr:text-right rtl:text-left">
                                                    <h6 class="mb-1">-26</h6>
                                                    <p class="text-warning-500 mb-0"><i
                                                            class="ti ti-arrows-left-right"></i> 5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="grid grid-cols-12 gap-2">
                            <div class="col-span-12 md:col-span-6">
                                <div class="grid"><button class="btn btn-outline-secondary grid"><span
                                            class="truncate w-full">View all Transaction History</span></button>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <div class="grid"><button class="btn btn-primary grid"><span
                                            class="truncate w-full">Create new Transaction</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center justify-between mb-3">
                            <h5 class="mb-0">Total Income</h5>
                            <div class="dropdown"><a
                                    class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary dropdown-toggle arrow-none"
                                    href="#" data-pc-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-dots-vertical text-lg leading-none"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item"
                                        href="#">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div id="total-income-graph"></div>
                        <div class="grid grid-cols-12 gap-3 mt-4">
                            <div class="col-span-12 sm:col-span-6">
                                <div class="p-4 rounded-lg bg-theme-bodybg dark:bg-themedark-bodybg">
                                    <p class="mb-1 relative inline-flex items-center gap-2"><span
                                            class="rounded-full w-2 h-2 inline-block bg-primary-500"></span><span>Item01</span>
                                    </p>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i>
                                            +$763,43</small></h6>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <div class="p-4 rounded-lg bg-theme-bodybg dark:bg-themedark-bodybg">
                                    <p class="mb-1 relative inline-flex items-center gap-2"><span
                                            class="rounded-full w-2 h-2 inline-block bg-warning-500"></span><span>Item02</span>
                                    </p>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i>
                                            +$763,43</small></h6>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <div class="p-4 rounded-lg bg-theme-bodybg dark:bg-themedark-bodybg">
                                    <p class="mb-1 relative inline-flex items-center gap-2"><span
                                            class="rounded-full w-2 h-2 inline-block bg-success-500"></span><span>Item03</span>
                                    </p>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i>
                                            +$763,43</small></h6>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <div class="p-4 rounded-lg bg-theme-bodybg dark:bg-themedark-bodybg">
                                    <p class="mb-1 relative inline-flex items-center gap-2"><span
                                            class="rounded-full w-2 h-2 inline-block bg-info-500"></span><span>Item04</span>
                                    </p>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i>
                                            +$763,43</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@endsection