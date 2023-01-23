<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
</head>
<body>

    <div class="l-admin-side">
        <div class="sidebar sidebar-school">
            <div class="icons">
                <a class="icon" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                    </svg>
                </a>
                <a class="icon" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M192 32c0 17.7 14.3 32 32 32c123.7 0 224 100.3 224 224c0 17.7 14.3 32 32 32s32-14.3 32-32C512 128.9 383.1 0 224 0c-17.7 0-32 14.3-32 32zm0 96c0 17.7 14.3 32 32 32c70.7 0 128 57.3 128 128c0 17.7 14.3 32 32 32s32-14.3 32-32c0-106-86-192-192-192c-17.7 0-32 14.3-32 32zM96 144c0-26.5-21.5-48-48-48S0 117.5 0 144V368c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144H128v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z"/>
                    </svg>
                </a>
                <a class="icon" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                        <path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"/>
                    </svg>
                </a>
                <div class="notifications">
                    <a href="" class="icon" id="icon-notif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                        </svg>
                        <span class="icon-num-count">2</span>
                    </a>
                    <div class="notification-container disabled" id="body-notif">
                        <h3>Notifications
                            <svg class="material-icons dp48 right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.7 8.4 166.9 8 160 8s-13.7 .4-20.4 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM208 176c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 400c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/>
                                paramètres
                            </svg>
                        </h3>

                        <input class="checkbox" type="checkbox" id="size_1" value="small" checked />
                        <label class="notification new" for="size_1">
                            <em>1</em> new <a href="">guest account(s)</a> have been created.
                            <svg class="right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>effacer</svg>
                        </label>

                        <input class="checkbox" type="checkbox" id="size_2" value="small" checked />
                        <label class="notification new" for="size_2">
                            <em>2</em> new <a href="">guest account(s)</a> have been created.
                            <svg class="right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>effacer</svg>
                        </label>

                        <input class="checkbox" type="checkbox" id="size_3" value="small" checked />
                        <label class="notification" for="size_3">
                            <em>3</em> new <a href="">guest account(s)</a> have been created.
                            <svg class="right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>effacer</svg>
                        </label>

                        <input class="checkbox" type="checkbox" id="size_4" value="small" checked />
                        <label class="notification" for="size_4">
                            <em>4</em> new <a href="">guest account(s)</a> have been created.
                            <svg class="right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>effacer</svg>
                        </label>

                        <input class="checkbox" type="checkbox" id="size_7" value="small" checked />
                        <label class="notification" for="size_7">
                            <em>7</em> new <a href="">guest account(s)</a> have been created.
                            <svg class="right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>effacer</svg>
                        </label>
                    </div>
                </div>
                <a href="profil.html" class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                    </svg>
                </a>
                <a href="configurations.html" class="icon">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.7 8.4 166.9 8 160 8s-13.7 .4-20.4 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM208 176c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 400c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/>
                    </svg>
                </a>

            </div>
            <div class="l-nav nav-school">
                <ul class="nav-menu nav-vertical">
                    <li class="nav-menu-item item-sigle">
                        <a href="ecoles.html" class="nav-menu-item-link">EPD</a>
                        <hr class="sidebar-separate-line">
                    </li>
                    <li class="nav-menu-item item-icon active">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="24" width="22">
                            <path d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM320 352c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32zm-16 80c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm288 32c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32zM400 144c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z"/>
                        </svg>
                        <a href="{{ route('dashbord') }}" class="nav-menu-item-link">Dashboard</a>
                    </li>
                    <li class="nav-menu-item item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="24" width="22">
                            <path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM256 416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H256V416zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z"/>
                        </svg>
                        <a href="annexes.html" class="nav-menu-item-link">Annexes</a>
                    </li>
                    <li class="nav-menu-item item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                        </svg>
                        <a href="{{ route('departement.index') }}" class="nav-menu-item-link">Départements</a>
                    </li>
                    <li class="nav-menu-item item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="24" width="22">
                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                        </svg>
                        <a href="{{ route('filiere.index') }}" class="nav-menu-item-link">Filières</a>
                    </li>
                    <li class="nav-menu-item item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="24" width="22">
                            <path d="M416 0C352.3 0 256 32 256 32V160c48 0 76 16 104 32s56 32 104 32c56.4 0 176-16 176-96S512 0 416 0zM128 96c0 35.3 28.7 64 64 64h32V32H192c-35.3 0-64 28.7-64 64zM288 512c96 0 224-48 224-128s-119.6-96-176-96c-48 0-76 16-104 32s-56 32-104 32V480s96.3 32 160 32zM0 416c0 35.3 28.7 64 64 64H96V352H64c-35.3 0-64 28.7-64 64z"/>
                        </svg>
                        <a href="{{ route('activite.index') }}" class="nav-menu-item-link">Activités</a>
                    </li>
                    <li class="nav-menu-item item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"/>
                        </svg>
                        <a href="{{ route('enseignement.index') }}" class="nav-menu-item-link">Enseignements</a>
                    </li>
                    <li class="nav-menu-item item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="24" width="22">
                            <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/>
                        </svg>
                        <a href="suivi_compte.html" class="nav-menu-item-link">Suivi Compte</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="l-header-admin">
                <div class="">
                    <ul class="nav-menu menu-admin">
                        <li class="nav-menu-item">
                            <a href="{{ route('list.ecole') }}" class="nav-menu-item-link">Ecole</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">Emploi</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ route('projet.liste') }}" class="nav-menu-item-link">Projet</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">CV Thèque</a>
                        </li>
                    </ul>
                </div>
                <div class="line-with-logo">
                    <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" srcset="" class="module-media">
                </div>
            </div>
            <div class="main-section">
                <div class="title-section dashboard-title">
                    <div class="title">
                        <h1>EPD</h1>
                        <h2>Configuration</h2>
                    </div>
                    <a href="" class="btn btn-icon">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>
                        Mon Profil
                    </a>
                </div>
                <form action="{{ route('save.ecole') }}" method="post" class="form-input">
                    @csrf
                    <div  class="step-1" id="step-1">
                        <div class="wrapper wrapper-two-column">
                            <div class="card card-style-2 boxed">
                                <div class="form-group">
                                    <label for="ecole" class="form-label">Ecole</label>
                                    <input type="text" name="ecole" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="sigle" class="form-label">Sigle</label>
                                    <input type="text" name="sigle" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="adresse" class="form-label">Adresse</label>
                                    <input type="text" name="adresse" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="form-label">Telephone</label>
                                    <input type="text" name="telephone" class="form-input input-style-2">
                                </div>
                            </div>
                            <div class="card card-style-2 boxed">
                                <div class="form-group">
                                    <label for="siteWeb" class="form-label">Site Web</label>
                                    <input type="text" name="siteWeb" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" name="linkedin" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input type="file" name="logo" class="form-input input-style-2">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="" class="form-input text-area input-style-2"></textarea>
                                </div>
                                {{--  <input type="button" class="btn btn-fill btn-red" value="Annuler">
                                <input type="submit" class="btn btn-fill" value="Enregistrer">  --}}
                            </div>
                        </div>
                        <input type="button" class="next btn btn-fill" value="Suivant" id="">
                    </div>
                    <div class="step-2 disabled" id="step-2">
                        <div class="wrapper wrapper-two-column">
                            <div class="card card-style-2 boxed">
                                <div class="title-section dashboard-title">
                                    <div class="title">
                                        <h2>Quel est votre type d établissement?</h2>
                                    </div>
                                </div>
                                <div class="wrapper wrapper-two-columns">
                                    <div class="form-radio">
                                        <input type="radio" id="customRadio1" name="etablissement" value="public" class="radio-input">
                                        <label class="radio-label" for="customRadio1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                            </svg>
                                            <div class="text">Public</div>
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <input type="radio" id="customRadio2" name="etablissement" value="prive" class="radio-input">
                                        <label class="radio-label" for="customRadio2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                            </svg>
                                            <div class="text">Privé</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-for-icon">
                                <img class="small-media" src="../../public/images/Hero-formation.jpeg" alt="" srcset="">
                            </div>
                        </div>
                        <button type="button" class="prev btn">Retour</button>
                        <input type="button" class="next btn btn-fill" value="Suivant" id="">
                    </div>
                    <div class="step-3 disabled" id="step-3">
                        <div class="wrapper wrapper-two-column">
                            <div class="card card-style-2 boxed">
                                <div class="title-section dashboard-title">
                                    <div class="title">
                                        <h2>Quel est votre système éducatif?</h2>
                                    </div>
                                </div>
                                <div class="wrapper wrapper-flex">
                                    <div class="form-radio se">
                                        <input type="radio" id="se-1" name="systemeEducatif_id" value="1" class="radio-input">
                                        <label class="radio-label" for="se-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                            </svg>
                                            <div class="text">Français</div>
                                        </label>
                                    </div>
                                    <div class="form-radio se">
                                        <input type="radio" id="se-2" name="systemeEducatif_id" value="2" class="radio-input">
                                        <label class="radio-label" for="se-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                            </svg>
                                            <div class="text">Anglais US</div>
                                        </label>
                                    </div>
                                    <div class="form-radio se">
                                        <input type="radio" id="se-3" name="systemeEducatif_id" value="3" class="radio-input">
                                        <label class="radio-label" for="se-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                            </svg>
                                            <div class="text">Anglais UK</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-for-icon">
                                <img class="small-media" src="../../public/images/Hero-formation.jpeg" alt="" srcset="">
                            </div>
                        </div>

                        <button type="button" class="prev btn">Retour</button>
                        <input type="button" class="next btn btn-fill" value="Suivant" id="">
                    </div>
                    <div class="step-4 disabled" id="step-4">
                        <div class="wrapper wrapper wrapper-two-column">
                            <div class="card card-style-2 boxed">
                                <div class="title-section dashboard-title">
                                    <div class="title">
                                        <h2>Quel sont vos enseignements?</h2>
                                        <span class="small-text">Plusieurs choix sont possible</span>
                                    </div>
                                </div>
                                <div class="disabled" id="1">
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="e-sup" name="enseignement[]" value="4" class="radio-input">
                                            <label class="radio-label" for="e-sup">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Enseignement Supérieur</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="e-sec" name="enseignement[]" value="3" class="radio-input">
                                            <label class="radio-label" for="e-sec">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Enseignement Secondaire</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="e-elmt" name="enseignement[]" value="2" class="radio-input">
                                            <label class="radio-label" for="e-elmt">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Enseignement Elémentaire</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="e-pre-elmt" name="enseignement[]" value="1" class="radio-input">
                                            <label class="radio-label" for="e-pre-elmt">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Enseignement Pré-Elémentaire</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="disabled" id="2">
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="uk-higher-school" name="enseignement[]" value="11" class="radio-input">
                                            <label class="radio-label" for="uk-higher-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Higher School</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="uk-secondary-school" name="enseignement[]" value="10" class="radio-input">
                                            <label class="radio-label" for="uk-secondary-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Secondary School</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="uk-primary-school" name="enseignement[]" value="9" class="radio-input">
                                            <label class="radio-label" for="uk-primary-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Primary School</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="uk-nursery-school" name="uk-nursery-school" value="8" class="radio-input">
                                            <label cla
                                            ss="radio-label" for="uk-nursery-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Nursery School</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="disabled" id="3">
                                    <div class="wrapper wrapper-flex">

                                         <div class="form-radio ens">
                                            <input type="checkbox" id="us-middle-school" name="enseignement[]" value="7" class="radio-input">
                                            <label class="radio-label" for="us-middle-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Secondaire</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="us-primary-school" name="enseignement[]" value="6" class="radio-input">
                                            <label class="radio-label" for="us-primary-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Primary School</div>
                                            </label>
                                        </div>
                                        <div class="form-radio ens">
                                            <input type="checkbox" id="us-nursery-school" name="enseignement[]" value="5" class="radio-input">
                                            <label class="radio-label" for="us-nursery-school">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                                </svg>
                                                <div class="text">Nursery School</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-style-2 boxed">
                                <div class="e-sup cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de l enseignement supérieur</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="14" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Licence 1</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="15" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Licence 2</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="16">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Licence 3</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="17" >
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Master 1</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="18">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Master 2</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="19">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Doctorat 1</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="20">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Doctorat 2</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="" value="" >
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Doctorat 3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="e-sec cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de l'enseignement secondaire</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="9">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Sixième 1</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="10" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Cinquième</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="11">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Quatrième</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="12">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Troisième</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="13">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Seconde</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="14">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Première</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Terminale</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="e-elmt cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de l'enseignement élémentaire</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="4">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">CP</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="5" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">CE1</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="6">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">CE2</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="7">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">CM1</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="8">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">CM2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="e-pre-elmt cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de l'enseignement pré-élémentaire</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="1" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Petite Section</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="2" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Moyenne Section</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="3" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Grande Section</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-higher-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de Higher School</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="41" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Associate Degree</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle" value="42" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Bachelor Degree</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="43">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Master Degree</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="44">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">PhD Degree</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-secondary-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de Secondary School</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]"value"39">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Secondary</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="40" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Sixth from College</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-primary-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de Primary School</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="36">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">1st grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="37" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">2nd grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="38" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">5th grade</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="us-higher-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de Higher School</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="32" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Associate Degree</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="33" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Bachelor Degree</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="34">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Master Degree</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]"  value="35" >
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">PhD Degree</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="us-middle-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de Middle School</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="25">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">6TH Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="26" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">7th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="27" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">8th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="28" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">9th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="29" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">10th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="30" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">11th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="31" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">12th Grade</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="us-primary-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de Primary School</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="23">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">infant-school</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="cycle[]" value="24" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">juniorSchool</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="juniorSchool" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">3th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="juniorSchool" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">4th Grade</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="juniorSchool" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">5th Grade</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="us-nursery-school cycle disabled">
                                    <div class="wrapper">
                                        <h3>Les cycles de l'enseignement pré-élémentaire</h3>
                                    </div>
                                    <div class="wrapper wrapper-flex">
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="infant-school">
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Pre School</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="juniorSchool" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Pre Kindergarten</div>
                                        </div>
                                        <div class="form-group detail-item">
                                            <label class="toggler-wrapper style-1">
                                                <input type="checkbox" name="juniorSchool" checked>
                                                <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                                </div>
                                            </label>
                                            <div class="badge">Kindergarten</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="prev btn">Retour</button>
                        <input type="submit" class="btn btn-fill" value="Enregistrer" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="l-footer">
        <div class="footer-left">
            <ul class="menu-footer">
                <li class="menu-footer-item"> copyright &copy; 2022, AcademiePlus.</li>
                <li class="menu-footer-item">Politique de confidentialité</li>
                <li class="menu-footer-item">Sécurité</li>
            </ul>
        </div>
        <div class="footer-right">
            <ul class="socials-icons">
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                        <path fill="#0009" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                    </svg>
                </li>
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                        <path fill="#0009" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                    </svg>
                </li>
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                        <path fill="#0009" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                    </svg>
                </li>
            </ul>
        </div>
    </footer>


    <script src="{{ asset('js/multi-step-form.js') }}"></script>
    <script src="{{ asset('js/card-toggle.js') }}"></script>
    <script src="{{ asset('js/notif.js') }}"></script>

    <script>
        let se = document.querySelectorAll(".se");
        let cycles = document.querySelectorAll(".cycle");
        let enseignements = document.querySelectorAll(".ens")
        se.forEach(e => {
            let id = e.firstElementChild.value;
            e.firstElementChild.addEventListener("click", function(){
                document.getElementById("1").classList.add("disabled");
                document.getElementById("2").classList.add("disabled");
                document.getElementById("3").classList.add("disabled");
                cycles.forEach(c => {
                    if(!(c.classList.contains("disabled"))){
                        c.classList.add("disabled");
                    }
                    let inputs = c.getElementsByTagName("input");
                    let inputsList = Array.prototype.slice.call(inputs);
                    inputsList.forEach(i => {
                        i.checked = false;
                    });
                });
                enseignements.forEach(ens => {
                    ens.firstElementChild.checked = false;
                });
                if(e.firstElementChild.checked === true){
                    document.getElementById(id).classList.remove("disabled");
                }
            });
        });

        enseignements.forEach(ens => {
            let id = ens.firstElementChild.id;
            ens.firstElementChild.addEventListener("click", function(){
                if(ens.firstElementChild.checked === true){
                    document.querySelector("."+id).classList.remove("disabled");
                    console.log(ens.firstElementChild.checked);
                }else{
                    document.querySelector("."+id).classList.add("disabled");
                }
            });
        });
    </script>
</body>
</html>
