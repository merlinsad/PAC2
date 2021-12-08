import Sequelize from "Sequelize"

const db = new Sequelize("formulario", "root", "", {
    host:"localhost",
    dialect: "mysql"
})

export default db