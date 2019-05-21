const bcrypt = require('bcryptjs')
module.exports = (sequelize, DataTypes) => {
  const Usuario = sequelize.define('Usuario', {
    id: {
      type: DataTypes.INTEGER,
      primaryKey: true,
      autoIncrement: true,
      notNull: true
    },
    email: DataTypes.STRING,
    senha_hash: DataTypes.STRING,
    senha: DataTypes.VIRTUAL
  }, {
      hooks: {
        beforeSave: async (usuario) => {
          if (usuario.senha) {
            usuario.senha_hash = await bcrypt.hash(usuario.senha, 8)
          }
        }
      },

      classMethods: {
        isSenha_hash:(encodeSenha_hash, senha_hash) => bcrypt.compareSync(senha_hash,encodeSenha_hash),

      },

      tableName: 'usuarios',
      sequelize
    },
  )
  return Usuario
}