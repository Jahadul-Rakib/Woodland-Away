<?php include 'inc/header.php';
include 'vendor/autoload.php';
use App\Animal\Animal;
$animalObj = new Animal();
$allAnimal = $animalObj->allAnimals();
?>

<section class="about-page-content">
    <div class="container">

        <div class="fetured-services">
            <div class="row fetured-services-title">
                <div class="col-xs-12">
                    <h3>All Slides</h3>
                </div>
            </div>
            <div class="row fetured-services-content">
                <?php foreach ($allAnimal as $animal){

                ?>
                <div class="col-sm-4">
                    <div class="services-content">
                        <a data-fancybox="gallery" href="upload/<?php echo $animal['image']; ?>"><img src="upload/<?php echo $animal['image']; ?>""></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>

<?php include 'inc/footer.php'; ?>