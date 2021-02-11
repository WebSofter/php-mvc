<p>Главная страница</p>
<ul>
    <li>Автор: David Amirkhanov (@websofter) <a href ="https://wsofter.ru">https://wsofter.ru</a></li>
    <li>GitHub: <a href="https://github.com/WebSofter/php-mvc">https://github.com/WebSofter/php-mvc</a></li>
    <li>Демо: <a href="https://beejee.wsofter.ru/">https://beejee.wsofter.ru/</a></li>
    <li>Видео: <a href="https://youtu.be/WraFsev5_oQ">https://youtu.be/WraFsev5_oQ</a></li>
    <li>Потрачено время: 10 часов</li>
</ul>
<a class="btn btn-success" href="task/new">Новая задача</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Задача</th>
            <th scope="col">Описание</th>
            <th scope="col">Время</th>
            <th scope="col">Статус</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($tasks as $val): ?>
        <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $val['title']; ?></td>
            <td><?php echo $val['description']; ?></td>
            <td><?php echo $val['time']; ?></td>
            <td><?php echo $val['status']; ?></td>
            <td>
				<a href="/task/edit?task=<?php echo $val['id']; ?>">
					<i class="fa fa-edit cursor-pointer text-warning"></i>
				</a>
			</td>
            <td>
				<a href="/task/delete?task=<?php echo $val['id']; ?>">
					<i class="fa fa-trash cursor-pointer text-danger"></i>
				</a>
			</td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="?page=<?php echo (empty($nav['page']) || $nav['page'] == 1 ? '#' : $nav['page'] - 1); ?>" aria-label="Пред">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
		<?php for($p = 1; $p <= intval($nav['rows'] / $nav['limit']); $p++ ): ?>
        	<li class="page-item <?php echo $nav['page'] == $p ? 'active': ''?> ">
				<a class="page-link" href="?page=<?php echo $p; ?>"><?php echo $p; ?></a>
			</li>
		<?php endfor; ?>
        <li class="page-item">
            <a class="page-link" href="?page=<?php echo (!empty($nav['page']) && $nav['page'] < intval($nav['rows'] / $nav['limit']) ? $nav['page'] + 1 : '#'); ?>" aria-label="След">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>