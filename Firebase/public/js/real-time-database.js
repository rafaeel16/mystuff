var usersList = document.getElementById('usersList');
var nameInput = document.getElementById('nameInput');
var ageInput = document.getElementById('ageInput');
var addButton = document.getElementById('addButton');

//Ao clicar no botão
addButton.addEventListener('click', function() {
    create(nameInput.value, ageInput.value);
});

//function que armazena os inputs na variavel data
function create(name, age) {
    var data = {
      name:name,
      age:age
    };

    //firebase.database() conecta no BD
    //ref() definir uma referencia
    //child('nome') define um filho da base
    //push Envia os dados
    return firebase.database().ref().child('users').push(data);
}

//ref('users') referenciando a "tabela"
//on('value') Toda fez que algum valor for alterado, a function será executada
//snapshot seria uma array ou json com todos os dados do DB no Firebase
firebase.database().ref('users').on('value', function (snapshot) {
    //Limpando o campo
    usersList.innerHTML = '';
    //Para cada item que vem no snapshot é criado um 'li'
    snapshot.forEach(function (item) {
        var li = document.createElement('li');
        //appendChild cria um child no elemento informado
        //CreateTextNode cria um texto
        li.appendChild(document.createTextNode(item.val().name + ': ' +item.val().age));
        //Adicionando o 'li' dentro de do 'ul'
        usersList.appendChild(li);
    });
});
