@section('nav')    
  <nav class="flex items-center justify-between flex-wrap bg-white p-6">
    <div class="flex items-center flex-shrink-0 text-black lg:ml-8 mr-6">
        <span class="font-display font-semibold text-xl tracking-tight"><a href="/">Justin Tannenbaum</a></span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-blue hover:border-blue">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="relative right-0 w-full block flex-grow lg:flex lg:absolute lg:items-center lg:w-auto mr-8">
        <div class="font-display text-md lg:flex-grow">
            <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-6">
              Work
            </a>
            <a href="/about" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-6">
              About
            </a>
            <a href="/blog" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-6">
              Blog
            </a>
            <a href="mailto:justinedwardtannenbaum@gmail.com" class="block mt-4 mr-6 lg:inline-block lg:mt-0 text-black">
              Contact
            </a>
        </div>
    </div>
  </nav>