<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .parent{
        width: 100%;
        background-color: rgba(0, 0, 0, 0.8);
    }
    main {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        padding: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .container > div{
        flex-basis: 350px;
        height: 200px;
        cursor: pointer;
        margin: 10px 20px;
        transition: ease .4s;
    }
    .image:hover > img{
        filter: grayscale(50%);
        transform: scale(1.02);
    }
    .container >.image img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .background{
        width: 100vw;
        height: 100vh;
        background-color: rgba(250, 250, 250, 0.7);
        position: fixed;
        z-index: 9999;
        top: -1000%;
        justify-content: center;
        display: flex;
        align-items: center;
        transition: .8s ease-in-out;
        left: 0;
    }
    .close{
        position: relative;
        cursor: pointer;
    }
    .btn_fechar{
        position: fixed;
        top: -200%;
        border-radius: 8px;
        background-color: #000;
        right: 200%;
        border: white solid 1px;
        margin: 0 auto;
        transition: .8s ease-in-out;
        text-align: center;
        line-height: 37px;
        font-size: 25px;
        color: white;
        width: 40px;
        height: 40px;
    }
    .active{
        top: 0;
    }
    .btn_fechar_active{
        right: 20px;
        top: 20px;
    }
    .imagem-bg > img{
        width: 70vw;
        height: 70vh;
    }

</style>
<div class="parent">
    <main>
        <div class="container">
            <div class="image">
                <img src="../img/fotosHome/img1.jpg" alt="Imagem" class="img">
            </div>
    
            <div class="image">
                <img src="../img/fotosHome/img2.jpg" alt="Imagem" class="img">
            </div>
    
            <div class="image">
                <img src="../img/fotosHome/img3.jpg" alt="Imagem" class="img">
            </div>
    
            <div class="image">
                <img src="../img/fotosHome/img4.png" alt="Imagem" class="img">
            </div>
    
            <div class="image">
                <img src="../img/fotosHome/img5.jpg" alt="Imagem" class="img">
            </div>
    
            <div class="image">
                <img src="../img/fotosHome/img6.jpg" alt="Imagem" class="img">
            </div>
        </div>
    </main>
    
    <div class="background">
        <div class="imagem-bg">
            <img src="" alt="Imagem" class="img-bg">
        </div>
        
        <div class="close">
            <span class="btn_fechar">&times;</span>
        </div>
    </div>

</div>

<script>

    let imagens = document.querySelectorAll('.img');
    let background = document.querySelector('.background');
    let imagem_bg = document.querySelector('.img-bg');
    let btn_close = document.querySelector('.btn_fechar');
    let pathImagem = "";
    for (let i = 0; i < imagens.length; i++) {
        imagens[i].addEventListener('click', function(){
            pathImagem = imagens[i].getAttribute('src');
            console.log(pathImagem);
            imagem_bg.setAttribute('src', pathImagem);
            background.classList.add('active');
            btn_close.classList.add('btn_fechar_active')
        });
    }

    btn_close.addEventListener('click',function(){
        background.classList.remove('active');
        btn_close.classList.remove('btn_fechar_active')
    });
    /*
    for (let i = 0; i < imagens.length; i++) {
        imagens[i].addEventListener('click', function () {
            console.log('Hello?');
            srcVal = imagens[i].getAttribute('src');
            modalImg.setAttribute('src', srcVal);
            modal.classList.toggle('modal_active');
        });

    }


    btClose.addEventListener('click', function () {
        modal.classList.toggle('modal_active');
    });*/
</script>