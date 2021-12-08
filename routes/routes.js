import express from "express"
import { buscarUsuario, criarUsuario, deleteUsuario, updateUsuario } from "../controllers/controller_usuario.js"
const router = express.Router()

router.get("/usuarios", buscarUsuario)
router.post("/usuarios", criarUsuario)
router.put("/usuarios/:id", updateUsuario)
router.delete("/usuarios/:id", deleteUsuario)
export default router