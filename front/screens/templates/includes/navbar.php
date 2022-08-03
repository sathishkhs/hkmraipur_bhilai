<div class="header-nav">
	<div class="header-nav-wrapper navbar-scrolltofixed bg-white">
		<div class="container">
			<nav id="menuzord-right" class="menuzord default">
				<a class="menuzord-brand pull-left flip xs-pull-center mt-10 pt-5 mt-sm-10 pt-sm-0 mb-10" href="">
					<img src="<?php echo SETTINGS_UPLOAD_PATH.$settings->LOGO_IMAGE ?>" alt="">
				</a>
				<ul class="menuzord-menu">
					<!-- This part is without submenu  -->
					<?php if (!empty($header_menu)) { ?>
						<?php foreach ($header_menu as $header) { ?>
							<?php if ($header->submenu == null || empty($header->submenu)) { ?>
								<li><a class="<?php echo $header->menuitem_link =='donate' ? 'btn btn-default btn-theme-colored btn-xs ' :'' ;  ?>" target="<?php echo $header->menuitem_target; ?>" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link ; ?>"><?php echo $header->menuitem_text; ?></a> </li>
							<?php } ?>

							<!-- This part is for first layer submenu -->
							<?php  if (!empty($header->submenu)) : ?>
								<li><a class="<?php echo $header->menuitem_link =='donate' ? 'btn btn-default btn-theme-colored btn-xs ' :'' ;  ?>" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>"><?php echo $header->menuitem_text; ?></a>
									<ul class="dropdown">
										<?php foreach ($header->submenu as $submenu) : ?>
											<li><a target="<?php echo $submenu->menuitem_target; ?>"   href="<?php echo $submenu->menuitem_link; ?>"><?php echo $submenu->menuitem_text; ?></a>
												<!-- This is second layer submenu	 -->
												<?php if (!empty($submenu->submenu)) : ?>
													<ul class="dropdown">
														<?php foreach ($submenu->submenu as $submenu_2) : ?>
															<li><a target="<?php echo $submenu_2->menuitem_target; ?>" href="<?php echo $submenu_2->menuitem_link ?>"><?php echo $submenu_2->menuitem_text; ?></a></li>
														<?php endforeach; ?>
													</ul>
												<?php endif; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</li>
							<?php endif; ?>
						<?php } ?>
					<?php } ?>
                    <li>
				    <!-- <a target="" class="btn btn-default btn-theme-colored btn-xs font-16" href="donate">Donate</a> -->
					</li>
				</ul>

			</nav>
		</div>
	</div>
</div>