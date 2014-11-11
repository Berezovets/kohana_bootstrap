<h3>Список клиентов</h3>
<table class="table">
    <thead>
        <th>id</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>email</th>
        <th>Адресс</th>
        <th>Город</th>
        <th>Страна</th>        
    </thead>
    <tbody>
        <?php
        $i=1;
        foreach ($articles as $v)
        {
        echo "<tr>";
            echo "<td>".$v['id']."</td>";
            echo "<td>".$v['first_name']."</td>";
            echo "<td>".$v['last_name']."</td>";
            echo "<td>".$v['email']."</td>";
            echo "<td>".$v['adress']."</td>";
            echo "<td>".$v['city']."</td>";
            echo "<td>".$v['country']."</td>";
        echo "</tr>";
        $i++;
        }
        ?>
    </tbody>
</table>
