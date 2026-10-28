<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.navbar-brand {
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color: #1a76bb;
    margin-left: -20px;
}

.navbar-brand:hover {
    color: #00a4e5;
    }

.nav-link {
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color: #1a76bb;
}

.nav-link:hover {
    color: #00a4e5;
}

.navbar-custom .nav-link.active {
    border: 2px solidrgb(0, 0, 0);
    background-color: #00a4e5; 
    color:rgb(255, 255, 255);
    border-radius: 25px; 
}

.nav-item {
    margin-right: -10px;
    margin-left: 40px;
}

.navbar-custom {
    background-color: #ffffff;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.9);
}

p{
    text-align: justify;
    color: #ffffff;
}

body {
    font-family: sans-serif;
    font-size: 16px;
    line-height: 1.5;
    background-color: #ffffff;
    
}

.bg-yellow {
    background-color: #ffe01e;
    color: #1a78af;
}

.yellow {
    background-color: #ffe01e;
    color: #1a78af;
    font-family: 'Catamaran', sans-serif;
}

.lightblue {
    background-color: #00a4e5;
}

.cyan {
    color: #1a78af;
}

.center {
    text-align: center;
}

.hero-section {
    position: relative;
    color: white;
    z-index: 1;
    height: 100vh;
}


.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: .40;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
}

.stormshield-logo {
    position: absolute;
    width: 50%;
    height: auto;
    margin-top: 4%;
    margin-left: -13%;
    opacity: 1;
    z-index: 1;
    transition: transform 0.3s ease;
}

.stormshield-logo:hover {
    transform: scale(1.1);
}

.hero-section h3 {
    position: absolute;

    font-size: 3em;
    margin-top: 16%;
    margin-bottom: 12%;
    padding-right: 100px;
    letter-spacing: -1.4px;
    color: black;
    z-index: 2;
    font-family: 'Exo', sans-serif;
}

.hero-section button {
    position: absolute;
    font-size: 2em;
    border: 0px;
    margin-top: 7%;
    margin-bottom: 5%;
    padding: 5px;
    padding-left: 35px;
    padding-right: 35px;
    z-index: 2;
    border-radius: 40px;
    font-weight: 400px;
    background-color:rgb(230, 230, 230);
    color: rgb(0, 0, 0);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
}

.update-section {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    position: relative;
    height: 100vh; 
    display: flex;
    justify-content: center; 
    align-items: top; 
}

.update-section .container {
    margin-top: 2em;
    position: absolute; 
    z-index: 2; 
    text-align: center;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    border: 2px solid rgba(23, 45, 94, 0.5);
    
}

.update-section p {
    font-size: 1em;
    margin-top: 2px;
    margin-bottom: 3%;
    text-align: justify;
    color:rgb(17, 17, 17); 
    font-family: "Noto Sans", sans-serif;
}

.update-section h6 {
    font-weight: 5px;

    margin: 1px;
    text-align: center;
    color:rgb(17, 17, 17); 
    font-family: "Noto Sans", sans-serif;
}


.update-section .col:hover {
    transform: scale(1.05); 
    transition: transform 0.3s ease; 
}


.update-section .col {
    transition: transform 0.3s ease; 
    margin: 1em;
    padding: 1em;
    border-radius: 10px;
}


.update-section h1 {
    display: inline-block;
    font-size: 5em;
    font-weight: 3em;
    text-align: center;
    color:rgb(17, 17, 17); 
    font-family: fantasy;
    letter-spacing: 3px;
    
}
.update-on-text {
    width: 20em;
    height: 15em;
    object-fit: cover;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 2px solid black;
    margin-bottom: 1em;
}

.update-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: .60;
}

.update-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgb(255, 255, 255)); 
    z-index: 1;
    pointer-events: none; 
}

.socials-section {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    position: relative;
    height: 100vh; 
    display: flex;
    justify-content: center; 
    align-items: top; 
}

.socials-section .container {
    margin-top: 2em;
    position: absolute; 
    z-index: 2; 
    text-align: center;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    border: 2px solid rgba(23, 45, 94, 0.5);
}


.socials-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: .60;
}
.socials-section p {
    font-size: 1em;
    margin-top: 2px;
    margin-bottom: 3%;
    margin-left: 2px;
    text-align: left;
    color:rgb(17, 17, 17); 
    font-family: "Noto Sans", sans-serif;
}

.socials-section h6 {
    font-weight: 5px;

    margin: 1px;
    text-align: center;
    color:rgb(17, 17, 17); 
    font-family: "Noto Sans", sans-serif;
}


.socials-section .col:hover {
    transform: scale(1.05); 
    transition: transform 0.3s ease; 
}


.socials-section .col {
    transition: transform 0.3s ease; 
    margin: 1em;
    padding: 1em;
    border-radius: 10px;
}


.socials-section h1 {
    display: inline-block;
    font-size: 5em;
    font-weight: 3em;
    text-align: center;
    color:rgb(17, 17, 17); 
    font-family: fantasy;
    letter-spacing: 3px;
    
}
.socials-on-text {
    width: 10em;
    height: 10em;
    object-fit: cover;
    display: block;
    margin-left: auto;
    margin-right: 2px;
    border: 2px solid black;
    border-radius: 100%;
    margin-bottom: .1em;
}

.socials-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: .60;
}

.about-title {
    font-family: 'Exo', sans-serif;
    font-weight: bold;
    font-size: 50px;
    padding: 15px;
}

.about-title-VPV {
    font-family: 'Exo', sans-serif;
    font-weight: bold;
    font-size: 30px;
    padding: 15px;
    border-radius: 5px;
}

.about-text {
    font-family: 'Ubuntu Mono', monospace;
    font-size: 20px;
    padding: 5px;
}

.about-image {
    width: 20em;
    height: 15em;
    object-fit: cover;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 2px solid black;
    margin-bottom: 1em;
    transition: transform 0.3s ease;
}

.about-image:hover {
    transform: scale(1.15); 
}
.about-body {
    background-color: #ffffff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
}

.about-col {
    margin: 1em;
}

.travel-info {
    padding-left: 70px;
    padding-right: 70px;
}

.boxes {
    background-color: #ffffff;
    margin-bottom: 5em;
    width: 100%;
}

.boxes .container {
    display:flex;
    justify-content: center;
    flex-direction: row;
}

.box {
    flex: 1;
    display:flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin-top: 2em;
    transition: all 0.3s;
}

.box h3 {
    text-align: center;
    font-weight: 700;
    margin-top: 10px;
}

.box:hover {
    transform: scale(1.15);
}

.buttons {
    width: 150px;
    object-fit: cover;
}

.places {
    width: 1000px;
    object-fit: cover;
}

.home h1 {
    font-family: 'Exo', sans-serif;
    font-weight: 700;
}

.ubuntu {
    font-family: 'Ubuntu Mono', monospace;
    font-size: 30px;
    font-weight: 700;
    color: #000;
}

.img-hv {
    transition: transform 0.3s ease;
}

.img-hv:hover {
    transform: scale(1.05);
}

.flights h3 {
    font-family: 'Exo', sans-serif;
    font-weight: bold;
    margin-bottom: 1rem;
}

.flights .list-group-item {
    font-family: 'Ubuntu Mono', monospace;
    font-size: 1rem;
    color: #000;
}

.carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    width: 50px;
    height: 50px;
}

</style>