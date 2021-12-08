import Usuario from "../models/model_usuario.js";

export const buscarUsuario = async(req, res) => {
    try{
        const Usuarios = await Usuario.findAll()
        res.send(Usuarios)
    } catch(erro){
        console.log(erro)
    }
}

export const criarUsuario = async(req, res) => {
    try{
        await Usuario.create(req.body)
        res.json({
            "mensagem": "Um novo usuario foi inserido"
        })
    }catch(erro){
        console.log(erro)
    }
}

export const updateUsuario = async(req, res) =>{
    try{
        await Usuario.update(req.body, {
            where:{
                id: req.params.id
            }
        })
        res.json({
            "mensagem":"O Usuario " + req.params.id + " foi atualizado no sistema."
        })
    } catch(erro){
        console.log(erro)
    }
}

export const deleteUsuario = async(req, res) => {
    try{
        await Usuario.destroy({
            where:{
                id: req.params.id
            }
        })
        res.json({
            "mensagem": "O Usuario " + req.params.id + " foi deletado."
        })
    }catch(erro){
        console.log(erro)
    }
}