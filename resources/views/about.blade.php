<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <nav class="flex items-center justify-between flex-wrap bg-black mt-4 p-6">
        <div class="flex items-center flex-shrink-0 text-white lg:ml-8 mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight">Justin Tannenbaum</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="relative right-0 w-full block flex-grow lg:flex lg:absolute lg:items-center lg:w-auto mr-8">
            <div class="font-display text-md lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-6">
                    WORK
                </a>
                <a href="/about" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-6">
                    ABOUT
                </a>
                <a href="mailto:justinedwardtannenbaum@gmail.com" class="block mt-4 mr-6 lg:inline-block lg:mt-0 text-white">
                    CONTACT
                </a>
            </div>
        </div>
    </nav>
    <body class="bg-black">
      <div class="container mx-auto px-4">
        <div class="flex mb-4">
          <div class="w-1/2 bg-black">
            <div class="flex bg-cover bg-center w-64 h-64 ml-6 mt-24 rounded-full flex shadow-lg border-4 border-white" alt="Justin Tannenbaum" style="background-image: url(images/justin-tannenbaum.jpg)">
            </div>
              <p class="font-display text-lg text-white ml-6 mt-8">Say Hi...👋</p>
              <p class="font-display text-lg text-white ml-6 mt-2">LinkedIn</p>
              <p class="font-display text-lg text-white ml-6 mt-2">Twitter</p>
              <p class="font-display text-lg text-white ml-6 mt-2">Github</p>
          </div>
          <div class="w-1/2 bg-black">
            <p class="font-display text-lg text-white ml-6 mr-4 mt-24">
              Hey y'all, I am a strategic digital product leader based in Nashville, TN. I consult & freelance on product design, development, and management through my company JET Digital. I’m passionate about building empathetic user experiences and enjoy working on teams that believe in leveraging technology to make the world a better place.
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4 mt-12">
              In my free time, I am into golf, food, and The Unversity of Tennessee Atheltics.
            </p>
            <p class="font-display text-xl text-white ml-6 mr-4 mt-12">
              <b>Experience</b>
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>JAN 2019 - PRESENT</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Principal, JET Digital
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>JAN 2017 - JAN 2019</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Director Product Marketing, PASKR
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>AUG 2015 - JAN 2017</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Director Strategic Initiatives, Ingo Money
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>OCT 2014 - AUG 2015</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Head of Product, The Mothership
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>MAY 2013 - OCT 2014</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Project Manager, Healthstream
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>NOV 2012 - MAY 2013</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Product Manager (Contract), State of TN OISDCS
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>JAN 2011 - NOV 2012</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Product Manager, Agra Avant Garde
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>MAY 2010 - JAN 2011</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Business Systems Analyst (Contract), Primary Care Associates
            </p>
            <p class="font-display text-sm text-white ml-6 mr-4 mt-4">
              <b>AUG 2008 - MAY 2010</b>
            </p>
            <p class="font-display text-lg text-white ml-6 mr-4">
              Marketing Associate, Electronic Arts
            </p>
            <p class="font-display text-white text-md ml-6 mr-4 mt-12">
              Designed and developed by Justin Tannenbaum with <a href="https://tailwindcss.com/" class="underline" target="_blank">Tailwind CSS</a> and the <a href="https://laravel.com/" target="_blank" class="underline">Laravel Framework</a>. View the source for this project <a href="https://github.com/Just1nT/jtweb3#jtweb3" target="_blank" class="underline">here</a>.
            </p>
          </div>
        </div>
      </div>
    </body>
</html>
