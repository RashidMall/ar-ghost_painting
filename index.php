<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
<script>THREEx.ArToolkitContext.baseURL = 'https://rawgit.com/jeromeetienne/ar.js/master/three.js/'</script>
<script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v4.2.0/dist/aframe-extras.min.js"></script>
<body style='margin : 0px; overflow: hidden;'>
  <a-scene embedded arjs>
<!--     <a-assets>
      <a-asset-item id="busterDrone" src="./drone/busterDrone.gltf"></a-asset-item>
    </a-assets>
    <a-gltf-model src="#busterDrone"></a-gltf-model>
    
    <a-entity gltf-model="#busterDrone"></a-entity> -->

    <a-assets>
      <video id="penguin-sledding" autoplay loop="true" src="./video/ghost.mp4"></video>
        <!-- <a-asset-item id="drone" src="./drone/busterDrone.gltf"> -->
      <a-sound src="src: url(sound/ghost.mp3)" autoplay="true" loop="true" position="0 0.5 0"></a-sound>
    </a-assets>

    <!-- Using the asset management system. -->
    <a-video src="#penguin-sledding" width="1" height="1.5" position="0 0.5 0"></a-video>

    <!-- <a-gltf-model src="#drone" autoplay="true" loop="true" position="0 0.5 0"></a-gltf-model> -->

    <!-- <a-marker-camera preset='hiro'></a-marker-camera> -->
    <!-- <a-marker-camera preset='custom' type='pattern' url='img/pattern-marker.patt'></a-marker-camera> -->

    <a-marker preset="pattern" type="pattern" url="img/girl.patt">
      <a-video src="#penguin-sledding" width="1" height="1.5" position="0 0.5 0"></a-video>      
    </a-marker>
  </a-scene>
</body>
</html>
