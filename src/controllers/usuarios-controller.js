const { Usuario, Perfil } = require('../models')

class UsuariosController {
  constructor(app) {
    this._app = app
  }

  async listar(req, res) {
    try {
      const usuarios = await Usuario.findAll()
      res.render('usuarios/listar', {usuarios: usuarios})
    } catch(err) {
      res.status(500).end(`Error: ${err}`)
    }
  }

  async novo(req, res) {
    const usuario = {}
    res.render("usuarios/form", {usuario})
  }

  async registrar(req, res) {
    const dados = req.body

    req.assert("nome", "Nome é obrigatório").notEmpty()
    req.assert("cpf", "CPF é obrigatório").notEmpty()
    req.assert("data_nascimento", "Data Nascimento é obrigatório").notEmpty()
    req.assert("genero", "Genero é obrigatório").notEmpty()
    req.assert("email", "E-mail é obrigatório").notEmpty()
    req.assert("senha", "Senha é obrigatório").notEmpty()

    const erros = req.validationErrors()

    if (erros) {
      return res.render("usuarios/form", {erros, usuario})
    }

    try {
      let usuario = {
        email: dados.email,
        senha: dados.senha
      }

      usuario = await Usuario.create(usuario)

      console.log(usuario)

      let perfil = {
        usuario_id: usuario.id,
        nome: dados.nome,
        cpf: dados.cpf,
        data_nascimento: dados.data_nascimento,
        genero: dados.genero,
        telefone: dados.telefone
      }

      console.log(perfil)

      perfil = await Perfil.create(perfil)

      res.redirect("/usuarios")
    } catch(err) {
      res.status(500).end(`Error: ${err}`)
    }
  }

  async editar(req, res) {
    const id = req.params.id
    try {
      const usuario = await Usuario.findByPk(id)
      res.render('usuarios/form', { usuario })
    } catch(err) {
      res.status(500).end(`Error: ${err}`)
    }
  }

  async excluir(req, res) {
    const id = req.params.id
    try {
      await Usuario.destroy({ where: { id } })
      res.redirect('/usuarios')
    } catch(err) {
      res.status(500).end(`Error: ${err}`)
    }
  }

  async alterar(req, res) {
    const id = req.params.id
    const usuario = req.body
    try {
      await Usuario.update(usuario, { where: { id } })
      res.redirect('/usuarios')
    } catch(err) {
      res.status(500).end(`Error: ${err}`)
    }
  }
}

module.exports = UsuariosController