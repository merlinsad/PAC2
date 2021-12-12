import express from "express"
import { buscarUsuario, buscarUsuarioById, criarUsuario, deleteUsuario, updateUsuario } from "../controllers/controller_usuario.js"
const router = express.Router()

router.get("/usuarios", buscarUsuario)
router.get("/usuarios/:id", buscarUsuarioById)
router.post("/usuarios", criarUsuario)
router.put("/usuarios/:id", updateUsuario)
router.delete("/usuarios/:id", deleteUsuario)
export default router