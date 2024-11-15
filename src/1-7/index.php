<?php
$members = [
    ['Taro' , 25 , 'men'],
    ['Jiro', 20 , 'men'],
    ['hanako', 16, 'women']
];

foreach ($members as $members){
    echo $members[0] . '(' . $members[1] . '歳' . $members[2] . ')'. '<br>';
}