<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131325810-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131325810-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>yodamasa.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                /*text-transform: uppercase;*/
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @media screen and (max-width: 480px) {
                .content {
                    width : 180px;
                }
                .title {
                    font-size: 32px;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    yodamasa.com
                </div>

                <div class="links">
                    <a href="https://twitter.com/yodamasa90" target="_blank">■Twitter</a>
                    <a href="https://github.com/yodamasa" target="_blank">■GitHub</a>
                    <a href="https://yodamasa.hatenablog.com/" target="_blank">■Blog(日常)</a>
                    <a href="/blog" target="_blank">■Blog(技術)</a>
                </div>
            </div>
        </div>
    </body>
</html>
