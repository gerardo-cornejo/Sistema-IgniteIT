<?= $this->extend('default') ?>

<?= $this->section('css') ?>
<title>Inicio - Ignite IT</title>
<style>
    #slider {
        background-image: url('https://img.freepik.com/foto-gratis/cerrar-hombre-escribiendo-codigo-computadora-portatil_158595-5169.jpg');
        background-position: center;
        background-size: cover;
    }

    .abs-center {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        flex-direction: column;
    }

    .h1 {
        font-size: 40pt !important;
    }

    .widget {
        width: 76px;
        height: 76px;
        background-color: darkmagenta !important;

    }

    .widget i {
        font-size: 32pt !important;
    }
</style>

<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="bg-warning" id="slider">
    <div class="text-center abs-center text-white text-uppercase">
        <h1 class="h1">Desarrollamos herramientas</h1>
        <h3>Que cambiarán tu vida</h3>
    </div>
</div>
<div class="container mt-4 mb-4">
    <div class="text-center pt-3 pb-4">
        <label class="h1" for="">Nuestros pilares</label>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <div class="rounded-circle text-white p-1 text-center widget ml-auto mr-auto mt-3 mb-4">
                    <i class="bi bi-gear-wide-connected rounded-circle text-white p-1 text-center m-auto"></i>
                </div>
                <div class="card-title text-center">
                    <h4>Metodología incremental</h4>
                </div>
                <div class="card-body">
                    <p class="text-justify">Usamos una meotodología ágil e incremental con la finalidad que nuestros
                        clientes puedan ir
                        viendo el
                        avance del producto.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <div class="rounded-circle text-white p-1 text-center widget ml-auto mr-auto mt-3 mb-4">

                    <i class="bi bi-file-earmark-check-fill rounded-circle text-white p-1 text-center m-auto"></i>
                </div>
                <div class="card-title text-center">
                    <h4>Aseguramiento de calidad</h4>
                </div>
                <div class="card-body">
                    <p class="text-justify">Realizamos pruebas mientras desarrollo nuestros productos y, al finalizar,
                        para asegura la
                        calidad del producto.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <div class="rounded-circle text-white p-1 text-center widget ml-auto mr-auto mt-3 mb-4">
                    <i class="bi bi-box2-heart rounded-circle text-white p-1 text-center m-auto"></i>
                </div>
                <div class="card-title text-center">
                    <h4>Pasión por el software</h4>
                </div>
                <div class="card-body">
                    <p class="text-justify">¡Nos encanta desarrollar software! Es por eso que nos comprometemos en darte
                        productos que satisfagan tus necesidades.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>



<script>
    $("#slider").attr("style", "height:" + (window.innerHeight - 56) + "px !important;");
    var intervalo = 3000;
    var imagenes = [
        "https://img.freepik.com/foto-gratis/concepto-collage-html-css_23-2150061957.jpg",
        "https://img.freepik.com/foto-gratis/vista-superior-pirata-informatico-irreconocible-que-realiza-ciberataque-noche_1098-18706.jpg",
        "https://img.freepik.com/foto-gratis/cerrar-hombre-escribiendo-codigo-computadora-portatil_158595-5169.jpg"
    ];

    function iniciarSlider() {
        console.log("inciando slider");
        var css = ["background-position: center;", "background-size: cover;", "height:" + (window.innerHeight - 56) + "px !important;"];
        console.log();
        for (let i = 0; i < imagenes.length; i++) {
            let img = imagenes[i];
            setTimeout(() => {
                $("#slider").attr("style", css.join("") + "background-image:url('" + img + "') !important;");
            }, intervalo * (i + 1));
        }
        setTimeout(iniciarSlider, intervalo * imagenes.length);

    }

    $(document).ready(iniciarSlider);

</script>
<?= $this->endSection() ?>