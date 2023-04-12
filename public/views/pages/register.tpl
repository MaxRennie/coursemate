{extends file="layouts/main.tpl"}
{block name="body"}
    {include file="components/error.tpl"}

    <div class="container mb-5 navbar-spacing">

        <div class="standalone-form">
            <div class="app-form col-md-10" id="app-form">
                <div id="step-1" class="step active">
                    <div class="image">
                        <img src="src/images/team.svg" alt="Girl studying" width="480" height="480">
                    </div>
                    <form id="registration" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <h2>Sign Up</h2><br>
                            <input type="text" id="fname" name="fname" placeholder="First Name" autocomplete="on">
                            <input type="text" id="lname" name="lname" placeholder="Last Name" autocomplete="on">
                            <div class="form-group file-upload">
                                <label for="user_image">Upload a Profile Image</label>
                                <input type="file" class="form-control-file" id="user_image" name="user_image" placeholder="Upload a Profile Image">
                            </div>
                            <input type="text" id="email" name="email" placeholder="Email" autocomplete="on"
                                value="{$smarty.session.user}">
                            <input type="password" id="password" name="password" placeholder="Password" autocomplete="on"
                                value="{$smarty.session.password}">
                            <input type="password" id="password_confirm" name="password_confirm"
                                placeholder="Confirm Password" autocomplete="on">

                            <div id="schoolSelect" class="dropdown">
                                <input type="text" placeholder="Search Schools here..." id="schoolInput"
                                    onkeyup="filterFunction('school')" autoComplete="on" list="schools">
                                <div class="selectWrapper">
                                    <select id="schools" name="schools" class="form-control" onfocus='this.size=5;'
                                        onblur='this.size=1;' onchange='this.size=1; this.blur(); '
                                        onselect="select(this, school)">
                                        <option value="null">...then select from this list</option>
                                        {foreach from=$schools item=school}
                                            <option value="{$school.institution_id}">
                                                {$school.institution_name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <p id="schoolTooltip">Can't find your school? <strong onclick="addSchool()">Add it
                                    here</strong>
                            </p>
                            <input style="display:none" type="text" id="add-school" name="add-school"
                                placeholder="Add your School">

                            <div id="courseSelect" class="dropdown">
                                <input type="text" placeholder="Search Courses here..." id="courseInput"
                                    onkeyup="filterFunction('course')" autoComplete="on" list="courses">
                                <div class="selectWrapper">
                                    <select id="courses" name="courses" class="form-control" onfocus='this.size=5;'
                                        onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                        <option value="null">...then select from this list</option>
                                        {foreach from=$courses item=course}
                                        <option value='{$course.course_id}' onselect="select(this, school)">
                                            {$course.course_name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <p id="courseTooltip">Can't find your course? <strong onclick="addCourse()">Add it
                                        here</strong>
                                </p>
                                <input style="display:none" type="text" id="add-course" name="add-course"
                                    placeholder="Add Course">
                                <button class="btn btn__light form-group-submit" type="submit">Next</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
{{/block}}