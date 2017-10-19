<?php
/**
 * Created by PhpStorm.
 * User: xenlord
 * Date: 6/10/17
 * Time: 8:58
 */
?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="registrar" aria-labelledby="registrar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalEntrar">Registrar</h4>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form role="form" id="register-form" autocomplete="off">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                <input name="name" type="text" class="form-control" placeholder="Introduce nombre de usuario">
                            </div>
                            <span class="help-block" id="error"></span>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="email" type="text" class="form-control" placeholder="Introduce tu email">
                            </div>
                            <span class="help-block" id="error"></span>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input name="password" id="password" type="password" class="form-control" placeholder="Introduce contraseña">
                                </div>
                                <span class="help-block" id="error"></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input name="cpassword" type="password" class="form-control" placeholder="Vuelve a introducir la contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>
