<!DOCTYPE HTML>
<html manifest="" lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Raw Designs | Mobile</title>
    <style type="text/css">
        html, body {
            height: 100%;
        }

        #appLoadingIndicator {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -50px;
            width: 100px;
            height: 20px;
        }

        #appLoadingIndicator > * {
            background-color: #FFFFFF;
            float: left;
            height: 20px;
            margin-left: 11px;
            width: 20px;
            -webkit-animation-name: appLoadingIndicator;
            -webkit-border-radius: 13px;
            -webkit-animation-duration: 0.8s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-direction: linear;
            opacity: 0.3
        }

        #appLoadingIndicator > :nth-child(1) {
            -webkit-animation-delay: 0.18s;
        }

        #appLoadingIndicator > :nth-child(2) {
            -webkit-animation-delay: 0.42s;
        }

        #appLoadingIndicator > :nth-child(3) {
            -webkit-animation-delay: 0.54s;
        }

        @-webkit-keyframes appLoadingIndicator{
            0% {
                opacity: 0.3
            }

            50% {
                opacity: 1;
                background-color:#1985D0
            }

            100% {
                opacity:0.3
            }
        }
    </style>
    <link href="style.css" rel="stylesheet">
    <script id="microloader" type="text/javascript" src="sdk/microloader/development.js"></script>
</head>
<body id="mobile">
    <div id="appLoadingIndicator">
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>
</html>
