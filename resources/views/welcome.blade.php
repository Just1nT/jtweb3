<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Justin Tannenbaum</title>
        <meta name="description" content="#"/>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    @include('layouts.nav')
    <body class="bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="font-display text-black text-4xl text-center mt-24">
                <h1>Welcome to My Product Portfolio</h1>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/stealth.jpg" alt="quiet emoji" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    UNDISCLOSED
                                </p>
                                <p class="text-gray-900 font-medium">
                                    a new HealthTech SaaS currently operating in stealth mode. Anticpated go to market, Q4 2019.
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #HealthTech #SaaS #B2B #Web
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/stratasan.jpg" alt="stratasan logo" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    UNDISCLOSED
                                </p>
                                <p class="text-gray-900 font-medium">
                                    a new enterprise product currently in development. Anticpiated go to market, Q1 2020.
                                </p>
                                <p class="mt-6">
                                    <!--<a href="paskr" class="font-display font-medium text-black hover:text-green-700 underline">VIEW CASE STUDY &rarr;</a>-->
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #HealthTech #Data #B2B #Web
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/abbott.jpg" alt="abbott logo" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    HeartMate Touch
                                </p>
                                <p class="text-gray-900 font-medium">
                                    HeartMate Touch is a BLE enabled iPad application that connects & communicates to an embeddable LVAD heart pump.
                                </p>
                                <p class="mt-6">
                                    <!--<a href="paskr" class="font-display font-medium text-black hover:text-green-700 underline">VIEW CASE STUDY &rarr;</a>-->
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #HealthTech #Bluetooth #B2B #iPad
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/paskr-macbook.jpg" alt="paskr web application on a macbook" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    PASKR
                                </p>
                                <p class="text-gray-900 font-medium">
                                    a cloud based commercial construction management solution built for every member of a construction team to bid, build, and track great projects.
                                </p>
                                <p class="mt-6">
                                    <!--<a href="paskr" class="font-display font-medium text-black hover:text-green-700 underline">VIEW CASE STUDY &rarr;</a>-->
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #ConstrucTech #SaaS #B2B #MultiPlatform
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/ingo.jpg" alt="ingo money check cashing application screenshots" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    INGO MONEY
                                </p>
                                <p class="text-gray-900 font-medium">
                                    is the instant money company. Founded in 2001 with a mission to digitize the paper check, their push payments technologies enables businesses and banks to instantly disburse safe-to-spend funds to almost any debit, credit or online wallet account.
                                </p>
                                <p class="mt-6">
                                    <!--<a href="ingo-money" class="font-display font-medium text-black hover:text-green-700 underline">VIEW CASE STUDY &rarr;</a>-->
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #FinTech #PaaS #B2C #B2B #Mobile #API
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/mothership.jpg" alt="mothership web application on a laptop" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    MOTHERSHIP
                                </p>
                                <p class="text-gray-900 font-medium">
                                    a first of its kind audience analytics solution. Acquired by FLO | Thinkery.
                                </p>
                                <p class="mt-6">
                                    <!--<a href="mothership" class="font-display font-medium text-black hover:text-green-700 underline">VIEW CASE STUDY &rarr;</a>-->
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #DataAnalytics #SaaS #B2B #MachineLearning
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/healthstream.jpg" alt="healthstream learning management system on a mac desktop" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    HEALTHSTREAM
                                </p>
                                <p class="text-gray-900 font-medium">
                                    (NASDAQ: HSTM) a suite of solutions used by approximately 4.8 million healthcare employees in the U.S. for workforce development, training & learning, talent, credentialing, privileging, provider enrollment, performance assessment, and managing simulation-based education programs.
                                </p>
                                <p class="mt-6">
                                    <!--<a href="mothership" class="font-display font-medium text-black hover:text-green-700 underline">VIEW CASE STUDY &rarr;</a>-->
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #HealthTech #SaaS #B2B2C #Web #Learning
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto px-8 py-16">
                <div class="relative">
                    <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden">
                        <div class="h-56 lg:h-auto lg:w-6/12 relative flex items-center justify-center">
                            <img class="absolute h-full w-full object-cover" src="/images/ea.jpg" alt="cover of ncca football 2010" />
                            <div class="absolute inset-0">
                            </div>
                        </div>
                        <div class="relative lg:w-6/12 bg-white">
                            <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <polygon points="50,0 100,0 50,100 0,100"/>
                            </svg>
                            <div class="font-display relative py-12 lg:py-24 px-8 lg:px-16 text-black leading-relaxed">
                                <p class="font-display mb-2 text-sm">
                                    <strong>PRODUCT</strong>
                                </p>
                                <p class="font-display mb-6 text-4xl">
                                    Electronic Arts
                                </p>
                                <p class="text-gray-900 font-medium">
                                    NCCA Football is a college football video game created by Electronic Arts. 
                                </p>
                                <p class="text-sm mt-12 text-black">
                                    #Gaming #Playstation #Xbox
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </body>
</html>
