 <!-- Masthead -->
 <header class="masthead">
 	<div class="container">
 		<div class="masthead-subheading">Selamat Datang!</div>
 		<div class="masthead-heading text-uppercase">DPMD Kabupaten Garut</div>
 		<?php if ($this->session->userdata('is_login') == true) : ?>
 			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('suratonline') ?>">Ajukan Surat</a>
 		<?php else : ?>
 			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('login') ?>">Login</a>
 		<?php endif ?>
 	</div>
 </header>