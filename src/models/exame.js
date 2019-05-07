module.exports = (sequelize, DataTypes) => {
  const Exame = sequelize.define('Exame', {
    data: DataTypes.DATE,
    descricao: DataTypes.STRING,
    arquivo_url: DataTypes.STRING,
  },
  {
    tableName: 'exames',
    sequelize
  })

  //Exame.belongsTo(Usuario, {foreignKey: 'usuario_id', targetKey: 'id'})

  return Exame

}