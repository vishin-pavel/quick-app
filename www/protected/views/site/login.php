<div class="container">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
    )); ?>

    <fieldset>

        <legend>Форма авторизации</legend>
        <?php echo $form->textFieldControlGroup($model, 'username',
            array(
                'help' => 'Введите, пожалуйста, имя пользователя.'
            )); ?>
        <?php echo $form->passwordFieldControlGroup($model, 'password',
            array(
                'help' => 'Введите, пожалуйста, пароль.'
            )); ?>
        <?php echo $form->checkBoxControlGroup($model, 'rememberMe'
        ); ?>

    </fieldset>

    <?php echo TbHtml::formActions(array(
        TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::resetButton('Reset'),
    )); ?>

    <?php $this->endWidget(); ?>
</div>
