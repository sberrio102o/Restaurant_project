
<?php
$scripts = ['app']; // JS global 
require 'include/funciones.php';
incluirTemplates('header');
// include 'include/templates/header.php'; 
?>

<body>
    
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>structures that make you fall in love</h1>
            <p id="secondarytext">Experience the best ideas for your space!</p> 
            <button class="adm-buttons admin-btn"style="margin-left: 500px; margin-right: 500px;"><a href="<?php echo BASE_URL; ?>#menu">menu</a></button>

        </div>
    </section>
    <section class="menu container" id="menu">
        <h2>Our latest</h2>
        <div class="cards">
            <div class="card">
                <img src="assets/imagenes/img/latest1.png" alt="Food Item">
                <div class="card-body">
                    <h3>Modern style</style></h3>
                    <p>Modern architecture, <span> prominent from the 1920s to the 1980s,</span> is a 20th-century movement characterized by minimalism, functionality ("form follows function"), and the rejection of ornamentation. It utilizes new technologies like steel, glass, and reinforced concrete to create clean lines, open floor plans, and geometric forms. Key figures include Le Corbusier, Frank Lloyd Wright, and Ludwig Mies van der Rohe</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/imagenes/img/latest2.png" alt="Food Item">
                <div class="card-body">
                    <h3>A-frame</h3>
                    <p>Architectural framing provides essential support for cladding materials. The structural members, such as columns and beams, not only carry the load of the building but also create the framework to which cladding materials are attached.</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/imagenes/img/tudor.png" alt="Food Item">
                <div class="card-body">
                    <h3>Tudor</h3>
                    <p>Tudor architecture <span>(1485-1603) </span> is a transitional English style blending late Perpendicular Gothic with Renaissance elements, famously characterized by half-timbering, steep gabled roofs, and massive chimneys. It is recognized by black-and-white exteriors, ornate masonry, large mullioned windows, and asymmetrical, often E- or H-shaped, layouts, representing a shift towards domestic comfort and wealth display. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery container" id="gallery">
        <h2 id="gallery_title">Gallery</h2>
        <div class="gallery-grid">
            <img src="assets/imagenes/img/imagen (1).png" alt="Gallery Image 6">
            <img src="assets/imagenes/img/imagen (2).png" alt="Gallery Image 7">
            <img src="assets/imagenes/img/imagen (3).png" alt="Gallery Image 8">
            <img src="assets/imagenes/img/imagen (4).png" alt="Gallery Image 9">
            <img src="assets/imagenes/img/imagen (5).png" alt="Gallery Image 10">
            <img src="assets/imagenes/img/imagen (6).png" alt="Gallery Image 11">
            <img src="assets/imagenes/img/imagen (7).png" alt="Gallery Image 12" id="plate12">
            <img src="assets/imagenes/img/imagen (8).png" alt="Gallery Image 13">
            <img src="assets/imagenes/img/imagen (9).png" alt="Gallery Image 14">
            <img src="assets/imagenes/img/imagen (10).png" alt="Gallery Image 15">
            <img src="assets/imagenes/img/imagen (11).png" alt="Gallery Image 16">
            <img src="assets/imagenes/img/imagen (12).png" alt="Gallery Image 17">
        </div>
    </section>
<?php include 'include/templates/footer.php'; ?>
    
<script src="js/app.js"></script>
</body>

</html>