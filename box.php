<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <title>Aframe</title>
</head>

<body>
    <a-scene>
        <a-assets>
            <!-- <a-asset-item id="adamHead" src="./adamHead.gltf"></a-asset-item> -->
            <video id="test" autoplay loop="true" src="./video/ghost.mp4" webkit-playsinline></video>
        </a-assets>


        <a-video src="#test" width="16" height="9" position="0 1 -1"></a-video>
    </a-scene>
</body>

</html>