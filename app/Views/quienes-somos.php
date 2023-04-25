<?= $this->extend('default') ?>

<?= $this->section('css') ?>
<title>¿Quiénes somos? - Ignite IT</title>
<style>
    .text {
        font-size: 18pt;
    }

    .texto-centrado {
        display: -ms-flexbox !important;
        display: flex !important;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
    }
</style>

<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex flex-column texto-centrado">
            <label class="h1" for="">¿Quiénes somos?</label>
            <p class="text pt-2 pb-2">
                En Ignite IT, somos un equipo altamente capacitado y apasionado por el desarrollo de
                software innovador y de alta calidad. Trabajamos en colaboración con nuestros clientes para crear
                soluciones a medida que mejoren su desempeño empresarial y les brinden una ventaja competitiva en su
                industria. Estamos comprometidos con la mejora continua y la innovación constante para estar siempre a
                la vanguardia del desarrollo de software.

            </p>

        </div>
        <div class="col-md-6">
            <img class="w-100"
                src="https://img.freepik.com/vector-gratis/ilustracion-concepto-codigo-binario_114360-6578.jpg" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="w-100"
                src="https://img.freepik.com/vector-gratis/ilustracion-concepto-programador_114360-2217.jpg" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column texto-centrado">
            <label class="h1" for="">Nuestra misión</label>
            <p class="text pt-2 pb-2">
                <input type="hidden"
                    value=" dónde quieres llegar? ¿Cuáles son los objetivos permanentes de la organización?">
                Ayudamos a nuestros clientes a mejorar su desempeño empresarial mediante el desarrollo de software
                innovador y de alta calidad, creado por nuestro equipo altamente creativo, inteligente y
                tecnológicamente capacitado.
            </p>

        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex flex-column texto-centrado">
            <label class="h1" for="">Nuestra visión</label>
            <p class="text pt-2 pb-2">
                Ser la empresa líder en el desarrollo de software innovador y eficiente, que satisfaga las necesidades
                de nuestros clientes y mejore su rendimiento empresarial.
            </p>

        </div>
        <div class="col-md-6">
            <img class="w-100"
                src="https://img.freepik.com/foto-gratis/persona-trabajando-html-computadora_23-2150038840.jpg" alt="">
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>



<script>


</script>
<?= $this->endSection() ?>