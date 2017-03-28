<div class="newedge-login">
    <a href="#" role="button" data-toggle="modal" data-target="#login">
        <i class="fa fa-user"></i>
    </a>
    <!-- Login modal -->
    <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                    <h1 class="text-left">Log in</h1>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="login-form">
                        <fieldset class="userdata">
                            <input id="username" placeholder="Username" type="text" name="username" class="form-control">
                            <input id="password" type="password" placeholder="Password" name="password" class="form-control">
                            <div class="remember-wrap">
                                <input id="remember" type="checkbox" name="remember" class="inputbox" value="yes">
                                <label for="remember">Remember Me</label>
                            </div>
                            <div class="button-wrap pull-left">
                                <input type="submit" name="Submit" class="btn btn-block btn-success" value="Log in">
                            </div>
                            <p class="forget-name-link pull-left">
                                Forgot <a href="#">
                                    Username</a> or <a href="#">
                                    Password</a>
                            </p>
                        </fieldset>
                    </form>
                </div> <!--/Modal body-->
                <div class="modal-footer">
                    New Here? <a href="#">
                        Create an account</a>
                </div> <!--/Modal footer-->
            </div> <!-- Modal content-->
        </div> <!-- /.modal-dialog -->
    </div> <!-- //Login modal -->
</div> <!-- //login -->