<section class="bg-alt" id="signin">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center">
                        <h2 class="text-primary">Connect with Kapeshare</h2>
                        <p class="lead pt-3">

                        </p>
                    </div>
                    <div class="cotn_principal">
                        <div class="cont_centrar">

                            <div class="cont_login">
                                <div class="cont_info_log_sign_up">
                                    <div class="col_md_login">
                                        <div class="cont_ba_opcitiy">

                                            <h2>LOGIN</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                                        </div>
                                    </div>
                                    <div class="col_md_sign_up">
                                        <div class="cont_ba_opcitiy">
                                            <h2>SIGN UP</h2>


                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                            <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="cont_back_info">
                                    <div class="cont_img_back_grey">
                                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                                    </div>

                                </div>
                                <div class="cont_forms">
                                    <div class="cont_img_back_">
                                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                                    </div>
                                    <div class="cont_form_login">
                                        <a href="#signin" onclick="ocultar_login_sign_up()"><i class="ion-chevron-down"></i></a>
                                        <h2>LOGIN</h2>
                                        <input type="text" placeholder="Email" />
                                        <input type="password" placeholder="Password" />
                                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                                    </div>

                                    <div class="cont_form_sign_up">
                                        <a href="#signin" onclick="ocultar_login_sign_up()"><i class="ion-chevron-left"></i></a>
                                        <h2>SIGN UP</h2>
                                        <?php echo validation_errors(); ?>
                                        <?php echo form_open('login/sign_up'); ?>

                                        <input type="email" placeholder="Email" name="email"/>
                                        <input type="text" placeholder="Username" name="username" />
                                        <input type="password" placeholder="Password" name="password" />
                                        <input type="password" placeholder="Confirm Password"  name="email"/>
                                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                                        
                                    </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 offset-md-3">


                </div>
            </div>
        </section>