<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


        <!-- Rasa -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
        <meta content="utf-8" http-equiv="encoding" />
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"      rel="stylesheet"    />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"      rel="stylesheet"    />
        <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap"      rel="stylesheet"    />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"      rel="stylesheet"    />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap"      rel="stylesheet"    />
        <!--Import Font Awesome Icon Font-->
        <link      rel="stylesheet"      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"      integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0="      crossorigin="anonymous"    />
        <!--Import materialize.css-->

        <link      rel="stylesheet"      type="text/css"      href="{{asset('static/css/materialize.min.css')}}"    />
        <!--Main css-->
        <link rel="stylesheet" type="text/css" href="{{asset('static/css/style.css')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <div class="rasa-components">

                <!--chatbot widget -->
                <div class="widget">
                    <div class="chat_header">
                        <!--Add the name of the bot here -->
                        <span class="chat_header_title">Sara</span>
                        <span class="dropdown-trigger" href="#" data-target="dropdown1">
                        <i class="material-icons"> more_vert </i>
                        </span>

                        <!-- Dropdown menu-->
                        <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#" id="clear">Clear</a></li>
                        <li><a href="#" id="restart">Restart</a></li>
                        <li><a href="#" id="close">Close</a></li>
                        </ul>
                    </div>

                    <!--Chatbot contents goes here -->
                    <div class="chats" id="chats">
                        <div class="clearfix"></div>
                    </div>

                    <!--keypad for user to type the message -->
                    <div class="keypad">
                        <textarea
                        id="userInput"
                        placeholder="Type a message..."
                        class="usrInput"
                        ></textarea>
                        <div id="sendButton">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <!--bot profile-->
                <div class="profile_div" id="profile_div">
                    <img class="imgProfile" src="{{asset('static/img/botAvatar.png')}}" />
                </div>

                    <!-- Bot pop-up intro -->
                <div class="tap-target" data-target="profile_div">
                    <div class="tap-target-content">
                        <h5 class="white-text">Hey there 👋</h5>
                        <p class="white-text">
                        I can help you navaigate around the shop and answer your technical
                        questions.
                        </p>
                    </div>
                </div>
            </div>





        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('static/js/lib/materialize.min.js')}}" ></script>
        <script src="{{asset('static/js/lib/uuid.min.js')}}"></script>
        <!--Main Script -->
        <script type="text/javascript" src="{{asset('static/js/script.js')}}"></script>
        <!--Chart.js Script -->
        <script type="text/javascript" src="{{asset('static/js/lib/chart.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/js/lib/showdown.min.js')}}"></script>
    </body>
</html>
