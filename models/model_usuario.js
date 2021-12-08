import db from "../config/connection.js";
import { Sequelize } from "Sequelize";

const { DataTypes } = Sequelize
const Usuario = db.define("usuarios", {
    id: {
        type: DataTypes.INTEGER,
        primaryKey: true
    },
    nome: {
        type: Sequelize.STRING(200)
    },
    email:{
        type: Sequelize.STRING(200)
    },
    telefone:{
        type: Sequelize.INTEGER
    },
    data_nasc:{
        type: Sequelize.DATE,
    },
    cidade:{
        type: Sequelize.STRING(200)
    },
    estado:{
        type: Sequelize.STRING(200),
    },
    ranking:{
        type: Sequelize.STRING(200),
    },
    senha:{
        type: Sequelize.STRING(200)
    },
    pontos:{
        type: Sequelize.INTEGER,
    }

},{
    timestamps: false,
    freezeTableName: true
})

export default Usuario
