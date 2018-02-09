<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
    * {
        margin: 0; padding: 0;
    }
    html, body, header, section {
        width: 100%;
    }
    html, body, section {
        height: 100%
    }
    header {
        position:fixed;
        background-color: #141414;
        color: #fcfcfc;
        width: 100%;

    }
    header h1 {
        padding: 5px;
        font: 15px arial;
        text-align: center;
    }
    section a {
        padding: 6px 14px;
        line-height: normal;
        font-size: 14px;
        vertical-align: middle;
        height: auto;
        background: #008ec2;
        border-color: #006799;
        color: #fff;
        text-decoration: none;
    }
    .topwrapper {
        position:fixed;
        left:50%; 
        top:50%;
    }
    .wrapper {
        position:relative; 
        left:-50%;
        top:-50%;
    }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>dye-pop.com admin site</h1>
        </header>   
        <section>
            <div class="topwrapper">
                <div class="wrapper">
                    <a href="/wp-login.php">S'identifier</a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
