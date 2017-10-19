<?php
/**
 * Created by PhpStorm.
 * User: xenlord
 * Date: 6/10/17
 * Time: 8:35
 */
?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="entrar" aria-labelledby="#entrar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalEntrar">Entrar</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="modalUser" class="control-label">Usuario: </label>
                        <input type="text" class="form-control" id="modalUser">
                    </div>
                    <div class="form-group">
                        <label for="modalPasswd" class="control-label">Contraseña: </label>
                        <input class="form-control" type="password" id="modalPasswd"></input>
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
