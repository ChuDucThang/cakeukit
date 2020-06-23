<div id="offcanvas-slide" uk-offcanvas="overlay: true">
			<aside id="left-col" class="uk-light uk-visible@m" >
			<button class="uk-offcanvas-close" type="button" uk-close style="margin-top: -6px;"></button>
            <a href="<?= $this->Url->build('admin') ?>">
                <div class="left-logo uk-flex uk-flex-middle">
                    <?= $this->Html->image('dashboard-logo.svg', ['class' => 'custom-logo']); ?>
                </div>
            </a>
			<div class="left-content-box  content-box-dark">
                <?= $this->Html->image('avatar.svg', ['class' => 'uk-border-circle profile-img', 'alt'=> 'User Image']); ?>
				<h4 class="uk-text-center uk-margin-remove-vertical text-light">John Doe</h4>
				
				<div class="uk-position-relative uk-text-center uk-display-block">
				    <a href="#" class="uk-text-small uk-text-muted uk-display-block uk-text-center" data-uk-icon="icon: triangle-down; ratio: 0.7">Admin</a>
				    <!-- user dropdown -->
				    <div class="uk-dropdown user-drop" data-uk-dropdown="mode: click; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 150">
				    	<ul class="uk-nav uk-dropdown-nav uk-text-left">
								<li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
								<li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
								<li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
								<li class="uk-nav-divider"></li>
								<li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
								<li class="uk-nav-divider"></li>
								<li><a href="<?=$this->Url->build('/admin/logout');?>"><span data-uk-icon="icon: sign-out"></span> Sign Out</a></li>
					    </ul>
				    </div>
				    <!-- /user dropdown -->
				</div>
			</div>
			
			<div class="left-nav-wrap">
				<ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
					<li class="uk-nav-header">ACTIONS</li>
					<li><a href="#"><span data-uk-icon="icon: comments" class="uk-margin-small-right"></span>Category</a></li>
					<li><a href="<?=$this->Url->build('admin/user');?>"><span data-uk-icon="icon: users" class="uk-margin-small-right"></span>User</a></li>
					<li class="uk-parent"><a href="#"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Templates</a>
						<ul class="uk-nav-sub">
							<li><a title="Article" href=""><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span> Article</a></li>
							<li><a title="Album" href=""><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span> Album</a></li>
						</ul>
					</li>
					<li><a href="#"><span data-uk-icon="icon: album" class="uk-margin-small-right"></span>Albums</a></li>
					<li><a href="#"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>Featured Content</a></li>
					<li><a href="#"><span data-uk-icon="icon: lifesaver" class="uk-margin-small-right"></span>Tips</a></li>
					<li class="uk-parent">
						<a href="#"><span data-uk-icon="icon: comments" class="uk-margin-small-right"></span>Reports</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a></li>
						</ul>
					</li>
				</ul>			
			</div>
			<div class="bar-bottom">
				<ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-5" data-uk-grid>
					<li>
						<a href="#" class="uk-icon-link" data-uk-icon="icon: home" title="Home" data-uk-tooltip></a>
					</li>
					<li>
						<a href="#" class="uk-icon-link" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a>
					</li>
					<li>
						<a href="#" class="uk-icon-link" data-uk-icon="icon: social"  title="Social" data-uk-tooltip></a>
					</li>
					
					<li>
						<a href="#" class="uk-icon-link" data-uk-tooltip="Sign out" data-uk-icon="icon: sign-out"></a>
					</li>
				</ul>
			</div>
		</aside>
	</div>