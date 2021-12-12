<?php
header('Refresh: 5; URL=https://myfilearchive.xyz');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="icon" type="image/png" sizes="192x192" href="https://myfilearchive.xyz/img/content/myfilearchive.png" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RestApi - MyFileArchive</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #2196F3;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
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
                font-size: 230px;
                color: white;
            }
            .status {
                font-size: 50px;
                color: white;
            }
			.redirect {
                font-size: 20px;
                color: white;
            }
            .links > a {
                color: #000000;
                padding: 20px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background: white;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">	
                    403
                </div>
                <div class="status m-b-md">				
                    FORBIDDEN
                </div>

                <div class="redirect m-b-md">				
				Redirecting In <span id="countdowntimer">5</span> Seconds
				</div>

            </div>
        </div>
    </body>
</html>

<script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>