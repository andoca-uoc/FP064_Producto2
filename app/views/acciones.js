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

//Modal Ponente Actualizar:
function abrirModalActualizarPonente(ponente) {
	document.querySelector('#formActualizarPonente #update_Id_usuario').value = ponente.iduser || '';
	document.querySelector('#formActualizarPonente #update_Username').value = ponente.username || '';
	document.querySelector('#formActualizarPonente #update_Password').value = ponente.pass || '';
	document.querySelector('#formActualizarPonente #update_Nombre').value = ponente.name || '';
	document.querySelector('#formActualizarPonente #update_Apellido1').value = ponente.surname1 || '';
	document.querySelector('#formActualizarPonente #update_Apellido2').value = ponente.surname2 || '';
	document.querySelector('#formActualizarPonente #update_Id_persona').value = ponente.idperson || '';
	document.querySelector('#formActualizarPonente #update_id_tipo_usuario').value = ponente.idtype || '';
	var modal = new bootstrap.Modal(document.getElementById('modalActualizarPonente'));
	modal.show();
}

//Modal Ponente Eliminar:
function confirmarEliminacionPonente(url) {
    console.log('LAURA TONTA CULO', url)
	document.getElementById('btnEliminarPonente').href = url;
    console.log('LAURA TONTA CULO', document.getElementById('btnEliminarPonente').href)
	var modal = new bootstrap.Modal(document.getElementById('confirmarEliminacionPonenteModal'));
	modal.show();
} 

// Modal Modificar Perfil 
function abrirModalPerfil(usuario) {
    console.log('usuario', usuario)
    document.getElementById('update_Id_tipo_usuario').value = usuario.Id_tipo_usuario;
    document.getElementById('update_Id_Persona').value = usuario.Id_Persona;

    document.getElementById('update_Id_usuario').value = usuario.Id_usuario;
    document.getElementById('update_Usuario').value = usuario.Username;
    document.getElementById('update_Password').value = usuario.Password;

    var modal = new bootstrap.Modal(document.getElementById('modificarPerfil'));
    modal.show();
}