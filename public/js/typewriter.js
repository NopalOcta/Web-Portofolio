// for typewriter
var app = document.getElementById('sentence');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString("I'm a Front-end Developer")
    .pauseFor(2500)
    .deleteChars(19)
    .typeString("Back-end Developer")
    .pauseFor(2500)
    .deleteChars(18)
    .typeString("Full-stack Developer")
    .pauseFor(2500)
    .start();
// end for typewriter
