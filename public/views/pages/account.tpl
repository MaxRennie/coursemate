{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}
    <div class="container">
        <div class="account">
            <div class="row">
                <div class="col-md-6 col-12 settings">
                    <div class="image">
                        {if $user_data && $user_data.user_image != null}
                            <img src="user-images/{$user.user_image}" alt="Profile Picture" class="profile-pic" width="400px"
                                height="400px">
                        {else}
                            <img src="src/images/profile.svg" alt="Profile Picture" class="profile-pic" width="400px"
                                height="400px">
                        {/if}
                    </div>

                    <h3 class="mb-4 pb-2">Hey {$user.fname}</h3>
                    <h4>Thanks for using CourseMate</h4>
                    <p>Here you can change your password or profile picture</p>

                    <div class="buttons">
                        <button class="btn btn-primary" id="changePassword">Change Password</button>
                        <button class="btn btn-primary" id="changeProfilePic">Change Profile Picture</button>
                    </div>
                    <div id="passwordChange" style="display:none;">
                        <form value="password" method="post">
                            <input type="password" id="currentPassword" name="currentPassword"
                                placeholder="Current Password">
                            <input type="password" id="newPassword" name="newPassword" placeholder="New Password">
                            <input type="password" id="new_password_confirm" name="new_password_confirm"
                                placeholder="Confirm New Password">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>

                    <div id="profilePicChange" style="display:none;">
                        <form id="image" method="post" enctype="multipart/form-data">

                            <div class="form-group file-upload">
                                <input type="file" class="form-control-file" id="user_image" name="user_image"
                                    placeholder="Upload a Profile Image">
                            </div>

                            <button class="btn btn__light form-group-submit" name="submit" type="submit">Next</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-6 col-12 statistics">
                    <h3 class="mb-4 pb-2">Your Statistics</h3>
                    <div class="stat">
                        <h4>Events this week</h4>
                        <p>{$event_count}</p>
                    </div>
                    <div class="stat">
                        <h4>Tasks this week</h4>
                        <p>{$task_count}</p>
                    </div>
                    <div class="stat">
                        <h4>Time spent this week</h4>
                        <p>{$task_time}</p>
                    </div>
                    <div class="stat">
                        <h4>Total completed Tasks</h4>
                        <p>{$completed_tasks_count}</p>
                    </div>
                    <div class="stat">
                        <h4>Total time spent</h4>
                        <p>{$total_task_time}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


{/block}