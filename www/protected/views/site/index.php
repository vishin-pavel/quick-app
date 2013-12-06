<div class="container">
    <?php $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider' => $ObjectDP,
        'columns' => array(
            array(
                'name' => 'date',
                'header' => 'Дата заполнения',
                'htmlOptions' => array('style' =>'width: 150px'),
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.organization.inn',
                'header' => 'ИНН',
                'htmlOptions' => array('style' =>'width: 100px'),
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.mails',
                'header' => 'E-mail адрес',
                'htmlOptions' => array('style' =>'min-width: 120px'),
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.organization.name',
                'header' => 'Наименование организации',
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.dangerObjects.doTypeNameDetail',
                'header' => 'Тип опасного Объекта',
            )
        ),
    )); ?>
</div>

