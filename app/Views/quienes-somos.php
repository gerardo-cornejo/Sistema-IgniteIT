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
                <input type="hidden" value="¿por qué existe?">
                Somos jóvenes profesionales con amplias capacidades tecnológicas dispuestos a crear o mejorar soluciones
                que satisgagan las necesidades del país
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
                Generar un valor agregado en nuestra sociedad, incluyendo al cliente en el proceso de desarrollo, con la
                finalidad de crear soluciones que puedan maximizar la satisfacción con nuestro producto
            </p>

        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex flex-column texto-centrado">
            <label class="h1" for="">Nuestra visión</label>
            <p class="text pt-2 pb-2">
                Somos jóvenes profesionales con amplias capacidades tecnológicas dispuestos a crear o mejorar soluciones
                que satisgagan las necesidades del país
            </p>

        </div>
        <div class="col-md-6">
            <img class="w-100"
                src="https://img.freepik.com/vector-gratis/ilustracion-concepto-codigo-binario_114360-6578.jpg" alt="">
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>



<script>


</script>
<?= $this->endSection() ?>