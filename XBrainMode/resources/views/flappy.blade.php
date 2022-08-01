<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Flappy</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/web.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
  @if (Auth::guest())
@include('layout')            
  @else
  @if(Auth::user()->idRol==1)
        @include ('layoutPlayer')
    @else    
        @include ('layoutDeveloper')
    @endif   
  @endif
  <br>
  <br><br><br>
    <div class="webgl-content">
      <br><br><br>
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Flappy</div>
      </div>
    </div>
  </body>
</html>