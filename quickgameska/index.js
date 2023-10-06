import * as THREE from 'three';
import { Vector3 } from 'three';

const renderer = new THREE.WebGLRenderer();
const geometry = new THREE.BufferGeometry();

renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 500 );
camera.position.set( 0, 0, 100 );
camera.lookAt( 0, 0, 0 );
//var position = new Vector3(20-window.innerWidth,0,0)
var cubeone = playerone();
var cubetwo = playertwo();
function drawcenter(){
const material = new THREE.LineDashedMaterial({
	color: 0xFFFFFF,
	linewidth: 2,
	scale: 1,
	dashSize: 3,
	gapSize: 10,
})

const points = [];
points.push( new THREE.Vector3( 0, window.innerHeight, 0 ) );
points.push( new THREE.Vector3( 0, -window.innerHeight, 0 ) );
const geometry = new THREE.BufferGeometry().setFromPoints( points );
const line = new THREE.Line( geometry, material );
scene.add( line );
}
drawcenter()

function playerone(){
    var geom = new THREE.BoxGeometry(1,10,1);
    var mat = new THREE.MeshBasicMaterial({color: 0xFFFFFF});
    var cube = new THREE.Mesh(geom, mat);
    cube.position.x = -50


    scene.add(cube);
    return(cube)
}
function playertwo(){
    var geom = new THREE.BoxGeometry(1,10,1);
    var mat = new THREE.MeshBasicMaterial({color: 0xFFFFFF});
    var cube = new THREE.Mesh(geom, mat);
    cube.position.x = 50


    scene.add(cube);
    return(cube)
}
var xSpeed = 1;
var ySpeed = 1;
document.addEventListener("keydown", onDocumentKeyDown, false);
function onDocumentKeyDown(event) {
    var keyCode = event.which;
    if (keyCode == 87) {
        cubeone.position.y += ySpeed;
    } else if (keyCode == 83) {
        cubeone.position.y -= ySpeed;
    } else if (keyCode == 38) {
        cubetwo.position.y += ySpeed;
    } else if (keyCode == 40) {
        cubetwo.position.y -= ySpeed;
    }
};

var render = function() {
    requestAnimationFrame(render);
    renderer.render(scene, camera);
  };


render()

