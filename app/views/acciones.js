function abrirModalActualizar(acto) {
    document.querySelector('#formActualizarActo #update_id').value = acto.id || '';
    document.querySelector('#formActualizarActo #update_fecha').value = acto.date.split('-').reverse().join('-') || '';
    document.querySelector('#formActualizarActo #update_hora').value = acto.time || '';
    document.querySelector('#formActualizarActo #update_titulo').value = acto.title || '';
    document.querySelector('#formActualizarActo #update_descripcion_corta').value = acto.description1 || '';
    document.querySelector('#formActualizarActo #update_descripcion_larga').value = acto.description2 || '';
    document.querySelector('#formActualizarActo #update_num_asistentes').value = acto.audience || '';
    document.querySelector('#formActualizarActo #update_id_tipo_acto').value = acto.id_type || '';
    var modal = new bootstrap.Modal(document.getElementById('modalActualizar'));
    modal.show();
}

//Modal Acto Eliminar:
function confirmarEliminacion(url) {
    document.getElementById('btnEliminar').onclick = function() {
        window.location.href = url;
    };
    var modal = new bootstrap.Modal(document.getElementById('confirmarEliminacionModal'));
    modal.show();
}


// Modal eliminar tipo acto 
function confirmarEliminacionTipoActo(url) {
    document.getElementById('btnConfirmarEliminarTipoActo').href = url;
    var modal = new bootstrap.Modal(document.getElementById('confirmarBorradoTipoActoModal'));
    modal.show();
}

// Modal Modificar tipo acto 
function abrirModalActualizarTipoActo(tipoActo) {
    document.getElementById('floatingInputActualizar').value = tipoActo.id_tipo_acto;
    document.getElementById('Descripcion').value = tipoActo.descripcion;

    var modal = new bootstrap.Modal(document.getElementById('modalActualizarTipoActo'));
    modal.show();
}

// Modal Modificar Perfil 
function abrirModalPerfil(usuario) {
    document.querySelector('#modificarPerfil #update_id').value = usuario.id || '';
    document.querySelector('#modificarPerfil #update_usuario').value = usuario.username || '';
    document.querySelector('#modificarPerfil #update_contrasena').value = usuario.password || '';
    document.querySelector('#modificarPerfil #update_email').value = usuario.email || '';
    var modal = new bootstrap.Modal(document.getElementById('modificarPerfil'));
    modal.show();
}