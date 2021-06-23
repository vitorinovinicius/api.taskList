# Para testar a API REST segue os passos:

- Utilizando o programa Postman ou algum outro de sua preferência;

## INSERIR TAREFA:

- No Postman para inserir novos dados, utilize o método POST;
- insira a url: http://127.0.0.1:8000/api/task;
- Em Headers/KEY, utilize o Content-Type e em VALUE application/json;
- Em Body, clique em form-data;
- Em KEY digite title e em VALUE digite a tarefa desejada.
- Clicando em Send irá salvar a tarefa inserida e retornará id, titulo e situação.

## LISTAR TAREFAS:

- Para listar tarefas utilize o método GET;
- insira a url: http://127.0.0.1:8000/api/tasks;
- Clicando em Send retornará todos as tarefas existentes.

## LISTAR TAREFA ESPECIFICA:

- Para listar uma tarefa utilize o método GET;
- insira a url: http://127.0.0.1:8000/api/task/(e o ID da tarefa que deseja listar);
- Clicando em Send retornará somente a tarefa desejada.

## ATUALIZAR TAREFA:

- Para atualizar uma tarefa utilize o método PUT;
- insira a url: http://127.0.0.1:8000/api/task/(e o ID da tarefa que deseja atualizar);
- Em Headers/KEY, utilize o Content-Type e em VALUE application/json;
- Em Body, clique em form-data;
- Em KEY digite title e done. No VALUE de title digite a tarefa desejada e no VALUE do done digite 1 ou 0 .
- Clicando em Send atualizará e retornará somente a tarefa desejada.

## DELETAR TAREFA:

- Para deletar uma tarefa utilize o método GET;
- insira a url: http://127.0.0.1:8000/api/task/(e o ID da tarefa que deseja deletar);
- Clicando em Send deletará e retornará somente a tarefa desejada.


## License & copyright
© Vinicius O Vitorino, Web Developer.
