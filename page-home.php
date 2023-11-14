<?php
/*
Template Name: Page Home
*/
?>
<?php get_header()?>

<?php $fondo = get_field('fondo')?>
<?php $fondo_2 = get_field('fondo_2')?>
<?php $fondo_3 = get_field('fondo_3')?>
<?php $fondo_4 = get_field('fondo_4')?>
<?php $logo = get_field('logo')?>
<?php $content = get_field('contenido')?>


<?php $flor_blanca = get_field('img_1')?>
<?php $flor_roja = get_field('img_2')?>
<?php $jirafa = get_field('img_3')?>
<?php $pajaro = get_field('img_4')?>
<?php $flor_roja_2 = get_field('img_5')?>
<?php $zebra = get_field('img_6')?>
<?php $avestruz = get_field('img_7')?>
<?php $avestruz_dos = get_field('img_8')?>
<?php $avestruz_tres = get_field('img_9')?>
<?php $flor_roja_3 = get_field('img_10')?>
<?php $flor_blanca_2 = get_field('img_11')?>
<?php $rama = get_field('img_12')?>
<?php $pajaro_2 = get_field('img_13')?>
<?php $flor_roja_4 = get_field('img_14')?>

<main class="landing-page">

    <div class="overlay overlay--first" style="background-image: url('<?php echo $fondo ?>');"></div>
    <div class="overlay overlay--second" style="background-image: url('<?php echo $fondo_2 ?>');"></div>
    <div class="overlay overlay--third" style="background-image: url('<?php echo $fondo_3 ?>');"></div>
    <div class="overlay overlay--fourth" style="background-image: url('<?php echo $fondo_4 ?>');"></div>

    <!-- left deco images -->
    <img class="img-deco img-deco-a" src="<?php echo $flor_blanca ?>" alt="for blanca">
    <img class="img-deco img-deco-b" src="<?php echo $flor_roja ?>" alt="flor roja">
    <img id="jirafa" class="img-deco img-deco-c" src="<?php echo $jirafa ?>" alt="jirafa">
    <img class="img-deco img-deco-d img-deco-m" src="<?php echo $pajaro ?>" alt="ave">
    <img class="img-deco img-deco-e img-deco-xs" src="<?php echo $flor_roja_2 ?>" alt="flor roja">
    <img id="zebra" class="img-deco img-deco-f img-deco-s" src="<?php echo $zebra ?>" alt="zebra">
    <img class="img-deco img-deco-p img-deco-s" src="<?php echo $flor_roja_4 ?>" alt="flor roja">
    <img id="ave" class="img-deco img-deco-g img-deco-s ave" src="<?php echo $avestruz ?>" alt="ave">
    <img id="ave-b" class="img-deco img-deco-h img-deco-s ave" src="<?php echo $avestruz_dos ?>" alt="ave">
    <img id="ave-c" class="img-deco img-deco-i img-deco-s ave" src="<?php echo $avestruz_tres ?>" alt="ave">
    <img class="img-deco img-deco-j img-deco-s" src="<?php echo $flor_roja_3 ?>" alt="flor roja">
    <img class="img-deco img-deco-k img-deco-s" src="<?php echo $flor_blanca_2 ?>" alt="flor blanca">
    <img class="img-deco img-deco-l img-deco-s" src="<?php echo $rama ?>" alt="rama">
    <img class="img-deco img-deco-n" src="<?php echo $pajaro_2 ?>" alt="ave">

<!-- main content -->
    <div class="container">
        <div class="logo-wrapper">
            <img class="logo" src="<?php echo $logo ?>" alt="logo">
        </div>
        <div class="content">
            <?php echo $content ?>
        </div>
        
    </div>
</main>

<?php get_footer() ?>