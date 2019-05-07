const UsuariosController = require("../controllers/usuarios-controller")

module.exports = (app) => {

	const controller = new UsuariosController(app)

	app.route("/usuarios")
		.get(controller.listar.bind(controller))
		.post(controller.registrar.bind(controller))

	app.get("/usuarios/novo", controller.novo.bind(controller))

	app.get("/usuarios/editar/:id", controller.editar.bind(controller))

	app.route("/usuarios/:id")
		.delete(controller.excluir.bind(controller))
		.put(controller.alterar.bind(controller))
}