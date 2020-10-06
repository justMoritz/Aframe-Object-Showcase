<?php
  // ﷽

  $globalVersion = '1.6.0';

  // Copyright Moritz Zimmer, 2020

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fashion Show at Lunch</title>
    <meta name="description" content="An awesome test for Objects and Materials in Aframe">
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <script>
      var showShadows = true;
    </script>

    <!-- Loading Aframe and Dependencies -->
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="assets/aframe-orbit-controls.min.js"></script>
    <!-- <script src="assets/aframe-teleport-controls.min.js"></script> -->
    <script src="assets/aframe-look-at-component.js"></script>
    <script src="assets/animation-mixer.js"></script>
    <script src="assets/aframe-event-set-component.min.js"></script>

    <!-- Loading Styles and Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/newstyles.css?v=<?=$globalVersion?>" />

    <!-- Loads custom scripts for events and animations <-->
    <script src="assets/main.js?v=<?=$globalVersion?>"></script>
  </head>

  <body>
    <!-- Start AFRAME -->
    <a-scene shadow="type: pcfsoft" background="color: white" loading-screen="dotsColor: #ff3300; backgroundColor: white">

      <!-- All Images -->
      <a-assets>
        <a-asset-item id="tree-obj" src="src/male.obj"></a-asset-item>
        <a-asset-item id="tree-obj" src="src/female.obj"></a-asset-item>

        <img id="print1" src="src/bunt.jpeg?v=<?=$globalVersion?>">
        <img id="print2" src="src/art.jpeg?v=<?=$globalVersion?>">
        <img id="print3" src="src/pattern.jpeg?v=<?=$globalVersion?>">
        <img id="print4" src="src/rainbow.jpeg?v=<?=$globalVersion?>">
        <img id="print5" src="src/bismillah.jpg?v=<?=$globalVersion?>">

        <img id="img_sky" src="src/bgwhite2.jpg?v=<?=$globalVersion?>">
      </a-assets>


      <!-- Camera, with wrapper for repositioning -->
      <a-entity id='cameraWrapper' rotation="0 90 0" position="-0.12365 0 0.72366" >
        <a-entity  camera look-controls orbit-controls="target: 0 0 0; autoRotate: true; autoRotateSpeed: 0.05; minDistance: 5; maxDistance: 25; initialPosition: 2 2 6"></a-entity>
      </a-entity>


      <!-- T-Shirt Models -->
      <a-entity
        id="tshirty"
        obj-model="obj: src/male.obj"
        scale="0 0 0"
        position="-0.2 -3.05 0"
        rotation="0 90 0"
        material="src: #print1">
      </a-entity>

      <a-entity
        id="tshirtf"
        obj-model="obj: src/female.obj"
        scale="0.1 0.1 0.1"
        position="-0.2 -2.5 -6"
        rotation="0 90 0"
        material="src: #print1">
      </a-entity>


      <!-- Spotlight and fill lights -->
      <a-entity light="angle: 20; decay: 7; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.22; shadowCameraTop: 6.06; shadowCameraRight: 16.83; shadowCameraBottom: -4.91; shadowCameraLeft: -13.19; intensity: 0.25" position="-7.52044 6.6806 2.678"></a-entity>

      <a-entity light="angle: 20; decay: 10; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.04; shadowCameraTop: 9.48; shadowCameraRight: 16.74; shadowCameraBottom: -4.67; shadowCameraLeft: -13.27; intensity: 0.5" position="13.93467 17.45536 -7.90778"></a-entity>

      <a-entity light="intensity: 0.5; type: ambient"></a-entity>


      <!-- Goodbye, Friend :'(' -->
      <a-sphere position="6.96188 -0.37915 -9.11629" id="pizzaSphere" radius="1.25" color="#EF2D5E" shadow="" material="opacity: 0.6" geometry="radius: 0.5" animation="property: position; to: 5 -4.6 2; dur: 5500; dir: alternate; easing: linear; loop: true"></a-sphere>


      <!-- Background Image -->
      <a-sky id="mainsky" src="#img_sky"></a-sky>
    </a-scene>


    <!-- UI Elements -->
    <div class="switcher">
      Body Type
      <button class="switcher__button type_switcher this--active" data-showbodytype="tshirtf">Female</button>
      <button class="switcher__button type_switcher" data-showbodytype="tshirty">Male</button>
      <br>
      <br>
      Design
      <button class="switcher__button material_switcher this--active" data-outfitid="print1">Geometric</button>
      <button class="switcher__button material_switcher" data-outfitid="print2">Paint</button>
      <button class="switcher__button material_switcher" data-outfitid="print3">Abstract</button>
      <button class="switcher__button material_switcher" data-outfitid="print4">Rainbow</button>
      <!-- <button class="switcher__button material_switcher" data-outfitid="print5">Calligraphy</button> -->
    </div>


    <!-- Execute scripts after everything is loaded :) -->
    <script>
      aframeInteractions.init();
    </script>

  </body>
</html>