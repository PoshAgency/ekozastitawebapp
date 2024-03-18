<nav id="topbar" class="topbar border-b dark:border-slate-700/40 fixed inset-x-0 duration-300 block print:hidden z-50">
	<div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
		<div class="ltr:mx-2 rtl:mx-2">
			<button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
				<!-- <i class="ti ti-chevrons-left text-3xl top-icon"></i> -->
				<i data-lucide="menu" class="top-icon w-5 h-5"></i>
			</button>
		</div>
		<!-- <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
			<div class="relative ltr:mx-2 rtl:mx-2 self-center">
				<button class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
					<i class="ti ti-plus me-1"></i>
					Novi unos
				</button>
			</div>
		</div> -->

		<div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
			<div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
				<button type="button" class="dropdown-toggle flex rounded-full md:me-0" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
					<span data-lucide="search" class="top-icon w-5 h-5"></span>
				</button>
				<div class="left-auto right-0 z-50 my-1 hidden min-w-[300px] list-none divide-y divide-gray-100 rounded-md border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800" onclick="event.stopPropagation()">
					<div class="relative">
						<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
							<i class="ti ti-search text-gray-400 z-10"></i>
						</div>
						<input type="text" id="email-adress-icon" class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-1.5 pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300 focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm" placeholder="Pretraži..." />
					</div>
				</div>
			</div>
			<div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">
				<button id="toggle-theme" class="flex rounded-full md:me-0 relative">
					<span data-lucide="moon" class="top-icon w-5 h-5 light"></span>
					<span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
				</button>
			</div>
			<div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
				<button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
					<span data-lucide="bell" class="top-icon w-5 h-5"></span>
				</button>

				<div class="left-auto right-0 z-50 my-1 hidden w-64 list-none divide-y h-52 divide-gray-100 rounded border border-slate-700/10 text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800" id="navNotifications" data-simplebar>
					<ul class="py-1" aria-labelledby="navNotifications">
						<li class="py-2 px-4">
							<a href="report-full.php" class="dropdown-item">
								<div class="flex">
									<div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
										<span data-lucide="book" class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
									</div>
									<div class="flex-grow flex-1 ms-0.5 overflow-hidden">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
											Prioritetan radni nalog za odobrenje
										</p>
										<p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
											22.01.2024. 22:00h
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="py-2 px-4">
							<a href="report-full.php" class="dropdown-item">
								<div class="flex">
									<div class="h-8 w-8 rounded-full inline-flex me-3">
										<span data-lucide="book" class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
									</div>
									<div class="flex-grow flex-1 ms-0.5 overflow-hidden">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
											Nov radni nalog za odobrenje
										</p>
										<p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
											22.01.2024. 20:45h
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="py-2 px-4">
							<a href="report-full.php" class="dropdown-item">
								<div class="flex">
									<div class="h-8 w-8 rounded-full inline-flex me-3">
										<span data-lucide="book" class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
									</div>
									<div class="flex-grow flex-1 ms-0.5 overflow-hidden">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
											Nov radni nalog za odobrenje
										</p>
										<p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
											22.01.2024. 20:46h
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="py-2 px-4">
							<a href="report-full.php" class="dropdown-item">
								<div class="flex">
									<div class="h-8 w-8 rounded-full inline-flex me-3">
										<span data-lucide="book" class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
									</div>
									<div class="flex-grow flex-1 ms-0.5 overflow-hidden">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
											Nov radni nalog za odobrenje
										</p>
										<p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
											22.01.2024. 20:47h
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="py-2 px-4">
							<a href="report-full.php" class="dropdown-item">
								<div class="flex">
									<div class="h-8 w-8 rounded-full inline-flex me-3">
										<span data-lucide="book" class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
									</div>
									<div class="flex-grow flex-1 ms-0.5 overflow-hidden">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
											Nov radni nalog za odobrenje
										</p>
										<p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
											20:48h
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="py-2 px-4">
							<a href="report-full.php" class="dropdown-item">
								<div class="flex">
									<div class="h-8 w-8 rounded-full inline-flex me-3">
										<span data-lucide="book" class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
									</div>
									<div class="flex-grow flex-1 ms-0.5 overflow-hidden">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
											Nov radni nalog za odobrenje
										</p>
										<p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
											21:00h
										</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="me-2 dropdown relative">
				<button type="button" class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0" id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
					<img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-1.png" alt="user photo" />
					<span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
						<span class="block font-medium text-slate-600 dark:text-gray-300">
							<?php echo session('user')['firstname']; ?> <?php echo session('user')['lastname']; ?>
						</span>
						<span class="-mt-0.5 block text-xs text-slate-500 dark:text-gray-400">
                        <?php echo session('user')['role']; ?>
						</span>
					</span>
				</button>

				<div class="left-auto right-0 z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border border-slate-700/10 text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40" id="navUserdata">
					<ul class="py-1" aria-labelledby="navUserdata">
						<li>
							<a href="users/<?php echo session('user_id'); ?>" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
								<span data-lucide="user" class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
								Profil
							</a>
						</li>
						<li>
							<a href="settings" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
								<span data-lucide="settings" class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
								Podešavanja
							</a>
						</li>
						<li>
							<a href="#" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
								<span data-lucide="message-square" class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
								Poruke
							</a>
						</li>
						<li>
							<a href="login/logout" class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600 dark:text-red-500 dark:hover:bg-gray-900/20 dark:hover:text-red-500">
								<span data-lucide="power" class="w-4 h-4 inline-block text-red-500 dark:text-red-500 me-2"></span>
								Izloguj se
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>