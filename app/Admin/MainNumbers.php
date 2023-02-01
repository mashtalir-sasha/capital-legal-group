<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\MainNumbers;

AdminSection::registerModel(MainNumbers::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас в цифрах');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
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
            AdminDisplay::tabbed([
                'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                    AdminFormElement::columns()->addColumn(function () {
                        return [
                            AdminFormElement::text('title1', 'Заголовок 1')->required(),
                            AdminFormElement::textarea('text1', 'Текст 1')->required(),
                            AdminFormElement::html('<hr>'),
                            AdminFormElement::text('title4', 'Заголовок 4')->required(),
                            AdminFormElement::textarea('text4', 'Текст 4')->required(),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::text('title2', 'Заголовок 2')->required(),
                            AdminFormElement::textarea('text2', 'Текст 2')->required(),
                            AdminFormElement::html('<hr>'),
                            AdminFormElement::text('title5', 'Заголовок 5')->required(),
                            AdminFormElement::textarea('text5', 'Текст 5')->required(),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::text('title3', 'Заголовок 3')->required(),
                            AdminFormElement::textarea('text3', 'Текст 3')->required(),
                            AdminFormElement::html('<hr>'),
                            AdminFormElement::text('title6', 'Заголовок 6')->required(),
                            AdminFormElement::textarea('text6', 'Текст 6')->required(),
                        ];
                    }),
                ]),
                'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                    AdminFormElement::columns()->addColumn(function () {
                        return [
                            AdminFormElement::text('title1RU', 'Заголовок 1')->required(),
                            AdminFormElement::textarea('text1RU', 'Текст 1')->required(),
                            AdminFormElement::html('<hr>'),
                            AdminFormElement::text('title4RU', 'Заголовок 4')->required(),
                            AdminFormElement::textarea('text4RU', 'Текст 4')->required(),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::text('title2RU', 'Заголовок 2')->required(),
                            AdminFormElement::textarea('text2RU', 'Текст 2')->required(),
                            AdminFormElement::html('<hr>'),
                            AdminFormElement::text('title5RU', 'Заголовок 5')->required(),
                            AdminFormElement::textarea('text5RU', 'Текст 5')->required(),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::text('title3RU', 'Заголовок 3')->required(),
                            AdminFormElement::textarea('text3RU', 'Текст 3')->required(),
                            AdminFormElement::html('<hr>'),
                            AdminFormElement::text('title6RU', 'Заголовок 6')->required(),
                            AdminFormElement::textarea('text6RU', 'Текст 6')->required(),
                        ];
                    }),
                ]),
            ]),
        ]);

        return $form;
    });
});