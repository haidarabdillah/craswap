<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Craswap</title>
        <link rel="shortcut icon" href="{{ asset('images/logo-short.png') }}" type="image/x-icon">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased bg-black overflow-x-hidden">
        @include('navbar')
        <div class="bg-black max-w-[1920px] mx-auto">
            <img id="background" class="hidden md:hidden lg:block absolute z-0 max-w-[1920px]" src="{{asset('images/main-bg.png')}}" />
            <div class="relative min-h-screen flex flex-col items-start justify-start selection:bg-primary selection:text-white">
                <div class="w-full">
                    <main class="mt-20 items-start">
                        <div class="bg-transparent text-white">
                            <div class="flex flex-col justify-center items-center gap-6 px-4 lg:px-[92px] py-[32px]">
                                <p class="order-1 uppercase font-bold text-center text-[30px] md:text-[32px] lg:text-[70px] leading-9 md:leading-9 lg:leading-[84px]">
                                    Discovering <span class="text-primary">Hidden Gems</span>:Investing Through Crypto <span class="text-primary">WITH CRASWAP</span>
                                </p>
                                <p class="order-3 lg:order-2 text-gray-font text-center max-w-[844px] mx-auto font-normal text-lg">The Benefits of Launchpads: Why Early-Stage Investments Through Launchpads Can Be Highly Profitable and Transformative.</p>
                                <button class="order-4 lg:order-3 shadow-button bg-primary text-white p-[16px] text-[14px] md:text-sm rounded-full font-semibold w-[290px]">Join Mining Now</button>
                                <img src="{{ asset('images/Hero.svg') }}" alt="" class="order-2 lg:order-4 mx-auto w-full h-auto md:h-full transform lg:scale-100 -translate-y-10 md:-translate-y-10 lg:-translate-y-20 2xl:-translate-y-28 ">

                            </div>

                        </div>
                        <div class="bg-transparent bg- bg-cover h-fit lg:h-[494px] px-4 lg:px-[92px] py-[32px] flex flex-col justify-center items-center" style="background-image: url('{{ asset('images/platforms.png') }}');">
                            <p class="uppercase font-bold text-center text-white max-w-[1341px] text-[30px] md:text-[32px] lg:text-[70px] leading-9 md:leading-9 lg:leading-[84px] mb-4">
                                Find <span class="text-primary">Craswap</span>on These Supporting Platforms
                            </p>
                            <p class="text-gray-font text-center max-w-[844px] mx-auto font-normal text-lg mb-8">The Discover Craswap on leading platforms that support and list our token</p>
                            <div class="flex flex-wrap items-center justify-center gap-4 lg:gap-[45px]">
                                <img src="{{ asset('images/platforms/metamask.png') }}" alt="" class="max-w-[100px] lg:max-w-[265px] ">
                                <img src="{{ asset('images/platforms/trust.png') }}" alt="" class="max-w-[100px] lg:max-w-[265px] ">
                                <img src="{{ asset('images/platforms/phantom.png') }}" alt="" class="max-w-[100px] lg:max-w-[265px] ">
                                <img src="{{ asset('images/platforms/coinbase.png') }}" alt="" class="max-w-[100px] lg:max-w-[265px] ">
                                <img src="{{ asset('images/platforms/rainbow.png') }}" alt="" class="max-w-[100px] lg:max-w-[265px] ">
                            </div>
                        </div>
                        <div class="bg-black px-4 lg:px-[92px] py-[32px] space-y-4 lg:space-y-6">
                            <div class="flex flex-col">
                                <p class="text-white font-medium text-xl">Services</p>
                                <div class="flex flex-col lg:flex-row w-full">
                                    <div class="flex flex-col justify-center items-start max-w-[1403px] me-auto">
                                        <p class="uppercase text-primary font-bold text-[30px] lg:text-[64px]">CraSwap<span class="text-white">best services </span></p>
                                        <p class="text-gray-font text-[12px] lg:text-[18px] font-normal">Craswap is founded on four fundamental principles: Reliable, Easy, Smart, and Optimized, serving as the bedrock for it’s evolution into a DeFi platform on the multichains network, offering numerous advantages.</p>
                                    </div>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                <div class="w-full rounded-[12px] bg-gray-background flex flex-col justify-center items-center px-6 py-8">
                                    <img src="{{asset('/images/rocket.png')}}" alt="">
                                    <p class="text-white text-[16px] lg:text-[24px] font-semibold mt-4 text-center">Decentralization and Security</p>
                                    <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 text-center">Enjoy enhanced security and control by using personal wallets for authentication and asset management.</p>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>

                                <div class="w-full rounded-[12px] bg-gray-background flex flex-col justify-center items-center px-6 py-8">
                                    <img src="{{asset('/images/rocket.png')}}" alt="">
                                    <p class="text-white text-[16px] lg:text-[24px] font-semibold mt-4 text-center">Developer Freedom</p>
                                    <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 text-center">Developers can easily list their tokens, create staking, and launch new projects without needing admin approval.</p>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>

                                <div class="w-full rounded-[12px] bg-gray-background flex flex-col justify-center items-center px-6 py-8">
                                    <img src="{{asset('/images/rocket.png')}}" alt="">
                                    <p class="text-white text-[16px] lg:text-[24px] font-semibold mt-4 text-center">User-Friendly Interface</p>
                                    <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 text-center">Navigate effortlessly with our intuitive and easy-to-use platform design and based on
                                        user experiences</p>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>

                                <div class="w-full rounded-[12px] bg-gray-background flex flex-col justify-center items-center px-6 py-8">
                                    <img src="{{asset('/images/rocket.png')}}" alt="">
                                    <p class="text-white text-[16px] lg:text-[24px] font-semibold mt-4 text-center">Trading Flexibility</p>
                                    <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 text-center">Experience seamless trading with our order book system, enabling limit orders and efficient trade matching.</p>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>

                                <div class="w-full rounded-[12px] bg-gray-background flex flex-col justify-center items-center px-6 py-8">
                                    <img src="{{asset('/images/rocket.png')}}" alt="">
                                    <p class="text-white text-[16px] lg:text-[24px] font-semibold mt-4 text-center">Smart Contracts</p>
                                    <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 text-center">Benefit from the transparency and security of smart contracts, reducing the risk of manipulation</p>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>

                                <div class="w-full rounded-[12px] bg-gray-background flex flex-col justify-center items-center px-6 py-8">
                                    <img src="{{asset('/images/rocket.png')}}" alt="">
                                    <p class="text-white text-[16px] lg:text-[24px] font-semibold mt-4 text-center">High Liquidity</p>
                                    <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 text-center">Access deep liquidity pools that ensure smooth and efficient trading experiences</p>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-white font-medium text-xl">Decentralized Trade and Swap</p>
                                <div class="flex flex-col lg:flex-row w-full">
                                    <div class="flex flex-col justify-center items-start max-w-[1403px] me-auto">
                                        <p class="uppercase text-primary font-bold text-[30px] lg:text-[64px]">CraSwap<span class="text-white">Developer Freedom </span></p>
                                        <p class="text-gray-font text-[12px] lg:text-[18px] font-normal">Craswap is an innovative decentralized exchange (DEX) platform, giving developers complete freedom to build and innovate on top of its protocol. With Craswap , anyone can launch tokens, create liquidity pools, and participate in the ever-growing decentralized finance ecosystem</p>
                                    </div>
                                    <div class="flex flex-row justify-start items-center space-x-2">
                                        <p class="text-primary text-[12px] lg:text-[14px]">Learn More</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M17.3172 10.9546L11.6922 16.5796C11.5749 16.6969 11.4159 16.7628 11.25 16.7628C11.0841 16.7628 10.9251 16.6969 10.8078 16.5796C10.6905 16.4623 10.6247 16.3033 10.6247 16.1374C10.6247 15.9716 10.6905 15.8125 10.8078 15.6952L15.3664 11.1374H3.125C2.95924 11.1374 2.80027 11.0716 2.68306 10.9544C2.56585 10.8372 2.5 10.6782 2.5 10.5124C2.5 10.3467 2.56585 10.1877 2.68306 10.0705C2.80027 9.95328 2.95924 9.88743 3.125 9.88743H15.3664L10.8078 5.32962C10.6905 5.21234 10.6247 5.05328 10.6247 4.88743C10.6247 4.72158 10.6905 4.56252 10.8078 4.44524C10.9251 4.32797 11.0841 4.26208 11.25 4.26208C11.4159 4.26208 11.5749 4.32797 11.6922 4.44524L17.3172 10.0702C17.3753 10.1283 17.4214 10.1972 17.4529 10.2731C17.4843 10.349 17.5005 10.4303 17.5005 10.5124C17.5005 10.5946 17.4843 10.6759 17.4529 10.7518C17.4214 10.8276 17.3753 10.8966 17.3172 10.9546Z" fill="#EDB44E"/>
                                          </svg>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-6">
                                    <div class="w-full rounded-[12px] bg-gray-background flex flex-row justify-start items-start px-6 py-8">
                                        <div class="flex flex-col ml-2">
                                            <div class="flex flex-row justify-start items-center space-x-2">
                                                <div class="rounded-full px-[8px] py-[5px] bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.98874 3.59663C2.66611 4.15437 1.95243 4.34496 1.39469 4.02233C0.836954 3.69969 0.646365 2.98601 0.968999 2.42827C1.5724 1.38516 2.70308 0.679119 4.00005 0.679119C5.93304 0.679119 7.50005 2.24612 7.50005 4.17912C7.50003 5.4598 6.71443 6.50543 5.75005 7.09579C4.9754 7.56999 5.45838 8.84579 3.99699 8.84579C3.35266 8.84579 2.83032 8.32345 2.83032 7.67912C2.83032 7.63816 2.83243 7.59769 2.83655 7.55782C2.86891 6.94081 3.14403 6.43877 3.44359 6.07372C3.75996 5.68817 4.1759 5.37345 4.49396 5.18437C6.26346 4.13245 4.10525 1.98042 2.98874 3.59663ZM3.99699 10.0125C3.35266 10.0125 2.83032 10.5348 2.83032 11.1791C2.83032 11.8235 3.35266 12.3458 3.99699 12.3458C4.64132 12.3458 5.16366 11.8235 5.16366 11.1791C5.16366 10.5348 4.64132 10.0125 3.99699 10.0125Z" fill="white"/>
                                                      </svg>
                                                </div>
                                                <p class="text-white text-[16px] lg:text-[24px] font-semibold text-left">Decentralization and Security</p>
                                            </div>
                                            <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 ml-[32px] text-left">Enjoy enhanced security and control by using personal wallets for authentication and asset management.</p>
                                        </div>
                                    </div>
                                    <div class="w-full rounded-[12px] bg-gray-background flex flex-row justify-start items-start px-6 py-8">
                                        <div class="flex flex-col ml-2">
                                            <div class="flex flex-row justify-start items-center space-x-2">
                                                <div class="rounded-full px-[8px] py-[5px] bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.98874 3.59663C2.66611 4.15437 1.95243 4.34496 1.39469 4.02233C0.836954 3.69969 0.646365 2.98601 0.968999 2.42827C1.5724 1.38516 2.70308 0.679119 4.00005 0.679119C5.93304 0.679119 7.50005 2.24612 7.50005 4.17912C7.50003 5.4598 6.71443 6.50543 5.75005 7.09579C4.9754 7.56999 5.45838 8.84579 3.99699 8.84579C3.35266 8.84579 2.83032 8.32345 2.83032 7.67912C2.83032 7.63816 2.83243 7.59769 2.83655 7.55782C2.86891 6.94081 3.14403 6.43877 3.44359 6.07372C3.75996 5.68817 4.1759 5.37345 4.49396 5.18437C6.26346 4.13245 4.10525 1.98042 2.98874 3.59663ZM3.99699 10.0125C3.35266 10.0125 2.83032 10.5348 2.83032 11.1791C2.83032 11.8235 3.35266 12.3458 3.99699 12.3458C4.64132 12.3458 5.16366 11.8235 5.16366 11.1791C5.16366 10.5348 4.64132 10.0125 3.99699 10.0125Z" fill="white"/>
                                                      </svg>
                                                </div>
                                                <p class="text-white text-[16px] lg:text-[24px] font-semibold text-left">Custom Staking Programs</p>
                                            </div>
                                            <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 ml-[32px] text-left">Create your own staking programs and offer rewards to your community</p>
                                        </div>
                                    </div>
                                    <div class="w-full rounded-[12px] bg-gray-background flex flex-row justify-start items-start px-6 py-8">
                                        <div class="flex flex-col ml-2">
                                            <div class="flex flex-row justify-start items-center space-x-2">
                                                <div class="rounded-full px-[8px] py-[5px] bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.98874 3.59663C2.66611 4.15437 1.95243 4.34496 1.39469 4.02233C0.836954 3.69969 0.646365 2.98601 0.968999 2.42827C1.5724 1.38516 2.70308 0.679119 4.00005 0.679119C5.93304 0.679119 7.50005 2.24612 7.50005 4.17912C7.50003 5.4598 6.71443 6.50543 5.75005 7.09579C4.9754 7.56999 5.45838 8.84579 3.99699 8.84579C3.35266 8.84579 2.83032 8.32345 2.83032 7.67912C2.83032 7.63816 2.83243 7.59769 2.83655 7.55782C2.86891 6.94081 3.14403 6.43877 3.44359 6.07372C3.75996 5.68817 4.1759 5.37345 4.49396 5.18437C6.26346 4.13245 4.10525 1.98042 2.98874 3.59663ZM3.99699 10.0125C3.35266 10.0125 2.83032 10.5348 2.83032 11.1791C2.83032 11.8235 3.35266 12.3458 3.99699 12.3458C4.64132 12.3458 5.16366 11.8235 5.16366 11.1791C5.16366 10.5348 4.64132 10.0125 3.99699 10.0125Z" fill="white"/>
                                                      </svg>
                                                </div>
                                                <p class="text-white text-[16px] lg:text-[24px] font-semibold text-left">Independent Launchpad</p>
                                            </div>
                                            <p class="text-gray-font text-[12px] lg:text-[18px]  font-normal mb-4 ml-[32px] text-left">Launch new tokens or projects with our self-managed launchpad, completely admin-free</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-cover px-4 py-8 lg:px-[106px] lg:py-[72px] space-y-4 lg:space-y-6 grid grid-cols-1 lg:grid-cols-2" style="background-image: url('{{ asset('images/features.png') }}');">
                            <div class="flex flex-col space-y-6 w-full">
                                <p class="text-white font-medium text-xl text-center lg:text-left">Decentralized Trade and Swap</p>
                                <div class="flex flex-col lg:flex-row w-full mb-10">
                                    <div class="flex flex-col justify-center items-start max-w-[1403px] me-auto space-y-6">
                                        <p class="uppercase text-primary font-bold text-[30px] lg:text-[64px] lg:leading-[64px] text-center lg:text-left"><span class="text-white">Access the Powerful and Helpful Features</span>Helpful Features.</p>
                                        <p class="text-gray-font text-[12px] lg:text-[18px] font-normal text-center lg:text-left">Craswap is a decentralized exchange platform that puts powerful and helpful tools directly in your hands.  Swap tokens, earn yield, and participate in the growing DeFi ecosystem with a platform built for you.</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div class="w-full">
                                        <p class="text-white text-[14px] lg:text-[24px]">Swap</p>
                                        <p class="text-gray-font text-[12px] lg:text-[24px]">Companies use lorem ipsum dolor sit amet non deserunt</p>
                                    </div>
                                    <div class="w-full">
                                        <p class="text-white text-[14px] lg:text-[24px]">Staking</p>
                                        <p class="text-gray-font text-[12px] lg:text-[24px]">Countries use lorem ipsum dolor sit amet non deserunt  </p>
                                    </div>
                                    <div class="w-full">
                                        <p class="text-white text-[14px] lg:text-[24px]">Bridging</p>
                                        <p class="text-gray-font text-[12px] lg:text-[24px]">Customer satisfaction use lorem ipsum dolor sit amet non deserunt</p>
                                    </div>

                                    <div class="w-full">
                                        <p class="text-white text-[14px] lg:text-[24px]">Launchpad</p>
                                        <p class="text-gray-font text-[12px] lg:text-[24px]">Issue resolved use lorem ipsum dolor sit amet non deserunt</p>
                                    </div>

                                    <div class="w-full">
                                        <p class="text-white text-[14px] lg:text-[24px]">Farming</p>
                                        <p class="text-gray-font text-[12px] lg:text-[24px]">Issue resolved use lorem ipsum dolor sit amet non deserunt</p>
                                    </div>

                                    <div class="w-full">
                                        <p class="text-white text-[14px] lg:text-[24px]">Liquidity</p>
                                        <p class="text-gray-font text-[12px] lg:text-[24px]">Issue resolved use lorem ipsum dolor sit amet non deserunt</p>
                                    </div>
                                </div>
                                <button class="shadow-button lg:flex transform bg-primary rounded-full p-[16px] font-semibold w-fit lg:w-[290px]  flex-row space-x-2 items-center justify-center">
                                    <p class="text-white text-[14px] md:text-sm ">Join Download Whitepaper</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <path d="M17.3172 10.4546L11.6922 16.0796C11.5749 16.1969 11.4159 16.2628 11.25 16.2628C11.0841 16.2628 10.9251 16.1969 10.8078 16.0796C10.6905 15.9623 10.6247 15.8033 10.6247 15.6374C10.6247 15.4716 10.6905 15.3125 10.8078 15.1952L15.3664 10.6374H3.125C2.95924 10.6374 2.80027 10.5716 2.68306 10.4544C2.56585 10.3372 2.5 10.1782 2.5 10.0124C2.5 9.84667 2.56585 9.6877 2.68306 9.57049C2.80027 9.45328 2.95924 9.38743 3.125 9.38743H15.3664L10.8078 4.82962C10.6905 4.71234 10.6247 4.55328 10.6247 4.38743C10.6247 4.22158 10.6905 4.06252 10.8078 3.94524C10.9251 3.82797 11.0841 3.76208 11.25 3.76208C11.4159 3.76208 11.5749 3.82797 11.6922 3.94524L17.3172 9.57024C17.3753 9.62829 17.4214 9.69722 17.4529 9.77309C17.4843 9.84897 17.5005 9.9303 17.5005 10.0124C17.5005 10.0946 17.4843 10.1759 17.4529 10.2518C17.4214 10.3276 17.3753 10.3966 17.3172 10.4546Z" fill="white"/>
                                      </svg>
                                </button>
                            </div>
                            <div class="m-auto w-full flex items-center content-center">
                                <img src="{{asset('images/mockup.png')}}" class="w-full" alt="">
                            </div>
                            <button class="shadow-button flex mx-auto lg:hidden transform bg-primary rounded-full p-[16px] font-semibold w-fit lg:w-[290px]  flex-row space-x-2 items-center justify-center">
                                <p class="text-white text-[14px] md:text-sm ">Join Download Whitepaper</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path d="M17.3172 10.4546L11.6922 16.0796C11.5749 16.1969 11.4159 16.2628 11.25 16.2628C11.0841 16.2628 10.9251 16.1969 10.8078 16.0796C10.6905 15.9623 10.6247 15.8033 10.6247 15.6374C10.6247 15.4716 10.6905 15.3125 10.8078 15.1952L15.3664 10.6374H3.125C2.95924 10.6374 2.80027 10.5716 2.68306 10.4544C2.56585 10.3372 2.5 10.1782 2.5 10.0124C2.5 9.84667 2.56585 9.6877 2.68306 9.57049C2.80027 9.45328 2.95924 9.38743 3.125 9.38743H15.3664L10.8078 4.82962C10.6905 4.71234 10.6247 4.55328 10.6247 4.38743C10.6247 4.22158 10.6905 4.06252 10.8078 3.94524C10.9251 3.82797 11.0841 3.76208 11.25 3.76208C11.4159 3.76208 11.5749 3.82797 11.6922 3.94524L17.3172 9.57024C17.3753 9.62829 17.4214 9.69722 17.4529 9.77309C17.4843 9.84897 17.5005 9.9303 17.5005 10.0124C17.5005 10.0946 17.4843 10.1759 17.4529 10.2518C17.4214 10.3276 17.3753 10.3966 17.3172 10.4546Z" fill="white"/>
                                  </svg>
                            </button>
                            
                        </div>
                    </main>
                </div>
            </div>
        </div>
        
        @include('footer')

        @vite('resources/js/app.js')
        @yield('script')
    </body>
</html>
