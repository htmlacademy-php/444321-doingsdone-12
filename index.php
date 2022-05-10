<?php
require_once( 'helpers.php' );

// Проекты и задачи
$projects = array(
    'Входящие',
    'Учеба',
    'Работа',
    'Домашние дела',
    'Авто',
);

$tasks = array(
    array(
        'name' => 'Собеседование в IT компании',
        'deadline'  => '01.12.2019',
        'category'  => 'Работа',
        'is_done'   => false,
    ),
    array(
        'name' => 'Выполнить тестовое задание',
        'deadline'  => '25.12.2019',
        'category'  => 'Работа',
        'is_done'   => false,
    ),
    array(
        'name' => 'Сделать задание первого раздела',
        'deadline'  => '21.12.2019',
        'category'  => 'Учеба',
        'is_done'   => true,
    ),
     array(
        'name' => 'Встреча с другом',
        'deadline'  => '22.12.2019',
        'category'  => 'Входящие',
        'is_done'   => false,
    ),
    array(
        'name' => 'Купить корм для кота',
        'deadline'  => '	null',
        'category'  => 'Домашние дела',
        'is_done'   => false,
    ),
    array(
        'name' => 'Заказать пиццу',
        'deadline'  => 'null',
        'category'  => 'Домашние дела',
        'is_done'   => false,
    ),
);

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

$content = include_template( 'main.php', array( 'projects' => $projects, 'tasks' => $tasks, 'show_complete_tasks' => $show_complete_tasks ) );

$page = include_template( 'layout.php', array( 'site_title' => 'Дела в порядке', 'user_name' => 'Константин', 'site_content' => $content ) );

print( $page );
