<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Justin Tannenbaum a Nashville Digital Product</title>
        <meta name="description" content="#"/>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45906229-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-45906229-1');
        </script>
    </head>
    @include('layouts.nav')
    <body class="bg-gray-100">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap mb-4">
          <div class="lg:w-1/2">
            <div class="flex bg-cover bg-center w-64 h-64 mt-24 lg:mx-16 rounded-full flex shadow-lg border-4 border-white" alt="Justin Tannenbaum" style="background-image: url(images/justin-tannenbaum.jpg)">
          </div>
            <div class="mt-8 lg:mx-24">
              <a href="https://www.linkedin.com/in/justin-tannenbaum/" target="_blank">
                <svg class="inline fill-current text-black ml-6" data-v-0a606064="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 512 512">
                  <path data-v-0a606064="" d="M29.675 177.275l92.784-1.157v303.831l-92.784 1.178v-303.851z"></path>
                  <path data-v-0a606064="" d="M200.141 177.275l88.658-1.126v38.646l0.021 10.947c26.255-25.744 53.32-45.2 96.563-45.2 51.016 0 100.362 21.381 100.362 91.034v208.435l-90 1.341v-159.232c0-35.103-8.796-57.733-50.719-57.733-36.935 0-52.398 6.615-52.398 55.214v160.399l-92.478 1.116v-303.841z"></path>
                  <path data-v-0a606064="" d="M127.836 81.449c0 28.051-22.74 50.79-50.79 50.79s-50.791-22.739-50.791-50.791c0-28.051 22.739-50.791 50.791-50.791 28.051 0 50.791 22.739 50.791 50.791z"></path>
                </svg>
              </a>
              <a href="https://twitter.com/JETannenbaum" target="_blank">
                <svg class="inline fill-current text-black ml-6" version="1.1" id="White" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25"
                viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">>
                 <path class="st0" d="M400,200c0,110.5-89.5,200-200,200S0,310.5,0,200S89.5,0,200,0S400,89.5,400,200z M163.4,305.5
                   c88.7,0,137.2-73.5,137.2-137.2c0-2.1,0-4.2-0.1-6.2c9.4-6.8,17.6-15.3,24.1-25c-8.6,3.8-17.9,6.4-27.7,7.6
                   c10-6,17.6-15.4,21.2-26.7c-9.3,5.5-19.6,9.5-30.6,11.7c-8.8-9.4-21.3-15.2-35.2-15.2c-26.6,0-48.2,21.6-48.2,48.2
                   c0,3.8,0.4,7.5,1.3,11c-40.1-2-75.6-21.2-99.4-50.4c-4.1,7.1-6.5,15.4-6.5,24.2c0,16.7,8.5,31.5,21.5,40.1c-7.9-0.2-15.3-2.4-21.8-6
                   c0,0.2,0,0.4,0,0.6c0,23.4,16.6,42.8,38.7,47.3c-4,1.1-8.3,1.7-12.7,1.7c-3.1,0-6.1-0.3-9.1-0.9c6.1,19.2,23.9,33.1,45,33.5
                   c-16.5,12.9-37.3,20.6-59.9,20.6c-3.9,0-7.7-0.2-11.5-0.7C110.8,297.5,136.2,305.5,163.4,305.5"/>
                </svg>
              </a>
              <a href="https://github.com/Just1nT" target="_blank">
                <svg class="inline fill-current text-black ml-6"data-v-0a606064="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 32.6 31.8" xml:space="preserve">
                  <style data-v-0a606064="" type="text/css">
                    .st0{fill-rule:evenodd;clip-rule:evenodd;}
                  </style>
                  <path data-v-0a606064="" d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8
                    c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4
                    c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7
                    c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4
                    c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5
                    C32.6,7.3,25.3,0,16.3,0z">
                  </path>
                </svg>
              </a>
            </div>
          </div>
          <div class="lg:w-1/2">
            <p class="font-display text-lg text-black ml-6 mr-4 mt-24">
              Hey y'all, I am a strategic product leader based in Nashville, TN. I consult on digital product design, development, and management through my company JET Digital. I’m passionate about building empathetic user experiences and enjoy solving mission critical business problems by leveraging modern technology solutions.
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4 mt-12">
              In my free time, I enjoy golf, food + drink, & sports.
            </p>
            <p class="font-display text-xl text-black ml-6 mr-4 mt-12">
              <b>Experience</b>
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>JAN 2019 - PRESENT</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Principal, JET Digital
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>JAN 2017 - JAN 2019</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Director Product Marketing, PASKR
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>AUG 2015 - JAN 2017</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Director Strategic Initiatives, Ingo Money
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>OCT 2014 - AUG 2015</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Head of Product, The Mothership
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>MAY 2013 - OCT 2014</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Project Manager, Healthstream
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>NOV 2012 - MAY 2013</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Product Manager (contract), State of TN OISDCS
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>JAN 2011 - NOV 2012</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Product Manager, Agra Avant Garde
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>MAY 2010 - JAN 2011</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Business Systems Analyst (contract), Primary Care Associates
            </p>
            <p class="font-display text-sm text-black ml-6 mr-4 mt-4">
              <b>AUG 2008 - MAY 2010</b>
            </p>
            <p class="font-display text-lg text-black ml-6 mr-4">
              Marketing Associate, Electronic Arts
            </p>
            <p class="font-display text-black text-md ml-6 mr-4 mt-12">
              Designed and developed by Justin Tannenbaum with <a href="https://tailwindcss.com/" class="underline text-blue-700" target="_blank">Tailwind CSS</a> and the <a href="https://laravel.com/" target="_blank" class="underline text-blue-700">Laravel Framework</a>. View the source for this project <a href="https://github.com/Just1nT/jtweb3#jtweb3" target="_blank" class="underline text-blue-700">here</a>.
            </p>
          </div>
        </div>
      </div>
    </body>
</html>
