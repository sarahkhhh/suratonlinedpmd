<!-- Footer-->
<?php if (!$notUseFooter && $notUseFooter == null) : ?>
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left" style="color:white; text-align: left;">Copyright © DPMD Garut<?= date('Y') ?>
                </div>
                <!-- <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Contact</a>
                <a href="#!">Other</a>
            </div> -->
            </div>
        </div>
    </footer>
<?php endif ?>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="<?= base_url() ?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?= base_url() ?>assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
</body>

</html>