<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Future</title>
</head>
<body>
<section class="home">
    <!--Videot e qdo slide-->
    <video class="video-slide active" src="pexels_videos_1448735 (2160p).mp4" autoplay muted loop></video>
    <video class="video-slide" src="pexels-ruvim-miksanskiy-9634587 (1080p).mp4" autoplay muted loop></video>
    <video class="video-slide" src="video (1080p).mp4" autoplay muted loop></video>
    
    <video class="video-slide" src="pexels_videos_2098988 (2160p).mp4" autoplay muted loop></video>
    <video class="video-slide" src="video_shot_of_river (Original).mp4" autoplay muted loop></video>


    <div class="content active">
       <h1>Bjeshkë.<br><span>Ngjitemi</span></h1>
       <p>Hello</p>
       <a href="#">Lexo me shumë</a>
    </div>

    <div class="content">
        <h1>Natyrë.<br><span>Merr frymë</span></h1>
        <p>Hello</p>
        <a href="#">Lexo me shumë</a>
     </div>

     <div class="content">
        <h1>Kamping<br><span>Argëtohu</span></h1>
        <p>Hello</p>
        <a href="#">Lexo me shumë</a>
     </div>

     <div class="content">
        <h1>Vrapim.<br><span>Buzeqesh</span></h1>
        <p>Hello</p>
        <a href="#">Lexo me shumë</a>
     </div>

     <div class="content">
        <h1>Lojëra.<br><span>Të gjithë së bashku</span></h1>
        <p>Hello</p>
        <a href="#">Lexo me shumë</a>
     </div>

    <div class="media-icons">
        <a href="#"><img src="facebook.svg" alt=""></i></a>
        <a href="#"><img src="instagram.svg" alt=""></i></a>
    </div>

   
   </section>
</body>
</html>
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
header{
    z-index: 999;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 100px;
   transition: 0.5s ease;
}
header .emri{
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
}
header .navigation{
    position: relative;
}
header .navigation .navigation-items a{
    position: relative;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    margin-left: 30px;
    transition: 0.3s ease;
}

header .navigation .navigation-items a:before{
    content: '';
    position: absolute;
    background: #fff ;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    transition: 0.3s ease;
}
header .navigation .navigation-items a:hover:before{
    width: 100%;
}

section{
    padding: 100px 100px;
}
.home{
    position: relative;
    width: 100%;
    min-height: 600px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background: rgb(4, 75, 42);
    overflow: hidden;
}
.home:before{
    z-index: 777;
    content: '';
    position: absolute;
    
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.home .content{
    z-index: 888;
    color: #fff;
    width: 70%;
    margin-top: 50px;
    display: none;

}

.home .content.active{
    display: block;
}
.home .content h1{
    font-size: 50px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 5px;
    line-height: 75px;
    margin-bottom: 40px;
}

.home .content h1 span{
    font-size: 50px;
    font-weight: 600;
}
.home .content p{
    margin-bottom: 65px;
}
.home .content a{
    background: #fff;
    padding: 15px 35px;
    color: olive;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    border-radius: 2px;
}

.home .media-icons{
    z-index: 888;
    position: absolute;
    right: 30px;
    display: flex;
    flex-direction: column;
    transition: 0.5s ease;
}
.home .media-icons a{
    color: #fff;
    font-size: 25px;
    transition: 0.3s ease;
}
.home .media-icons a:not(:last-child){
    margin-bottom: 20px;
}
.home .media-icons a:hover{
    transform: scale(1.3);
}

.home video{
    z-index: 000;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slider-navigation{
    z-index: 888;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(80px);
    margin-bottom: 12px;
}
.slider-navigation .nav-btn{
    width: 12px;
    height: 12px;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
    transition: 0.3s ease;
}

.slider-navigation .nav-btn.active{

    background: olive;
}
.slider-navigation .nav-btn:not(:last-child){
    margin-right: 20px;
}
.slider-navigation .nav-btn:hover{
    transform: scale(1.2);
}

.video-slide{
    position: absolute;
    width: 100%;
    /*Css clip path maker n google*/
    clip-path: circle(0% at 0 50%);
}

.video-slide.active{
    clip-path: circle(150% at 0 50%);
    transition: 2s ease;
    transition-property: clip-path;
}

@media (max-width: 1040px){
    header{
        padding: 12px 20px;
       
    }
    section{
        padding: 100px 20px;
    }
    .home .media-icons{
        right: 15px;
    }
    header .navigation{
        display: none;
    }

    header .navigation.active{
        
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(1,1,1,0.5);
    }
    header .navigation .navigation-items a{
        color: #222;
        font-size: 19px;
        margin: 20px;
    }
    header .navigation .navigation-items a:before{
        background: #222;
        height: 5px;
    }
    header .navigation.active .navigation-items{
        background: #fff;
        width: 600px;
        max-width: 600px;
        margin: 20px;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }
    .menu-btn{
        background: url(menu.png)no-repeat;
        background-size: 30px;
        background-position: center;
        width: 40px;
        height: 40px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .menu-btn.active{
        z-index: 999;
        background: url(x-btn.webp)no-repeat;
        background-size: 60px;
        background-position: center;
        transition: 0.3s ease;
    }
}


</style>
<script> const btns= document.querySelectorAll(".nav-btn");
    const slides= document.querySelectorAll(".video-slide");
    const contents= document.querySelectorAll(".content");

    var sliderNav= function(manual){ //manual ka vleren e i

        btns.forEach((btn) =>{
btn.classList.remove("active");//butonat videot dhe contentet tjera peros aktuales duhet larguar klasa active
        });

        slides.forEach((slide) =>{
slide.classList.remove("active");
        });

        contents.forEach((content) =>{
content.classList.remove("active");
        });

        btns[manual].classList.add("active"); //butonit me index manual(i) i shtohet klasa active
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    };

        btns.forEach((btn, i) => { //merr qdo buton me indexin e tij
btn.addEventListener("click", () =>{
sliderNav(i);//onclick t butonit ndodh funksioni me parametrin i
});
        });
    </script>