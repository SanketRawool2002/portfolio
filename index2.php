<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWhale - 3D Portfolio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }
        canvas {
            display: block;
        }
        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 2;
            font-size: 2rem;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        .cta {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .cta:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>CodeWhale</h1>
        <p>We Develop Stunning Websites & Web Apps</p>
        <div class="cta">Explore Our Work</div>
    </div>
    <script>
        let scene = new THREE.Scene();
        let camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        let renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        let geometry = new THREE.TorusKnotGeometry(10, 3, 100, 16);
        let material = new THREE.MeshStandardMaterial({ color: 0x00ffcc, metalness: 0.7, roughness: 0.2 });
        let torusKnot = new THREE.Mesh(geometry, material);
        scene.add(torusKnot);

        let light = new THREE.PointLight(0xffffff, 2);
        light.position.set(50, 50, 50);
        scene.add(light);

        camera.position.z = 50;
        function animate() {
            requestAnimationFrame(animate);
            torusKnot.rotation.x += 0.01;
            torusKnot.rotation.y += 0.01;
            renderer.render(scene, camera);
        }
        animate();
    </script>
</body>
</html>
