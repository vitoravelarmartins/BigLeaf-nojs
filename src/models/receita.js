module.exports = (sequelize, DataTypes) => {
    const Receita = sequelize.define('Receita', {
      data: DataTypes.DATE,
      descricao: DataTypes.STRING,
      arquivo_url: DataTypes.STRING,
    },
    {
      tableName: 'receitas',
      sequelize
    })

    //Perfil.belongsTo(Usuario, {foreignKey: 'usuario_id', targetKey: 'id'})
  
    return Receita
  }