<footer class="footer">
        <div class="footer-container container">

            <div class="logo">Superbuildings</div>
            <div id ="footer-nav">
                <a href="#">Home</a>
                <a href="#menu">Menu</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="contact">
                <h4>contact</h4>
                <p>Medellin Colombia</p>
                <p>123 Main Street, City, Country</p>
                <p>3bo7 825 1384</p>
            </div>
            </div>
            <div class="footer-bottom">
                <p> <?php echo date('Y'); ?> superbuildings. All rights reserved.</p>
            </div>
        </div>
    <?php if(isset($scripts) && is_array($scripts)): ?> 
    <?php foreach($scripts as $script): ?> 
    <script src="<?php echo BASE_URL . "js/$script.js"; ?>"></script>
    <?php endforeach; ?> <?php endif; ?> 
    
</body> 
</html> 
?> 

