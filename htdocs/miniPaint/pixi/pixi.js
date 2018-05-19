import * as PIXI from 'pixi.js'

let type = "WebGL"
if(!PIXI.utils.isWebGLSupported()){
    type = "canvas"
}

//Create a Pixi Application
let wrapper = document.getElementById("canvasWrapper");
let app = new PIXI.Application();
let width = Math.round(window.innerWidth*0.9);
let height = Math.round(window.innerHeight*0.9);

wrapper.style.height = height;
wrapper.style.width = width;

//app.renderer.view.style.position = "absolute";
app.renderer.view.style.display = "block";
app.renderer.autoResize = true;
app.renderer.resize(width, height);

//Add the canvas that Pixi automatically created for you to the HTML document
wrapper.appendChild(app.view);