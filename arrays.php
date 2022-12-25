<?php
$grades = [89, 18, 34, 'Ramy', [1, 2, 3, 4]];

var_export($grades);
echo "<br />";
var_export($grades[0]);

$student1 = ['id' => 1, 'name' => 'Ramy', 'grade' => 98, 'email' => 'test@test.com'];
$student2 = ['id' => 2, 'name' => 'Ibrahim', 'grade' => 94, 'email' => 'test3@test.com'];
$students = [$student1, $student2];

var_dump($students[0]['id']);
echo "<br />";
echo count($students);

for ($i = 0; $i < count($students); $i++) {
    echo "
    <div>
        <ul>
        <li>" . $students[$i]['id'] . "</li>
        <li>" . $students[$i]['name'] . "</li>
        <li>" . $students[$i]['email'] . "</li>
        </ul>
    </div>
    <hr />
    ";
}


for ($i = 0; $i < count($students); $i++) {
?>
<div>
    <ul>
        <?php
    foreach ($students[$i] as $k => $v) {
        echo "<li> $k : $v</li>";
    }
        ?>
    </ul>
</div>
<hr />
<?php
}

?>