<div class="container">
    <?php $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider' => $ObjectDP,
        'columns' => array(
            array(
                'name' => 'date',
                'header' => 'Дата заполнения'
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.mails',
                'header' => 'E-mail адрес',
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.organization.name',
                'header' => 'Наименование организации',
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.organization.inn',
                'header' => 'ИНН',
            ),
            array(
                'name' => 'data.Data.FormData.registrationULData.dangerObjects.doTypeNameDetail',
                'header' => 'Тип опасного Объекта',
            )
        ),
    )); ?>
</div>

