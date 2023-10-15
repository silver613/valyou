<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="flex justify-between items-center container mx-auto py-5">
        <div class="w-2/12">
            <img src="{{ asset('image/logo_black.svg') }}" alt="Header_logo" class="w-48">
        </div>
        <div class="flex">
            <button class="outlined-btn block">
                <a href="/#">login/sign up</a>
                <span></span>
            </button>
            <button class="contained-btn block ml-4">
                <a href="/#">Token presale</a>
                <span></span>
            </button>
            <button class="hamburger w-10 p-3">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
    {{-- <div class="cursor-grab scrolling"> <span class="font-bold"> EXCHANGE RATES</span><span class="pink">:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                    alt=""
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e"
                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                alt=""
                src="https://stocks.valyoux.io/public/assets/images/valyoux/ethereum_logo_valyou_x_music.svg"
                decoding="async" data-nimg="intrinsic"
                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                srcset="https://stocks.valyoux.io/public/assets/images/valyoux/ethereum_logo_valyou_x_music.svg 1x, https://stocks.valyoux.io/public/assets/images/valyoux/ethereum_logo_valyou_x_music.svg 2x"><noscript></noscript></span>
        <p class="font-[500]">&nbsp;&nbsp;1 ETHEREUM (ETH) &nbsp;=&nbsp;</p>
        <p class="font-[500]">0.02776 BTC</p> &nbsp;=&nbsp; $<p class="font-[500]">1185.89000000 USD</p> &nbsp;&nbsp;<p
            class="text-[#00B8BA] font-[500]"> + 0.25% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e"
                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                alt="" src="https://stocks.valyoux.io/public/assets/images/valyoux/bitcoinlogo.svg"
                decoding="async" data-nimg="intrinsic"
                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                srcset="https://stocks.valyoux.io/public/assets/images/valyoux/bitcoinlogo.svg 1x, https://stocks.valyoux.io/public/assets/images/valyoux/bitcoinlogo.svg 2x"><noscript></noscript></span>
        <p class="font-[500]">&nbsp;&nbsp;1 BITCOIN (BTC) &nbsp;=&nbsp;</p>$<p class="font-[500]">20504.84000000 USD</p>
        &nbsp;&nbsp;<p class="text-red font-[500]"> - 0.15% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e"
                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                alt="" src="https://stocks.valyoux.io/public/assets/images/valyoux/vuxlogo.svg" decoding="async"
                data-nimg="intrinsic"
                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                srcset="https://stocks.valyoux.io/public/assets/images/valyoux/vuxlogo.svg 1x, https://stocks.valyoux.io/public/assets/images/valyoux/vuxlogo.svg 2x"><noscript></noscript></span>
        <p class="font-[500]">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $</p>
        <p class="font-[500]">1.00090000 USDC</p> &nbsp;&nbsp;<p class="text-red font-[500]"> - 0.1% </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e"
                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                alt="" src="https://stocks.valyoux.io/public/assets/images/valyoux/vuxlogo.svg" decoding="async"
                data-nimg="intrinsic"
                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                srcset="https://stocks.valyoux.io/public/assets/images/valyoux/vuxlogo.svg 1x, https://stocks.valyoux.io/public/assets/images/valyoux/vuxlogo.svg 2x"><noscript></noscript></span>
        <p class="font-[500]">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;</p>
        <p class="font-[500]">$0.50 USDC</p> &nbsp;&nbsp;<span
            style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e"
                    style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                srcset="/_next/image?url=%2Fassets%2Fupper_icon.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2Fassets%2Fupper_icon.png&amp;w=128&amp;q=75 2x"
                src="/_next/image?url=%2Fassets%2Fupper_icon.png&amp;w=128&amp;q=75" decoding="async"
                data-nimg="intrinsic"
                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
        <p class="text-[#00B8BA] font-[500]"> + 2.5% </p>&nbsp;&nbsp;&nbsp;
    </div> --}}

    <section class="container mx-auto my-24 flex flex-wrap justify-between items-center px-5">
        <div class="w-full md:w-1/2 md:pr-10">
            <div class="blockchain_bck">
                <p class="text-[#00B8BA] text-center font-[800]">The World's First Blockchain Powered</p>
            </div>
            <p class="font-bold musicArtistFont">
                Music Artist <span class="financial_stk musicArtistFont">Financial
                    Stock</span> Market
            </p>
            <p class="font-light" style="color: #505778">
                Linked to a new global music industry & economy powered by decentralised
                finance.
                Purchase NFT digital
                asset stocks in any Upcoming, Independent & Major Artist brand & receive a portion of their revenue as
                dividends for holding their stock.
            </p>

            <div class="flex items-center justify-center lg:justify-start flex-row w-fit mt-4">
                <button class="gradient-btn w-[200px] h-14 text-[8px]" type="button">
                    Get early access
                </button>
                <div class="ellipse">
                    <div class="playArrow">
                        <svg fill="#ff0093" width="25px" height="25px" focusable="false" aria-hidden="true"
                            viewBox="0 0 24 24" data-testid="PlayArrowIcon">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-[14px] block">Watch Video</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 md:pl-10 mt-10 md:mt-0">
            <img src="{{ asset('image/valyoux_img.webp') }}" alt="hero_img">
        </div>
    </section>

    <section class="container mx-auto py-10 text-center card-shadow rounded-xl">
        <h2 class="text-4xl font-bold">Valyou X - Is A Multi Award Winning Start-Up</h2>
    </section>

    <section class="container flex flex-wrap mx-auto justify-between my-10">
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
        <div class="card-shadow my-2 brand-card flex justify-center flex-col rounded-xl py-4 gap-3">
            <div class="w-full">
                <img class="w-5/12 mx-auto block" src="{{ asset('image/alibaba.png') }}" alt="alibaba_brand">
            </div>
            <p class="text-xs font-light text-center">Alibaba Group Award Winner</p>
        </div>
    </section>

    <section class="container mx-auto px-2 py-8 card-shadow my-10">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full md:w-1/2 md:pr-20">
                <div class="w-full">
                    <img class="rounded-xl" src="{{ asset('image/singer.jpeg') }}" alt="singer_image">
                </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-20">
                <p class="building-font font-bold ">
                    We are <span class="rebuilding"> rebuilding </span> the <span class="rebuild_music">music</span>
                    industry
                </p>
                <p class="font-light" style="color: #595771">Valyou X is creating the world’s first music artist
                    stock
                    and financial market, where you can invest
                    in music artists’ brands, as listed stocks. Blockchain Technology is at the heart of it. However,
                    first to begin, we must rebuild the entire music industry in order to serve as a globally scalable
                    digital hub for the entire music industry. A platform that enables aspiring artists to use their
                    music to launch a profitable business and then connects to the financial markets trusted by
                    Blockchain.</p>
            </div>
        </div>
    </section>

    <section class="container text-center mx-auto">
        <h2 class="font-bold text-5xl">See <span class="how-it font-bold">how it</span> works</h2>
        <p class="font-light p-4 text-center">
            <span class="w-2/5">All users, Music Artists, Fans as investors and
                Businessess buy Valyou X tokens for access into the app. </span>
        </p>

        <img class="block mx-auto" src="{{ asset('image/howitworks.svg') }}" alt="how_it_works">
    </section>

    <section class="container mx-auto">
        <h2 class="text-4xl m-10 font-bold p-4 text-center">Main <span class="pink_gradient">Problems</span> &amp;
            Solutions</h2>
        <div class="detail">
            <details class="text-left music">
                <summary class="music-summary">
                    <div class="flex">
                        <p class="text-left text-3xl font-bold"> Music Artist.</p>
                    </div>
                </summary>
                <ul>
                    <li class="py-2 cursor-pointer"><span>Cost to launch music career Independently is very expensive,
                            estimated around $500K to $2M</span></li>
                    <li class="py-2 cursor-pointer"><span>An exchange where Music artists list as their own startups,
                            music fans can invest.</span></li><br>
                    <li class="py-2 cursor-pointer"><span>Streaming platforms significantly shortchanges the value of
                            the average music artist.</span></li>
                    <li class="py-2 cursor-pointer"><span>DEFI pay per/view streaming with increased NFT value for
                            unlimited song access.</span></li><br>
                    <li class="py-2 cursor-pointer"><span>No way to connect with quality assured reputable music
                            industry professionals.</span></li>
                    <li class="py-2 cursor-pointer"><span>Marketplace to connect businesses offering pro services to
                            listed artists brands.</span></li><br>
                    <li class="py-2 cursor-pointer"><span>Artists lack a business mindset and understanding of music
                            industry contracts.</span></li>
                    <li class="py-2 cursor-pointer"><span>Smart Contract &amp; Fund Management, reduce risk &amp; still
                            maximise profits for investors.</span></li><br>
                    <li class="py-2 cursor-pointer"><span>Upcoming, Independent &amp; Major Artists. All artists can
                            get listed and raise the capital they need to launch or enhance their music careers or
                            brand. Imagine 20,000 of your true fans invested $100 that is $2,000,000 for you to build
                            your brand and stay in control of your business independent or signed inside a new global
                            music Industry and artist focused economy.</span></li>
                </ul>
            </details>
            <details class="text-left music">
                <summary class="music-summary">
                    <p class="text-left text-3xl font-bold "> Investors. </p>
                </summary>
                <ul>
                    <li>Imagine at the click of a button you could own a share in Justin Bieber, Beyonce's brand? Most
                        importantly imagine investing in your friend, or favourite upcoming artists that you discovered
                        or follow online and got paid a profit share of the royalties generated from that artist brand
                        directly into your account digital wallet, as a return on investment from their brands growth in
                        revenue generated across the industry.</li><br>
                    <li>Most people have a friend or family aspiring to become music artists. Record labels simply
                        cannot sign every single artist on the planet.</li><br>
                    <li>Artist brands, such as Jay Z, Kanye West who are worth billions through successful music
                        careers, the establishment and funding of their own music label, and making smart investments.
                        Assume you had the option to invest into it, into their brand when they were upcoming startup
                        artists and held that stock till now with an opportunity for generating passive income from
                        royalties &amp; being a true fan with skin in the game automatically sharing in their success.
                    </li>
                </ul>
            </details>
            <details class="text-left music">
                <summary class="music-summary">
                    <p class="text-left text-3xl font-bold "> Business. </p>
                </summary>All businesses, freelancers services can connect and grow with artist brands, such as
                Producers, Song writers, Beat maker, Advertisers, Radio, Influencers, Artist managers, Record labels,
                Spotify, YouTube, Soundcloud + more.
            </details>
            <details class="text-left music">
                <summary class="music-summary">
                    <p class="text-left text-3xl font-bold"> Blockchain. </p>
                </summary>The Valyou X Token is a cryptocurrency that is required for entry into the new global Global
                Music Industry.By staking Valyou X tokens against the platform' s stable currency VXD. It may be used
                for payments, streaming, and investment in tokenised music artist brands as a new type of digital asset,
                enhancing investor confidence and preventing fraud.
            </details>
        </div>
    </section>

    <footer>
        <div class="bg-black ml-[-10px]">
            <div class="flex flex-col items-center justify-center container mx-auto pt-10 pb-6">
                <div class="ml-[-50px]"><span
                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                alt="" aria-hidden="true" src="{{ asset('image/logo_white.svg') }}"
                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                            alt="valyoux" src="/assets/logo_white.svg" decoding="async" data-nimg="intrinsic"
                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                            srcset="/assets/logo_white.svg 1x, /assets/logo_white.svg 2x"><noscript></noscript></span>
                </div>
                <div class="flex justify-center items-center">
                    <svg class="color-white icon-margin css-vubbuv" focusable="false" viewBox="0 0 24 24"
                        data-testid="InstagramIcon">
                        <path
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                        </path>
                    </svg>
                    &nbsp;&nbsp;
                    <svg class="color-white icon-margin css-vubbuv" focusable="false" viewBox="0 0 24 24"
                        data-testid="FacebookIcon">
                        <path
                            d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z">
                        </path>
                    </svg>
                    &nbsp;&nbsp;
                    <svg class="color-white icon-margin css-vubbuv" focusable="false" viewBox="0 0 24 24"
                        data-testid="TwitterIcon">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z">
                        </path>
                    </svg>
                    &nbsp;&nbsp;
                    <svg class="color-white icon-margin css-vubbuv" focusable="false" viewBox="0 0 24 24"
                        data-testid="GitHubIcon">
                        <path
                            d="M12 1.27a11 11 0 00-3.48 21.46c.55.09.73-.28.73-.55v-1.84c-3.03.64-3.67-1.46-3.67-1.46-.55-1.29-1.28-1.65-1.28-1.65-.92-.65.1-.65.1-.65 1.1 0 1.73 1.1 1.73 1.1.92 1.65 2.57 1.2 3.21.92a2 2 0 01.64-1.47c-2.47-.27-5.04-1.19-5.04-5.5 0-1.1.46-2.1 1.2-2.84a3.76 3.76 0 010-2.93s.91-.28 3.11 1.1c1.8-.49 3.7-.49 5.5 0 2.1-1.38 3.02-1.1 3.02-1.1a3.76 3.76 0 010 2.93c.83.74 1.2 1.74 1.2 2.94 0 4.21-2.57 5.13-5.04 5.4.45.37.82.92.82 2.02v3.03c0 .27.1.64.73.55A11 11 0 0012 1.27">
                        </path>
                    </svg>
                    &nbsp;&nbsp;
                </div>
                <br>
                <hr>
                <div class="footer_text text-white">
                    <p class="text-white p-5 text-[12px]">All images with or without permission and its terms of use as
                        modified are simply for demo purposes. Valyou X isn’t intending to mislead or misrepresent any
                        artist listed. We just want the world to be able to better understand the idea, our vision and
                        to better assist us with its execution.</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
