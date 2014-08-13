<form id="login-form" class="basic-form" role="form">
    <div class="form-group">
        <label class="sr-only" for="username">Username</label>
        <input id="username" name="username" class="form-control popover-dismiss" type="text" placeholder="Username"
               data-toggle="popover" data-html="true" data-container="body" data-placement="top" data-trigger="focus"
               data-content="<strong>Need Help?</strong><br />If you do not currently have a proﬁle created, you will need to do so. Only registered users will be able to access the information to your account."
            />
        <p class="help-block text-right"><a href="">Forgot Your Username?</a></p>
    </div>
    <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
        <p class="help-block text-right"><a href="">Forgot Your Password?</a></p>
    </div>
    <ul class="text-right action-list list-unstyled colored">
        <li><a href="/portal/home.php">Login</a></li>
        <li><a href="/registration/">Register</a></li>
        <li><button>Want to Enroll Click Here</button></li>
    </ul>
</form>