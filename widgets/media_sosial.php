<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="box-def">
	<div class="head-widget l-flex">
		<div class="head-widget-title l-flex">
		<i class="fa fa-share-alt"></i><h1><?= $judul_widget ?></h1>
		</div>
	</div>
	<div class="widgetbox widget-social c-flex">
		<?php foreach ($sosmed As $data): ?>
			<?php if (!empty($data["link"])): ?>
				<a href="<?= $data['link']?>" rel="noopener noreferrer" target="_blank">
					<img src="<?= base_url().'assets/front/'.$data['gambar'] ?>" alt="<?= $data['nama'] ?>"/>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>