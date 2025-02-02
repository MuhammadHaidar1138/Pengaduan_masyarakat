<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    {{-- CDN FastBootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet"
    integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous" />

    <!-- CDN JQUERY -->
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    
    @stack('style')
    <style>
      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        display: flex;
        background: #fffefe;
        color: #ffffff;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          Ubuntu, "Helvetica Neue", sans-serif;
      }

      .material-symbols-outlined {
        font-size: 22px;
      }

      .sidebar {
        background: #3d405b;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 250px;
        height: 100%;
        padding: 40px 10px 30px 10px;
        border-right: 1px solid #2f3336;
      }

      .sidebar-header {
        width: 100%;
        margin-bottom: 16px;
      }

      .logo-img {
        width: 32px;
        margin-left: 10px;
      }

      .sidebar button {
        height: 60px;
        background: transparent;
        border: 0;
        padding: 0;
        font-family: inherit;
        color: inherit;
        cursor: pointer;
        text-align: left;
      }

      .sidebar button > span {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        height: 48px;
        padding: 0 16px 0 12px;
        border-radius: 24px;
        line-height: 1;
      }

      .sidebar button:hover > span {
        background: rgba(255, 255, 255, 0.08);
      }

      .sidebar button i {
        position: relative;
        font-size: 28px;
        transition: 0.2s;
      }

      .sidebar button img {
        width: 32px;
        height: 32px;
      }

      .sidebar button i > span {
        display: grid;
        place-items: center;
        padding: 2px 5px;
        border-radius: 10px;
        position: absolute;
        top: -5px;
        left: 50%;
        translate: -50% 0;
        background: #1d9bf0;
        color: #f9f9f9;
        font-size: 10px;
        font-family: BlinkMacSystemFont;
        font-style: normal;
      }

      .sidebar button span {
        font-size: 17px;
        color: white;
      }

      .sidebar button span a{
        text-decoration: none;
      }

      .sidebar > nav {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        width: 100%;
      }

      .sidebar > nav button:last-child {
        margin-top: auto;
      }

      button.tweet-button {
        text-align: center;
      }

      button.tweet-button > span {
        background: #1d9bf0;
        width: 100%;
        justify-content: center;
      }

      button.user-button .fullname {
        font-size: 15px;
      }

      button.user-button .username {
        color: rgba(255, 255, 255, 0.4);
        font-size: 12px;
      }

      button.tweet-button i {
        display: none;
      }

      button.tweet-button span > span {
        display: block;
      }

      button.user-button span {
        width: 100%;
      }

      button.user-button span > span {
        display: grid;
        gap: 4px;
        width: 100%;
      }

      button.user-button span > i {
        font-size: 20px;
        margin-left: auto;
      }

      @media (width < 580px) {
        .sidebar {
          width: 72px;
        }

        .sidebar button > span {
          width: 50px;
        }

        .sidebar button > span > span {
          opacity: 0;
          visibility: hidden;
        }

        button.tweet-button i {
          display: inline-flex;
        }

        button.tweet-button span > span {
          display: none;
        }

        button.user-button span > i {
          display: none;
        }
      }

      main {
        margin-left: 250px;
        padding: 20px;
        flex: 1;
      }
    </style>
  </head>
  <body>
    <aside class="sidebar">
      <header class="sidebar-header">
        <img class="logo-img" src="logo.svg" />
        <i class="logo-icon uil uil-instagram"></i>
      </header>
      <nav>
        <button>
          <span>
            <i class="material-symbols-outlined"> home </i>
            <a href="{{ route('homeGuest') }}" class="{{ Route::is('homeGuest') ? 'active' : ''}}"><span>Home</span></a>
          </span>
        </button>
        <button>
          <span>
            <i class="material-symbols-outlined"> tag </i>
            <a href="{{ route('pengaduan') }}"><span>Buat Pengaduan</span></a>
          </span>
        </button>
        <button>
          <span>
            <i class="material-symbols-outlined">
              notifications <span>10+</span>
            </i>
            <span>Notifications</span>
          </span>
        </button>
        <button>
          <span>
            <i class="material-symbols-outlined"> email </i>
            <span>Messages</span>
          </span>
        </button>
        <button>
          <span>
            <i class="material-symbols-outlined"> bookmark </i>
            <span>Bookmarks</span>
          </span>
        </button>
        <button>
          <span>
            <i class="material-symbols-outlined"> person </i>
            <span>Profile</span>
          </span>
        </button>
        <button>
          <span>
            <i class="material-symbols-outlined"> expand_circle_down </i>
            <span>More</span>
          </span>
        </button>
        <button class="tweet-button">
          <span>
            <i class="material-symbols-outlined"> add </i>
            <span>Tweet</span>
          </span>
        </button>
        <button class="user-button">
          <span>
            <img src="joe.png" />
            <span>
              <span class="fullname"> Joe </span>
              <span class="username"> @frontendjoe </span>
            </span>
            <i class="material-symbols-outlined"> more_vert </i>
          </span>
        </button>
      </nav>
    </aside>
    <main>
      @yield('content')
    </main>
    @stack('script')
  </body>
</html>
