<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Case Study</title>
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
    <div id="app">
      <body class="bg-gray-100">
        <Navbar>
        </Navbar>
        <div class="container mx-auto px-4">
          <div class="font-display text-black text-4xl text-center mt-24">
            <h1>Case Study Coming Soon</h1>
          </div>
        </div> <!-- Container -->
      </body>
    </div><!--app-->
    <script src="/js/app.js"></script>
</html>
