<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Playa">
    <title>{{ config('app.name')  }} - Playa Password Lock</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        html, body{ background: #F1F1F1; color: #4a4a4a; height: 100%;}
        .logo{ margin-top: 1rem;}
        .logo svg{ width: 6rem}
        .client-logo img{ max-width: 80%; padding: 1rem; margin-bottom: 1rem}
        h2{ font-size: 1.8rem; }
    </style>
    <!-- Chatra {literal} -->
    <script>
        (function(d, w, c) {
            w.ChatraID = 'MTAsqKGhoyMvMkBGJ';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
                + '//call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->
</head>
<body class="d-flex justify-content-center align-items-center">
<div class="container" style="max-width: 420px">
    <div class="card" style="">
        <div class="card-block">
            <div class="text-center" style="margin-bottom: 2rem">
                @if(!is_null(config('playa-password-lock.client_logo')) )
                    <div class="client-logo">
                        <img src="{{ config('playa-password-lock.client_logo') }}" width="{{ config('playa-password-lock.client_logo_width')  }}" />
                    </div>
                @endif
                <h2>Restricted Access</h2>
                <p>Please fill in the invitation password <br />to access {{config('app.name')}}</p>
            </div>
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert" style="margin-bottom: 2rem">
                {{ Session::get('error') }}
            </div>
            @endif
            <form method="post" action="{{ route('playa-password-lock-login')  }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Invitation Code</label>
                    <input class="form-control" type="text" name="invite_password" placeholder="" />
                </div>
                <input class="form-control" type="submit" />
            </form>
        </div>
    </div>
    <div class="logo text-center">
        <svg version="1.1" class="logo" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="72.4 46.4 879.2 366.9" enable-background="new 72.4 46.4 879.2 366.9" xml:space="preserve">
            <g id="Isolation_Mode">
                <rect x="330.1" y="150.7" display="none" fill="#374F9E" width="363.1" height="198.2"></rect>
                <g>
                    <g>
                        <path fill="#66B25A" d="M72.4,396.7V147.8c0-4.9,2.5-8.8,7.6-11.7c5.1-3,11.4-4.5,18.9-4.5s13.8,1.5,18.7,4.5s7.4,6.9,7.4,11.8
    						v12.2c5.5-8.7,13.4-16.1,23.7-22c10.3-6,22-9,35-9c21.7,0,40.2,8,55.2,24.1c15.1,16.1,22.6,35.4,22.6,58.1v33.2
    						c0,21.8-7.7,41.1-23.1,57.9c-15.4,16.7-33.1,25.1-53.1,25.1c-12.5,0-24-3.2-34.6-9.6s-18.1-13.9-22.4-22.7v101.4
    						c0,4.3-2.8,8.2-8.5,11.6s-12.4,5.1-20.2,5.1s-14.4-1.7-19.6-5.1C75,404.8,72.4,401,72.4,396.7z M128.5,251.6
    						c0,5.4,3.9,11.6,11.7,18.9c7.8,7.2,16.7,10.8,26.5,10.8c10.1,0,19.1-3.8,27-11.4c7.8-7.6,11.7-16.1,11.7-25.5v-32.9
    						c0-9.4-3.9-17.7-11.7-25.1s-17.1-11-27.8-11c-9.9,0-18.6,3.3-26.1,10s-11.3,15.4-11.3,26.1L128.5,251.6L128.5,251.6z"></path>
                        <path fill="#66B25A" d="M284.8,308.7V61.2c0-4.4,2.5-8,7.6-10.7s11.8-4.1,20.2-4.1c7.8,0,14.5,1.4,20,4.1
    						c5.5,2.7,8.3,6.3,8.3,10.7v247.5c0,3.7-2.8,7.1-8.5,10.3c-5.7,3.2-12.3,4.8-19.8,4.8c-7.8,0-14.4-1.5-19.8-4.6
    						C287.5,316.2,284.8,312.7,284.8,308.7z"></path>
                        <path fill="#66B25A" d="M571,390c0-15.2,4.8-22.9,14.4-22.9c13.6,0,27-4.5,40.2-13.6s20.5-24.2,22-45.3l-74.8-147.6
    						c-1.2-2.7-1.7-4.9-1.7-6.8c0-6.4,4.3-12.2,12.8-17.3c8.6-5.1,16.7-7.6,24.6-7.6c8.7,0,14.1,2.9,16.1,8.8l52.2,120l42.2-120
    						c2-5.9,7-8.8,14.8-8.8c7.5,0,15.8,2.6,24.8,7.8s13.5,11.2,13.5,17.9c0,2.2-0.4,4.2-1.3,6.1l-63.5,151l-7.4,17.8
    						c-3.5,9.2-6,15.5-7.6,19s-4.3,9-8.3,16.4c-3.9,7.4-7.4,12.8-10.4,16.2c-3,3.4-7.3,7.6-12.8,12.6s-11.1,8.6-16.7,10.9
    						c-5.7,2.3-12.5,4.3-20.7,6.1c-8.1,1.8-17,2.6-26.5,2.6c-8.4,0-14.8-1.6-19.1-4.7C573.2,405.5,571,399.3,571,390z"></path>
                        <path fill="#66B25A" d="M776.3,272c0-21.2,8.7-36.2,26.1-44.8c17.4-8.6,42.5-13,75.2-13h17.8v-5.4c0-10.3-3.1-19.2-9.4-26.8
    						c-6.2-7.6-15.9-11.4-28.9-11.4s-24.2,2.3-33.5,6.9c-9.3,4.6-14.6,6.9-16.1,6.9c-5.8,0-10.4-2.7-13.9-8.1
    						c-3.5-5.4-5.2-11.3-5.2-17.8c0-7.8,7.5-14.6,22.4-20.4c14.9-5.8,30.7-8.7,47.2-8.7c31.6,0,55.1,7.5,70.5,22.5
    						s23.1,33.8,23.1,56.4v99.1c0,4.6-2.6,8.5-7.8,11.7s-11.7,4.9-19.6,4.9c-7.3,0-13.3-1.7-18.1-5.2s-7.2-7.6-7.2-12.5v-12.5
    						c-20,22.6-42,33.9-66.1,33.9c-16.5,0-30.1-4.7-40.7-14.2C781.6,303.9,776.3,290.1,776.3,272z M832.4,265.5
    						c0,6.9,2.1,12.1,6.3,15.6s9.8,5.2,16.7,5.2c9.3,0,18.3-3.8,27-11.5s13.1-16.1,13.1-25.3v-8.1H889c-17.7,0-31.5,1.6-41.5,4.8
    						C837.4,249.3,832.4,255.8,832.4,265.5z"></path>
                    </g>
                    <g>
                        <path fill="#66B25A" d="M557.6,229.8c0.6,8.9-3.1,17.9-13.4,23.7c-36.8,20.7-73.5,41.5-110.3,62.2c-18.1,10.2-41.3-2.7-41.3-23.7
    						V167.6c0-21,23.2-33.9,41.3-23.7c36.8,20.7,73.5,41.5,110.3,62.2C554.4,211.9,558.2,220.9,557.6,229.8z"></path>
                    </g>
                </g>
            </g>
</svg>
    </div>
</div>
</body>
</html>