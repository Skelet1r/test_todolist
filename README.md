<h1>Тестовое задание по созданию ToDoList</h1>

<p>В качестве тестирования api я использую postman потому что как по мне он болле универсальный и там хороша командная разработка, ссылка на коллекцию postman - <a>https://laravelmarketplaceapi.postman.co/workspace/laravel_marketplace_api-Workspa~9bab561f-f142-45dc-88ac-382ee96576a1/collection/40142623-9faeb379-dfc9-48c7-b44c-c024c6ccd6f5?action=share&creator=40142623</a></p>

<h3>Описание эндпоинтов</h3>

<ul>
    <li>
        <h4>GET_TASKS</h4>
        <p>getTasks?name=M&sort=createdAt&order=asc - если написать без параметров (просто getTasks) то выдадутся все задачи по 10 штук на страницу, поиск и сортировка работают как надо</p>     
    </li>
    <li>
        <h4>ADD-TASK</h4>
        <p>/addTask - добавляет задачу, пример тела запроса:</p> 
        <p><pre><code>{
  "name": "Задача по разработке",
  "description": "Разработать новый функционал для проекта",
  "dueDate": "2025-02-01 10:00:00",
  "isCompleted": false,
  "priority": "Высокий",
  "category": "Разработка"
}</code></pre></p>
    </li>
    <li>
        <h4>UPDATE_TASK</h4>
        <p>/updateTask/{id} - обновляет задачу по id, например мы воспользовались предыдущим методом и мы хотим изменить задачу: </p> 
        <p><pre><code>{
  "name": "Задача по разработке",
  "description": "Разработать новый функционал для проекта",
  "dueDate": "2025-02-01 10:00:00",
  "isCompleted": true,
  "priority": "Высокий",
  "category": "Разработка"
}</code></pre></p>
    </li>
    <li>
        <h4>DELETE-TASK</h4>
        <p>/deleteTask/{id} - удаляет задачу по id, можем удалить предыдущую задачу запросом: </p>
        <p><pre><code>/deleteTask/1</code></pre></p>
    </li>
</ul>
