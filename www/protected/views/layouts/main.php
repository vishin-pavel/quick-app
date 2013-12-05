<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <?php Yii::app()->bootstrap->register(); ?>

    <title>MyObject XML Админка</title>
</head>
<body>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'brandLabel' => 'Обзор ОПО',
    'display' => TbHtml::NAVBAR_DISPLAY_STATICTOP, // default is static to top
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'activateItems' => true,
            'items' => array(
                array('label' => 'Данные', 'url' => '/', 'visible' => !Yii::app()->user->isGuest),
                array('label' => 'Вход', 'url'   => '/site/login', 'visible'  => Yii::app()->user->isGuest),
                array('label' => 'Выход', 'url'  => '/user/logout', 'visible' => !Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<?php echo $content?>
</body>
</html>
