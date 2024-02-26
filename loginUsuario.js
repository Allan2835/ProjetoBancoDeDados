const users = [
    { usuario: 'Allan', senha: 'allan123' },
    { usuario: 'Edson', senha: 'edson123' },
    { usuario: 'Joao', senha: 'joao123' },
    { usuario: 'Bruno', senha: 'bruno123' },
];

function validarLogin(usuario, senha) {
    const user = users.find(user => user.usuario === usuario && user.senha === senha);
    return user;
}
