<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\YurLider;

AdminSection::registerModel(YurLider::class, function (ModelConfiguration $model) {

    $model->setTitle('Керівник напрямку');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('І\'мя'),
            AdminColumn::text('position')->setLabel('Посада'),
            AdminColumn::image('photo')->setLabel('Фото')->setImageWidth('150px'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()->addColumn(function () {
                return [
                    AdminDisplay::tabbed([
                        'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('name', 'І\'мя')->required(),
                            AdminFormElement::text('position', 'Посада')->required(),
                            AdminFormElement::text('number', 'Число для тексту')->required(),
                            AdminFormElement::text('text', 'Текст')->required(),
                            AdminFormElement::ckeditor('study', 'Освіта'),
                            AdminFormElement::ckeditor('practic', 'Практика роботи'),
                            AdminFormElement::ckeditor('sphere', 'Основні сфери спеціалізації'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('nameRU', 'Имя')->required(),
                            AdminFormElement::text('positionRU', 'Должность')->required(),
                            AdminFormElement::text('numberRU', 'Число для текста')->required(),
                            AdminFormElement::text('textRU', 'Текст')->required(),
                            AdminFormElement::ckeditor('studyRU', 'Образование'),
                            AdminFormElement::ckeditor('practicRU', 'Практика работы'),
                            AdminFormElement::ckeditor('sphereRU', 'Основные сферы специализации'),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::image('photo', 'Фото')->required(),
                    AdminFormElement::image('image', 'Фото диплому (чи інше)'),
                ];
            }, 4), 
        ]);

        return $form;
    });
});