
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}


/*aqui faz as imagens ficarem uma do lado da outra galera*/
.slider{
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    background: #000;
}

.slider .imgBx{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s;
    transition-delay: 0s;
    z-index: 1;
    /*deixa preto pra fazer a ação da bolinha lá*/
    clip-path: circle(0px at center);
}

.slider input[type="radio"]:checked + .imgBx{
    z-index: 10;

    clip-path:circle(1000px at center);
    transition-delay: 0.75s;
}


.slider .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.5;
    filter: blur(1.5px);
    object-fit: cover;
}

.slider .imgBx .content{
    position: relative;
    text-align: center;
    max-width: 800px;
}

.slider .imgBx .content h2{
    font-size: 6em;
    line-height: 1em;
    color: #fff;
}
/*fonte grandona*/
.slider .imgBx .content p{
    font-size: 1.2em;
    color:#fff;
}
/*quadrado do link*/
.slider .imgBx .content a{
    position: relative;
    display: inline-block;
    background: #fff;
    padding: 10px 30px;
    color: #111;
    font-weight: 500;
    margin-top: 20px;
    text-decoration: none;
    color: #daa520;
}
.slider .imgBx .content a:hover{
    color: #111;
    background: #daa520;
}

.slider input[type="radio"]{
    position: relative;
    z-index: 1000;
    margin: 5px;
    margin-bottom: 40px;
    outline: none;
    cursor: pointer;
}
/*vitorinha deu uma melhorada pra ficar responsivo*/
@media (max-width: 768px){
    header{
        padding: 20px 40px;
    }
    .slider .imgBx{
        padding: 40px;
    }
    .slider .imgBx .content h2{
        font-size: 3em;
    }
    .slider .imgBx .content p{
        font-size: 1em;
        color: #fff;
        margin-top: 10px;
    }
}
</style>

    <header>
        <div class="toggle"></div>
    </header>
    <div class="slider">
        <input type="radio" name="slider" checked="checked">
        <div class="imgBx">
            <img src="../img/carrossel/aleatório1.jpg">
            <div class="content">
                <h2>Obras Renascentistas</h2>
                <p>Aqui teremos as principais obras renascentistas de artistas como, Leonardo Da Vinci, Michelangelo, Raffaello Sanzio e Ticiano Vecellio.</p>
                     <a href="ObrasFuncionario.php">Ver Mais</a>
            </div>
        </div>
        <input type="radio" name="slider">
        <div class="imgBx">
            <img src="../img/carrossel/A Anunciação Leonardo Da Vinci 1472.jpg">
            <div class="content">
                <h2>Da Vinci</h2>
                <p>A Anunciação, obra representando o arcanjo Gabriel no momento que anunciava a Maria que fora escolhida pelo Senhor para ser a mãe de Jesus, seu filho.
                O trabalho ficou oculto até 1867 quando foi transferido de um convento próximo a Florença para a Galeria degli Uffizi, também em Florença.
                </p>
                <a href="ObrasFuncionario.php">Ver Mais</a>
            </div>
        </div>
        <input type="radio" name="slider">
        <div class="imgBx">
            <img src="../img/carrossel/A criação de Adão - Michelangelo - 1512.jpg">
            <div class="content">
                <h2>Michelangelo</h2>
                <p>A criação de Adão, Esse é um trabalho realizado com a técnica do afresco e integra o conjunto de pinturas feitas no Teto da Capela Sistina, produzidas entre 1508 e 1512 por encomenda do papa Júlio II.</p>
                     <a href="ObrasFuncionario.php">Ver Mais</a>
            </div>
        </div>
        <input type="radio" name="slider">
        <div class="imgBx">
            <img src="../img/carrossel/Vênus e o Organista Ticiano.jpg">
            <div class="content">
                <h2>Ticiano Vecellio</h2>
                <p>Vênus e o Organista, a composição mitológica denominada Vênus e o Organista, também conhecida por Vênus com um Organista e Cão, é uma obra do pintor renascentista italiano Ticiano Vecellio, que usou tal temática para criar outras obras.</p>
                     <a href="ObrasFuncionario.php">Ver Mais</a>
            </div>
        </div>
        <input type="radio" name="slider">
        <div class="imgBx">
            <img src="../img/carrossel/Raffaello Sanzio - Disputa do Santíssimo Sacramento 1510.jpg">
            <div class="content">
                <h2>Raffaello Sanzio</h2>
                <p>Disputa do Santíssimo Sacramento,  Foi pintada entre 1509 e 1510 como a primeira parte da comissão de Rafael para decorar com afrescos os quartos que hoje são conhecidos como Stanze di Raffaello, no Palácio Apostólico do Vaticano.</p>
                     <a href="ObrasFuncionario.php">Ver Mais</a>
            </div>
        </div>
    </div>