module.exports = (sequelize, DataTypes) => {
  const Perfil = sequelize.define('Perfil', {
    usuario_id: {
      type: DataTypes.INTEGER,
      primaryKey: true,
      notNull: true
    },
    nome: {
      type: DataTypes.STRING,
      validate: {
        len: {
          args: [3, 80],
          msg: 'Campo nome deve ter no minimo 3 e no maximo 80 caracteres'
        }
      },
    },
    cpf: DataTypes.STRING,
    data_nascimento: DataTypes.DATE,
    telefone: DataTypes.STRING,
    foto_url: DataTypes.STRING,
    tipo_sanguineo: DataTypes.STRING,
    genero: DataTypes.STRING,
    alergias: DataTypes.TEXT,
    historico_medico: DataTypes.TEXT,
  },
  {
    tableName: 'perfils',
    sequelize
  })

  return Perfil
}