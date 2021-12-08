import express from "express"
import cors from "cors"
import db from "./config/connection.js"
import Router from "./routes/routes.js"

const server = express()
server.use(express.json())
server.use(cors())

try {
    await db.authenticate()
    console.log("Conexão foi estabelecida!")
} catch(erro) {
    console.log(erro)
    close()
}

server.use(Router)

server.listen(6000, ()=> console.log("Server executando na http//localhost:6000"))