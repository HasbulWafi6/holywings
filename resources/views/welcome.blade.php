<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/base.css')}}" rel="stylesheet">
        <link href="{{asset('css/demo2.css')}}" rel="stylesheet">
        <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
        
        
    </head>
    <body class="demo-2 loading">
    <svg class="hidden">
      <symbol id="icon-arrow" viewBox="0 0 24 24">
        <title>arrow</title>
        <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
      </symbol>
      <symbol id="icon-drop" viewBox="0 0 24 24">
        <title>drop</title>
        <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
      </symbol>
    </svg>
    <main>
      <div class="message">To see the menu, please view on a larger screen.</div>
      <div class="content content--fixed">
        <button class="menu-trigger">MENU</button>
      </div>
      <div id="content-1" class="content content--switch content--switch-current">
        <h2 class="content__title2">HOLYWINGS</h2>
        <div class="content__subtitle2">NEVER STOP FLYING</div>
      </div>
      <nav class="grim">
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--1"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--2"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--3"></div>
          <div class="grim__item-content">
            <div class="grim__item-inner">
              <button class="menu-trigger menu-trigger--close">- close</button>
            </div>
          </div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--4"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--5"></div>
          <a href="#content-1" class="grim__link grim__item-content">
            <div class="grim__item-inner">
              <h3 class="grim__item-title">Back</h3>
            </div>
          </a>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--6"></div>
          <div class="grim__item-img grim__item-img--1" style="background-image: url({{ asset('images/1.jpg')}});"></div>
          <a href="#content-2" class="grim__link grim__item-content">
            <div class="grim__item-inner">
              <h3 class="grim__item-title"></h3>
              <span class="grim__item-desc"></span>
            </div>
          </a>
          <div class="grim__item-bg grim__item-bg-cover grim__item-bg--6"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--7"></div>
          <div class="grim__item-img grim__item-img--2" style="background-image: url({{ asset('images/2.jpg')}});"></div>
          <a href="#content-3" class="grim__link grim__item-content">
            <div class="grim__item-inner">
              <h3 class="grim__item-title"></h3>
              <span class="grim__item-desc"></span>
            </div>
          </a>
          <div class="grim__item-bg grim__item-bg-cover grim__item-bg--7"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--8"></div>
          <div class="grim__item-img grim__item-img--3" style="background-image: url({{ asset('images/3.jpg')}});"></div>
          <a href="#content-4" class="grim__link grim__item-content">
            <div class="grim__item-inner">
              <h3 class="grim__item-title"></h3>
              <span class="grim__item-desc"></span>
            </div>
          </a>
          <div class="grim__item-bg grim__item-bg-cover grim__item-bg--8"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--9"></div>
          <div class="grim__item-img grim__item-img--4" style="background-image: url({{ asset('images/4.png')}});"></div>
          <a href="#content-5" class="grim__link grim__item-content">
            <div class="grim__item-inner">
              <h3 class="grim__item-title"></h3>
              <span class="grim__item-desc"></span>
            </div>
          </a>
          <div class="grim__item-bg grim__item-bg-cover grim__item-bg--9"></div>
        </div>
        <div class="grim__item">
          <div class="grim__item-bg grim__item-bg--10"></div>
          <div class="grim__item-img grim__item-img--5" style="background-image: url({{ asset('images/5.png')}});"></div>
          
          <a href="{{ route('login') }}" class="grim__link grim__item-content">
            <div class="grim__item-inner">
              <h3 class="grim__item-title">
                  Login
              </h3>
              <span class="grim__item-desc">Enjoy a different, novel style of nightlife and social club</span>
            </div>
          </a>
          <div class="grim__item-bg grim__item-bg-cover grim__item-bg--10"></div>
        </div>
      </nav>
    </main>
    <script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/anime.min.js')}}"></script>
    <script src="{{asset('js/menu2.js')}}"></script>
</body>
</html>
