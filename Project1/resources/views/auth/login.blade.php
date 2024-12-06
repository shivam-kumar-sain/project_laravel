<!doctype html>
<html lang="en" class="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    dir="ltr" data-pc-theme_contrast="" data-pc-theme="light"><!-- [Head] start -->
<head>
    <title>Login | CRM </title><!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded"><!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/fonts/inter/inter.css') }}" id="main-font-link">
    <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
</head><!-- [Head] end --><!-- [Body] Start -->
<body><!-- [ Pre-loader ] start -->
    <div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
        <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
            <div
                class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 transition-[transform_0.2s_linear] origin-left animate-[2.1s_cubic-bezier(0.65,0.815,0.735,0.395)_0s_infinite_normal_none_running_loader-animate]">
            </div>
        </div>
    </div><!-- [ Pre-loader ] End -->
    <div class="auth-main relative">
        <div class="auth-wrapper v2 flex items-center w-full h-full min-h-screen">
            <div class="auth-sidecontent"><img src="{{ asset('assets/images/authentication/img-auth-sideimg.jpg') }}"
                    alt="images" class="img-fluid h-screen hidden lg:block"></div>
            <div
                class="auth-form flex items-center justify-center grow flex-col min-h-screen bg-cover relative p-6 bg-theme-cardbg dark:bg-themedark-cardbg">
                <div class="card sm:my-12 w-full max-w-[480px] border-none shadow-none">
                    <div class="card-body sm:!p-10">
                        <div class="text-center"><a href="#"><img src="{{ asset('assets/images/logo-dark.svg') }}" alt="img"
                                    class="mx-auto"></a>
                            <div class="grid my-4"><button type="button"
                                    class="btn mt-2 flex items-center justify-center gap-2 text-theme-bodycolor dark:text-themedark-bodycolor bg-theme-bodybg dark:bg-themedark-bodybg border border-theme-border dark:border-themedark-border hover:border-primary-500 dark:hover:border-primary-500"><img
                                        src="{{ asset('assets/images/authentication/facebook.svg') }}" alt="img"> <span>Sign In
                                        with
                                        Facebook</span></button> <button type="button"
                                    class="btn mt-2 flex items-center justify-center gap-2 text-theme-bodycolor dark:text-themedark-bodycolor bg-theme-bodybg dark:bg-themedark-bodybg border border-theme-border dark:border-themedark-border hover:border-primary-500 dark:hover:border-primary-500"><img
                                        src="{{ asset('assets/images/authentication/twitter.svg') }}" alt="img"> <span>Sign In
                                        with
                                        Twitter</span></button> <button type="button"
                                    class="btn mt-2 flex items-center justify-center gap-2 text-theme-bodycolor dark:text-themedark-bodycolor bg-theme-bodybg dark:bg-themedark-bodybg border border-theme-border dark:border-themedark-border hover:border-primary-500 dark:hover:border-primary-500"><img
                                        src="{{ asset('assets/images/authentication/google.svg') }}" alt="img"> <span>Sign In
                                        with
                                        Google</span></button></div>
                        </div>
                        <div class="relative my-5">
                            <div aria-hidden="true" class="absolute flex inset-0 items-center">
                                <div class="w-full border-t border-theme-border dark:border-themedark-border"></div>
                            </div>
                            <div class="relative flex justify-center"><span
                                    class="px-4 bg-theme-cardbg dark:bg-themedark-cardbg">OR</span></div>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <h4 class="text-center font-medium mb-4">Login with your email</h4>
                            <div class="mb-3">
                                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="password" id="password" name="password" required class="form-control">
                            </div>
                            <div class="flex mt-1 justify-between items-center flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                        name="remember_me" checked>
                                    <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                                </div>
                                <h6 class="font-normal text-primary-500 mb-0">
                                    <a href="#">Forgot Password?</a>
                                </h6>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-full">Login</button>
                            </div>
                        </form>
                        <div class="mt-4">
                            @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="flex justify-between items-end flex-wrap mt-4">
                            <h6 class="f-w-500 mb-0">Don't have an Account?</h6><a href="{{ route('register') }}"
                                class="text-primary-500">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- [ Main Content ] end --><!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/icon/custom-icon.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/component.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>    
    <script>layout_change('false');</script>
    <script>layout_theme_contrast_change('false');</script>
    <script>change_box_container('false');</script>
    <script>layout_caption_change('true');</script>
    <script>layout_rtl_change('false');</script>
    <script>preset_change('preset-1');</script>
    <script>main_layout_change('vertical');</script>
</body>
</html>