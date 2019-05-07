'use strict';

module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable('perfils', {
      usuario_id: {
        type: Sequelize.INTEGER,
        primaryKey: true,
        allowNull: false
      },
      nome: {
        type: Sequelize.STRING,
        allowNull: false,
        unique: true
      },
      cpf: {
        type: Sequelize.STRING(16),
        allowNull: false,
        unique: true
      },
      data_nascimento: {
        type: Sequelize.DATE,
        allowNull: false
      },
      genero: {
        type: Sequelize.STRING(20),
        allowNull: true,
      },
      telefone: {
        type: Sequelize.STRING(15),
        allowNull: false,
      },
      foto_url: {
        type: Sequelize.STRING,
        allowNull: true,
      },
      tipo_sanguineo: {
        type: Sequelize.STRING(3),
        allowNull: true,
      },
      alergias: {
        type: Sequelize.TEXT,
        allowNull: true,
      },
      historico_medico: {
        type: Sequelize.TEXT,
        allowNull: true,
      },
      created_at: {
        type: Sequelize.DATE,
        allowNull: false
      },
      updated_at: {
        type: Sequelize.DATE,
        allowNull: false
      }
    })
  },
  down: (queryInterface, Sequelize) => {
    return queryInterface.dropTable('perfils')
  }
};