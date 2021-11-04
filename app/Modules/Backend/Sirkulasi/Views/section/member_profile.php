<?php
$request = \Config\Services::request();
$request->uri->setSilent();
$slug = $request->getVar('slug') ?? 'peminjaman';
$member_no = $request->getVar('member_no') ?? user()->username;
$member = get_member($member_no);
?>

<div class="card-shadow-dark profile-responsive card-border mb-3 card">
	<div class="dropdown-menu-header">
		<div class="dropdown-menu-header-inner bg-corporate-primary2">
			<div class="menu-header-image" style="background-image: url('<?= base_url('themes/uigniter') ?>/images/dropdown-header/abstract8.jpg')"></div>
			<div class="menu-header-content btn-pane-right">
				<div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
					<div class="avatar-icon">
						<?php 
							$default = base_url('themes/uigniter/images/avatars/2.jpg'); 
							$image = $default;

							// $image = base_url('uploads/user/'.$user->avatar);
							// if(empty($user->avatar)){
							//     $image = $default;
							// }
						?>

						<img src="<?=$image?>" onerror="this.onerror=null;this.src='<?=$default?>';" alt="User Profile">
					</div>
				</div>
				<div>
					<h5 class="menu-header-title"><?=$member->name??''?></h5>
					<h6 class="menu-header-subtitle"><?=$member->MemberNo??''?></p>
				</div>
				<div class="menu-header-btn-pane">

				</div>
			</div>
		</div>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">
			<div class="widget-content p-0">
				<div class="widget-content-wrapper">
					<div class="widget-content-left mr-3">
						<i class="fa fa-phone"></i>
					</div>
					<div class="widget-content-left">
						<div class="widget-heading">No Telepon</div>
					</div>
					<div class="widget-content-right">
						<?=$member->Phone??''?>
					</div>
				</div>
			</div>
		</li>
		<li class="list-group-item">
			<div class="widget-content p-0">
				<div class="widget-content-wrapper">
					<div class="widget-content-left mr-3">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="widget-content-left">
						<div class="widget-heading">Email</div>
					</div>
					<div class="widget-content-right">
						
					</div>
				</div>
			</div>
		</li>
	</ul>

	<div class="card-border m-3 card">
		<div class="card-body">
			<div class="widget-content p-0">
				<div class="widget-content-wrapper">
					<div class="widget-content-left mr-3">
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="widget-content-left">
						<div class="widget-heading">Alamat</div>
					</div>
					<div class="widget-content-right">
					</div>
				</div>
				<p class="mt-3">
					
				</p>
				<p class="mt-3">
					<a href="https://maps.google.com/?q=" target="_blank" title="Lihat Google Maps" class="btn btn-sm btn-warning" style="min-width:35px"><i class="fa fa-map"> </i> Google Maps</a> 
				</p>
			</div>
		</div>
	</div>
</div>