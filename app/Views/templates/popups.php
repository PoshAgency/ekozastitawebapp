<div id="overlay" class="overlay">
    <div class="popup p-0 delete-popup">
        <span class="close_page close py-3">×</span>
        <div class="popup-header">
            <p class="f-18 text-center popup-header-title">Brisanje</p>
        </div>
        <div class="popup-body pt-5">
            <div class="block pt-4 mt-8 text-center">
                <div class="mb-5 pb-5">Da li ste sigurni da zelite da obrisete ovu stavku?</div>
                <a href="javascript:;" class="inline-flex me-4 px-6 py-3 bg-red-500 border border-transparent text-white text-sm rounded hover:bg-teal-900 hover:text-white delete_item" data-delete-id="0" data-delete-model="no" title="Delete">Briši</a>
                <a href="javascript:;" class="inline-flex px-6 py-3 bg-white-500 border border-gray-500 text-black text-sm rounded hover:bg-gray-100 hover:border-gray-500 close" title="Cancel">Otkaži</a>
            </div>
        </div>
    </div>
    <div class="popup p-0 hide-popup">
        <span class="close_page close py-3">×</span>
        <div class="popup-header">
            <p class="f-18 text-center">Are you sure you want to delete this notification?</p>
        </div>
        <div class="popup-body pt-5">
            <div class="py2 text-center">
                <a href="javascript:;" class="btn red-bg white mr-4 close hide_item" data-hide-id="0" data-hide-table="no" title="Delete">Delete</a>
                <a href="javascript:;" class="btn btn-border white-bg black close" title="Cancel">Cancel</a>
            </div>
        </div>
    </div>
    <div class="popup p-0 approve-popup">
        <span class="close_page close py-3">×</span>
        <div class="popup-header">
            <p class="f-18 text-center">Are you sure you want to approve this classes?</p>
        </div>
        <div class="popup-body pt-5">
            <div class="py2 text-center">
                <a href="javascript:;" class="btn red-bg white mr-4 close approve_item" data-approve-id="0" data-approve-table="no" title="Approve">Approve</a>
                <a href="javascript:;" class="btn btn-border white-bg black close" title="Cancel">Cancel</a>
            </div>
        </div>
    </div>
    <div class="popup p-0 reset-pass-popup">
        <span class="close_page close py-3">×</span>
        <div class="popup-header">
            <p class="f-18 text-center">Password reset</p>
        </div>
        <form action="admin/subscribers/reset_pass" method="post" class="popup-body pt-5" id="reset-pass-form">
            <div class="input-container mb-5">
                <span class="reveal_password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.227" viewBox="0 0 15 10.227">
                        <path id="eye" d="M8.5,4.5A8.064,8.064,0,0,0,1,9.614a8.057,8.057,0,0,0,15,0A8.064,8.064,0,0,0,8.5,4.5Zm0,8.523a3.409,3.409,0,1,1,3.409-3.409A3.41,3.41,0,0,1,8.5,13.023Zm0-5.455a2.045,2.045,0,1,0,2.045,2.045A2.043,2.043,0,0,0,8.5,7.568Z" transform="translate(-1 -4.5)" fill="#e5e5e5"/>
                    </svg>
                </span>
                <input type="password" class="line-input" placeholder="New Password" id="password" name="password" />
                <span class="input-label">New Password</span>
                <span id="password_error" class="input-error"></span>
            </div>
            <div class="input-container mb-5">
                <span class="reveal_password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.227" viewBox="0 0 15 10.227">
                        <path id="eye" d="M8.5,4.5A8.064,8.064,0,0,0,1,9.614a8.057,8.057,0,0,0,15,0A8.064,8.064,0,0,0,8.5,4.5Zm0,8.523a3.409,3.409,0,1,1,3.409-3.409A3.41,3.41,0,0,1,8.5,13.023Zm0-5.455a2.045,2.045,0,1,0,2.045,2.045A2.043,2.043,0,0,0,8.5,7.568Z" transform="translate(-1 -4.5)" fill="#e5e5e5"/>
                    </svg>
                </span>
                <input type="password" class="line-input repeat_password" placeholder="Repeat New Password" id="repeat_password" />
                <span class="input-label">Repeat New Password</span>
                <span id="repeat_password_error" class="input-error"></span>
            </div>
            <div class="py2 text-center">
                <input type="hidden" name="id" id="id" value="<?php echo isset($current['id']) ? $current['id'] : 0 ?>">
                <button type="submit" class="btn red-bg white mr-4" title="Reset">Reset</button>
                <a href="javascript:;" class="btn btn-border white-bg black close" title="Cancel">Cancel</a>
            </div>
        </form>
    </div>
    <div class="popup p-0 users-popup">
        <span class="close_page close py-3">×</span>
        <div class="popup-header">
            <p class="f-18 text-center popup-header-title">Korisnik</p>
        </div>
        <form action="clients/add_user" method="post" class="popup-body pt-5 regular-form" id="add-user" autocomplete="off">
            <div class="mb-2 mt-5">
                <label for="user_firstname" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ime</label>
                <input type="text" id="user_firstname" name="firstname" value="" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" required>
            </div>
            <div class="mb-2">
                <label for="user_lastname" class="font-medium text-sm text-slate-600 dark:text-slate-400">Prezime</label>
                <input type="text" id="user_lastname" name="lastname" value="" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" required>
            </div>
            <div class="mb-2">
                <label for="user_username" class="font-medium text-sm text-slate-600 dark:text-slate-400">Username</label>
                <input type="text" id="user_username" name="username" value="" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" required>
            </div>
            <div class="mb-2">
                <label for="user_email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                <input type="text" id="user_email" name="email" value="" autocomplete="new-password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" required>
            </div>
            <div class="mb-2" style="position:relative">
                <label for="user_password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Lozinka</label>
                <span class="reveal_password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.227" viewBox="0 0 15 10.227">
                        <path id="eye" d="M8.5,4.5A8.064,8.064,0,0,0,1,9.614a8.057,8.057,0,0,0,15,0A8.064,8.064,0,0,0,8.5,4.5Zm0,8.523a3.409,3.409,0,1,1,3.409-3.409A3.41,3.41,0,0,1,8.5,13.023Zm0-5.455a2.045,2.045,0,1,0,2.045,2.045A2.043,2.043,0,0,0,8.5,7.568Z" transform="translate(-1 -4.5)" fill="#e5e5e5"/>
                    </svg>
                </span>
                <input type="password" id="user_password" name="password" value="" autocomplete="new-password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" required>
            </div>
            <div class="py-3"></div>
            <div class="py-2 text-center">
                <input type="hidden" name="group_id" id="user_group_id" value="5">
                <input type="hidden" name="ref_id" id="user_ref_id" value="">
                <input type="hidden" name="id" id="user_id" value="">
                <button type="submit" class="inline-flex me-4 px-6 py-3 bg-brand-500 border border-transparent text-white text-sm rounded hover:bg-teal-900 hover:text-white" title="Snimi">Snimi</button>
                <a href="javascript:;" class="inline-flex px-6 py-3 bg-white-500 border border-gray-500 text-black text-sm rounded hover:bg-gray-100 hover:border-gray-500 close" title="Cancel">Otkaži</a>
            </div>
        </form>
    </div>
</div>

<div class="msg-popup">
    <span class="close_popup" style="display: none;"><img src="assets/images/msg-close.svg" alt="" class="img-fluid" /></span>
    <p class="m-0">Message</p>
</div>