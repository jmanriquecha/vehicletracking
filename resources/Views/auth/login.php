<br>
<br>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="<?= RUTA ?>/auth/validate" method="post">
                        <br><br><br>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-bold mb-0 me-3">INICIAR SESIÓN</p>
                    </div>
                        <br>
                        <br>

                    <!-- Email input -->
                    <div class="form-outline mb-4 form-floating">
                        <input type="email" id="email" name="email" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" />
                        <label class="form-label" for="email">Ingrese dirección de correo electronico</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3 form-floating">
                        <input type="password" id="pass" name="pass" class="form-control form-control-lg"
                        placeholder="Enter password" />
                        <label class="form-label" for="pass">Ingrese contraseña</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>