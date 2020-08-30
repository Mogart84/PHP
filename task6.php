<?php 

	$title = "Real Title";
	$menuItems = [
        "Пункт меню 1" => ["Подпункт 1.1", "Подпункт 1.2", "Подпункт 1.3"],
        "Пункт меню 2" => ["Подпункт 2.1", "Подпункт 2.2", "Подпункт 2.3"],
        "Пункт меню 3" => ["Подпункт 3.1", "Подпункт 3.2", "Подпункт 3.3"]
    ];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?= $title?></title>
</head>
<body>
    <ul>
        <?php
            foreach ($menuItems as $menuKey => $menuItem):?>
                <li><?= $menuKey ?>
                    <ul>
                        <?php
                            foreach ($menuItems[$menuKey] as $menuSubItem):?>
                            <li><?= $menuSubItem ?></li><?php
                            endforeach;
                        ?>
                    </ul>
                </li><?php
            endforeach;
        ?>
    </ul>
</body>
</html>