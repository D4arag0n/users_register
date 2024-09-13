
const selectNivelEducativo = document.querySelector('#nivelEducativo')
const selectAreaConocimiento = document.querySelector('#areaConocimiento')
const selectPerfilProfesional = document.querySelector('#perfilProfesional')
const inputInstitucion = document.querySelector('#institucion')
const inputPorcentajeCreditosObtenidos = document.querySelector('#porcentajeCreditosObtenidos')

selectNivelEducativo.addEventListener('change', habilitaCampos)

function habilitaCampos(e){
    
    if(e.target.value == 2){
        selectAreaConocimiento.disabled = false
        selectPerfilProfesional.disabled = false
        inputInstitucion.disabled = false
        inputPorcentajeCreditosObtenidos.disabled = false
    }else{
        selectAreaConocimiento.disabled = true
        selectPerfilProfesional.disabled = true
        inputInstitucion.disabled = true
        inputPorcentajeCreditosObtenidos.disabled = true
    }

}