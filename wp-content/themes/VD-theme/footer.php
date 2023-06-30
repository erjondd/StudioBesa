<footer class="footer">
    <div class="footer-background">
        <img src="<?= get_template_directory_uri() ?>\images\footer-background.png" alt="">
    </div>
    <div class="container">
        <div class="footer-logo">
            <img src="<?= get_template_directory_uri() ?>\images\footer-logo.png" alt="">
        </div>
        <div class="footer-rightsideabsolute">
            <img src="<?= get_template_directory_uri() ?>\images\footer-rightside.png" alt="">
        </div>
        <div class="footer-menu">
            <?php
            echo wp_nav_menu(array(
                'menu' => 'Footer Menu',
            ));
            ?>
        </div>
        <div class="footer-socials">
            <div class="footer-facebook"><a href="#"><img src="<?= get_template_directory_uri() ?>\images\facebook.png" alt=""></a></div>
            <div class="footer-instagram"><a href="#"><img src="<?= get_template_directory_uri() ?>\images\instagram.png" alt=""></a></div>
        </div>
        <div class="footer-datenszhutz"><a href="<?php echo site_url('/impressum'); ?>">Impressum / Datenschutz</a></div>
    </div>
    <div class="footer-info">© Studio Besa / Made With <svg xmlns="http://www.w3.org/2000/svg" width="23.328" height="21.38" viewBox="0 0 23.328 21.38">
            <path id="Path_95" data-name="Path 95" d="M602.346,745.292q-.414.4-.821.8l-.081-.061c-4.385-3.324-10.4-6.373-11.39-12.535-.341-2.125.1-4.688,1.894-5.709,1.76-1,3.961-.052,5.526,1.261a14.3,14.3,0,0,1,3.335,4.083,20.434,20.434,0,0,1,2.466-3.809,6.4,6.4,0,0,1,3.734-2.238,3.462,3.462,0,0,1,2.79.731,3.955,3.955,0,0,1,1.042,1.627,7.676,7.676,0,0,1-.01,4.812,15.665,15.665,0,0,1-2.223,4.284A47.147,47.147,0,0,1,602.346,745.292Z" transform="translate(-588.91 -726.039)" fill="none" stroke="#c39435" stroke-width="2" />
        </svg>
        By K-Medialabs</div>
</footer>
<?php
wp_footer();
?>

</html>