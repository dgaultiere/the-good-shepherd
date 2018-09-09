<?php
  header('HTTP/1.1 503 Service Temporarily Unavailable');
  header('Status: 503 Service Temporarily Unavailable');
  header('Retry-After: 600');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Web Fonts -->
  <script>
    (function(d) {
      var config = {
        kitId: 'ifd6ekz',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

  <!-- Page Styles -->
  <style  type="text/css">
    body {
      background-image: url('/wp-content/uploads/2018/05/IMG_7044-1620x1080.jpg');
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      text-align: center;
      font-family: 'jaf-bernino-sans', 'Lucida Grande', Helvetica, Arial, sans-serif;
      color: #555;
      font-size: 18px;
      font-weight: 300;
      box-sizing: border-box;
    }

    .image-mask {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      background-color: rgba(0,0,0,0.25);
      z-index: -1;
    }

    .floating-box {
      position: relative;
      box-sizing: border-box;
      background: #fff;
      border-radius: 4px;
      box-shadow: 0 1px 3px rgba(0,0,0,.5);
      padding: 35px;
      max-width: 80%;
      width: 500px;
      margin: 20% auto;
      z-index: 1;
    }

    h1 {
      padding: 0;
      margin-top: 5px;
      font-size: 32px;
    }

    p {
      margin-bottom: 40px;
    }

    .button {
      text-decoration: none;
      color: #fff;
      background: #40a6ce;
      padding: 6px 12px;
      border-radius: 3px;
      font-size: 16px;
      margin-bottom: 30px;
    }

    .button:hover {
      background: #368daf;
    }
  </style>
</head>
<body>
  <div class="image-mask"></div>
  <div class="floating-box">
    <h1>Soul Shepherding</h1>
    <p>We are currently performing scheduled maintenance. Please check back in a couple of minutes.</p>
    <a href="/" class="button">Refresh</a>
  </div>
</body>
</html>
